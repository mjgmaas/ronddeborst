<?php

namespace App\Livewire\Patient;

use Livewire\Component;
use App\Models\Invoice;

class PatientInvoiceWidget extends Component
{
    public Invoice $invoice;

    public function mount(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    public function render()
    {
        return view('livewire.patient.patient-invoice-widget');
    }
}
