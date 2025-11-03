<?php

namespace App\Livewire\Patient;

use Livewire\Component;
use App\Models\InvoiceLine;

class PatientInvoiceLineRow extends Component
{
    public InvoiceLine $line;
    public bool $editing = false;
    public string $editText;
    public float $editPrice;

    protected $rules = [
        'editText' => 'required|string',
        'editPrice' => 'required|numeric|min:0',
    ];

    public function mount(InvoiceLine $line)
    {
        $this->line = $line;
        $this->editText = $line->line_text;
        $this->editPrice = $line->price;
    }

    public function startEdit()
    {
        $this->editing = true;
    }

    public function stopEdit()
    {
        $this->editing = false;
    }

    public function updatedEditText()
    {
        $this->autoSave();
    }

    public function updatedEditPrice()
    {
        $this->autoSave();
    }

    public function autoSave()
    {
        $this->validate();
        $this->line->update([
            'line_text' => $this->editText,
            'price' => $this->editPrice,
        ]);
        $this->editing = false;
        $this->dispatch('invoiceLineUpdated');
    }

    public function render()
    {
        return view('livewire.components.patient-invoice-line-row');
    }
}
