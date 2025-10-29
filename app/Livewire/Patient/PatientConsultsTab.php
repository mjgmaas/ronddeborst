<?php

namespace App\Livewire\Patient;

use Livewire\Component;
use App\Models\Consult;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;

class PatientConsultsTab extends Component
{
    public Patient $patient;
    public $consults;
    public $sortDirection = 'asc';
    public $newConsultId = null;

    // Modal state and form data
    public $showModal = false;
    public $form = [
        'type' => null,
        'consulted_at' => null,
    ];
    public $modalError = null;
    public $showDuplicateWarning = false;
    public $pendingForm = null;

    protected $listeners = ['consultCreated' => 'refreshConsults'];

    public function mount(Patient $patient)
    {
        $this->patient = $patient;
        $this->sortDirection = 'asc';
        $this->refreshConsults();
        $this->form['type'] = \App\Enums\ConsultType::cases()[0]->value;
        $this->form['consulted_at'] = now()->format('Y-m-d\TH:i');
    }

    public function openCreateModal()
    {
        $this->resetModal();
        $this->showModal = true;
    }

    public function closeCreateModal()
    {
        $this->showModal = false;
    }

    public function resetModal()
    {
        $this->form['type'] = \App\Enums\ConsultType::cases()[0]->value;
        $this->form['consulted_at'] = now()->format('Y-m-d\TH:i');
        $this->modalError = null;
        $this->showDuplicateWarning = false;
        $this->pendingForm = null;
    }

    public function submitCreateConsult()
    {
        $this->modalError = null;
        $this->validate([
            'form.type' => 'required|string',
            'form.consulted_at' => 'required|date',
        ]);

        // Check for duplicate consult on the same date (ignore time)
        $consultedAt = $this->form['consulted_at'] ?? now()->format('Y-m-d H:i:s');
        $date = date('Y-m-d', strtotime($consultedAt));
        $exists = $this->patient->consults()
            ->whereDate('consulted_at', $date)
            ->exists();

        if ($exists && !$this->showDuplicateWarning) {
            $this->showDuplicateWarning = true;
            $this->pendingForm = $this->form;
            return;
        }

        // Create consult
        $consult = Consult::create([
            'patient_id' => $this->patient->id,
            'user_id' => Auth::id(),
            'consulted_at' => $this->form['consulted_at'],
            'duration' => 0,
            'type' => $this->form['type'],
            'notes' => null,
        ]);
        $this->showModal = false;
        $this->showDuplicateWarning = false;
        $this->pendingForm = null;
        $this->refreshConsults();
        // Find the new consult's index in the sorted collection
        $this->newConsultId = null;
        foreach ($this->consults as $c) {
            if ($c->id === $consult->id) {
                $this->newConsultId = $c->id;
                break;
            }
        }
        // Defer focus event until after DOM update
        $this->dispatch('focus-notes', consultId: $this->newConsultId);
    }

    public function cancelDuplicateWarning()
    {
        $this->showDuplicateWarning = false;
        $this->modalError = null;
    }

    public function proceedDuplicateWarning()
    {
        // Proceed with creating consult even if duplicate, using pendingForm
        $form = $this->pendingForm ?? $this->form;
        $consult = Consult::create([
            'patient_id' => $this->patient->id,
            'user_id' => Auth::id(),
            'consulted_at' => $form['consulted_at'],
            'duration' => 0,
            'type' => $form['type'],
            'notes' => null,
        ]);
        $this->newConsultId = $consult->id;
        $this->showModal = false;
        $this->showDuplicateWarning = false;
        $this->pendingForm = null;
        $this->refreshConsults();
    }

    public function refreshConsults()
    {
        $this->consults = $this->patient->consults()->orderBy('consulted_at', $this->sortDirection)->get();
    }

    public function toggleSortDirection()
    {
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        $this->refreshConsults();
    }

    public function render()
    {
        return view('livewire.patient.patient-consults-tab', [
            'consults' => $this->consults,
            'newConsultId' => $this->newConsultId,
            'form' => $this->form,
            'showModal' => $this->showModal,
            'modalError' => $this->modalError,
            'showDuplicateWarning' => $this->showDuplicateWarning,
            'sortDirection' => $this->sortDirection,
        ]);
    }
}
