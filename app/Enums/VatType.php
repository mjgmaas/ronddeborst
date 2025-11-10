<?php

namespace App\Enums;

enum VatType: string
{
    case No = 'no';
    case Low = 'low';
    case High = 'high';
    // Add more VAT types as needed

    public function label(): string
    {
        return match($this) {
            self::No => 'Vrijgesteld',
            self::Low => 'Laag tarief',
            self::High => 'Hoog tarief',
        };
    }
}
