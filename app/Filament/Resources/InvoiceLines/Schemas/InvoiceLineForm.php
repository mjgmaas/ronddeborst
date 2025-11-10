<?php

namespace App\Filament\Resources\InvoiceLines\Schemas;

use Filament\Schemas\Schema;

class InvoiceLineForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('invoice_id')
                    ->relationship('invoice', 'id')
                    ->required(),
                \Filament\Forms\Components\Select::make('consult_id')
                    ->relationship('consult', 'id')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->required(),
                \Filament\Forms\Components\Select::make('vat')
                    ->options([
                        'no' => 'No',
                        'low' => 'Low',
                        'high' => 'High',
                    ])
                    ->required(),
                \Filament\Forms\Components\TextInput::make('line_text')
                    ->required(),
            ]);
    }
}
