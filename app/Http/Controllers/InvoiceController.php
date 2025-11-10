<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function download(Invoice $invoice)
    {
        $pdf = PDF::loadView('invoices.pdf', compact('invoice'));
        return $pdf->download('factuur-'.$invoice->id.'.pdf');
    }
}
