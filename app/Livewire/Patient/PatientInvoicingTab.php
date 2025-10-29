<?php

namespace App\Livewire\Patient;

use Livewire\Component;
use App\Models\Patient;


class PatientInvoicingTab extends Component
{
    public Patient $patient;
    public $consults;
    public $selectedConsults = [];
    public $invoices = [];
    protected $listeners = ['consultUpdated' => 'refreshConsults'];

    public function mount(Patient $patient)
    {
        $this->patient = $patient;
        $this->refreshConsults();
        $this->refreshInvoices();
    }

    public function refreshConsults()
    {
        $this->consults = $this->patient->consults()->where('is_invoicable', true)->orderBy('consulted_at', 'desc')->get();
    }

    public function refreshInvoices()
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        $this->invoices = \App\Models\Invoice::where('patient_id', $this->patient->id)
            ->where('created_by', $user?->id)
            ->with(['lines', 'patient', 'user'])
            ->orderByDesc('created_at')
            ->get();
    }

    public function createInvoice()
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        if (!$user || empty($this->selectedConsults)) {
            return;
        }

        $invoice = \App\Models\Invoice::create([
            'created_by' => $user->id,
            'patient_id' => $this->patient->id,
            'send_to' => $this->patient->email ?? '',
            'send_at' => now(),
            'is_payed' => false,
        ]);

        $consults = \App\Models\Consult::whereIn('id', $this->selectedConsults)->get();
        foreach ($consults as $consult) {
            \App\Models\InvoiceLine::create([
                'invoice_id' => $invoice->id,
                'consult_id' => $consult->id,
                'price' => 0,
                'vat' => 'no',
                'line_text' => $consult->type?->label() . ' op ' . $consult->consulted_at?->format('d-m-Y'),
            ]);
        }

        $this->selectedConsults = [];
        $this->refreshConsults();
        $this->refreshInvoices();
    }

    public function render()
    {
        return view('livewire.patient.patient-invoicing-tab', [
            'consults' => $this->consults,
            'invoices' => $this->invoices,
        ]);
    }
}
