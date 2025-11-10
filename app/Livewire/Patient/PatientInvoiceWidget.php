<?php

namespace App\Livewire\Patient;

use Livewire\Component;
use App\Models\Invoice;


class PatientInvoiceWidget extends Component
{
    public Invoice $invoice;
    public ?int $editingLineId = null;
    public string $editText = '';
    public float $editPrice = 0.0;

    protected $rules = [
        'editText' => 'required|string',
        'editPrice' => 'required|numeric|min:0',
    ];

    public function mount(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    public function startEdit($lineId)
    {
        $line = $this->invoice->lines->find($lineId);
        if ($line) {
            $this->editingLineId = $lineId;
            $this->editText = $line->line_text;
            $this->editPrice = $line->price;
        }
    }

    public function stopEdit()
    {
        $this->editingLineId = null;
        $this->editText = '';
        $this->editPrice = 0.0;
    }

    public function autoSave()
    {
        $this->validate();
        $line = $this->invoice->lines->find($this->editingLineId);
        if ($line) {
            $line->update([
                'line_text' => $this->editText,
                'price' => $this->editPrice,
            ]);
        }
        // Do not stop edit mode after autoSave
    }

    public function render()
    {
        return view('livewire.patient.patient-invoice-widget');
    }
}
