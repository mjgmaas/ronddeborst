<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'street',
        'housenumber',
        'housenumber_suffix',
        'postal_code',
        'city',
        'country',
        'phone',
        'email',
        'birthdate',
        'notes',
        'partner_firstname',
        'partner_lastname',
        'partner_phone',
        'last_viewed_at',
        'general_practitioner',
        'midwife',
        'maternity_care_provider',
    ];

    public function pregnancies()
    {
        return $this->hasMany(Pregnancy::class);
    }
}
