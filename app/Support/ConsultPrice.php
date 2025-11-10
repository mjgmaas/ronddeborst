<?php

namespace App\Support;

use App\Enums\ConsultType;

class ConsultPrice
{
    public static function forType(ConsultType|string|null $type): int
    {
        if ($type instanceof ConsultType) {
            $type = $type->value;
        }
        $prices = config('consult_prices', []);
        return $prices[$type] ?? 100;
    }
}
