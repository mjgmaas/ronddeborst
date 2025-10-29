<?php

namespace App\Filament\Resources\Invoices\Schemas;

use Filament\Schemas\Schema;

class InvoiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('created_by')
                    ->relationship('user', 'name')
                    ->required(),
                \Filament\Forms\Components\Select::make('patient_id')
                    ->getOptionLabelFromRecordUsing(fn($record) => $record->firstname . ' ' . $record->lastname)
                    ->relationship('patient', 'lastname')
                    ->searchable()
                    ->required(),
                \Filament\Forms\Components\TextInput::make('send_to')
                    ->email()
                    ->required(),
                \Filament\Forms\Components\DateTimePicker::make('send_at'),
                \Filament\Forms\Components\Toggle::make('is_payed'),
            ]);
    }
}
