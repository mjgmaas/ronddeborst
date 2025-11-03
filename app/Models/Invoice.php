<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    // 'invoice_number' is the unique title/identifier for the invoice
    protected $fillable = [
        'created_by',
        'patient_id',
        'send_to',
        'send_at',
        'is_payed',
        'invoice_number',
    ];

    protected $casts = [
        'send_at' => 'datetime',
        'is_payed' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function lines()
    {
        return $this->hasMany(InvoiceLine::class);
    }
}
