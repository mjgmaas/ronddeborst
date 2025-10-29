<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceLine extends Model
{
    protected $fillable = [
        'invoice_id',
        'consult_id',
        'price',
        'vat',
        'line_text',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function consult()
    {
        return $this->belongsTo(Consult::class);
    }
}
