<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $remarks = '';
    public $status = null;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:30',
        'remarks' => 'required|string|max:2000',
    ];

    public function submit()
    {
        $validated = $this->validate();
        app(\App\Services\ContactSubmissionService::class)->handle($validated);
        $this->status = 'Bedankt! Jouw bericht is verstuurd.';
        $this->reset(['name', 'email', 'phone', 'remarks']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
