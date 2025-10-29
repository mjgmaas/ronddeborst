<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Enums\ConsultType;
use App\Models\Patient;
use App\Models\User;

class Consult extends Model
{
    protected $fillable = [
        'consulted_at',
        'duration',
        'type',
        'notes',
        'is_invoicable',
        'patient_id',
        'user_id',
    ];

    protected $casts = [
        'consulted_at' => 'datetime',
        'type' => ConsultType::class,
        'is_invoicable' => 'boolean',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
