<?php

namespace App\Livewire\Patient;

use Livewire\Component;
use App\Models\Invoice;

class InvoiceWidget extends Component
{
    public Invoice $invoice;

    public function mount(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    public function render()
    {
        return view('livewire.patient.invoice-widget', [
            'invoice' => $this->invoice,
        ]);
    }
}
