<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $remarks = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:30',
        'remarks' => 'required|string|max:2000',
    ];

    public function submit()
    {
        $this->validate();

        // Here you can handle the form submission, e.g. send mail or save to DB
        // For now, just show a success message
        session()->flash('status', 'Bedankt voor je bericht! We nemen zo snel mogelijk contact op.');

        $this->reset(['name', 'email', 'phone', 'remarks']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
