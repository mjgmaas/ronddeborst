<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Throwable;
use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $city = '';
    public $remarks = '';
    public $due_date = null;
    public $status = null;
    public $statusType = null;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:30',
        'city' => 'required|string|max:255',
        'remarks' => 'required|string|max:2000',
        'due_date' => 'nullable|date',
    ];

    public function submit()
    {
        $this->reset('status', 'statusType');

        $validated = $this->validate();

        app(\App\Services\ContactSubmissionService::class)->handle($validated);

        $this->statusType = 'success';
        $this->status = 'Bedankt! Jouw bericht is verstuurd.';
        $this->reset(['name', 'email', 'phone', 'city', 'remarks', 'due_date']);
        $this->dispatch('contact-form-submitted');
    }

    public function exception(Throwable $exception, callable $stopPropagation): void
    {
        if ($exception instanceof ValidationException) {
            return;
        }

        report($exception);

        $this->statusType = 'error';
        $this->status = 'Er ging iets mis bij het versturen van je bericht. Probeer het later opnieuw.';

        $stopPropagation();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
