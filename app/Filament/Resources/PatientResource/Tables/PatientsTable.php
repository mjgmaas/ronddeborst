<?php

namespace App\Filament\Resources\PatientResource\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PatientsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('firstname')->label('Voornaam'),
                TextColumn::make('lastname')->label('Achternaam'),
                TextColumn::make('city')->label('Plaats'),
                TextColumn::make('birthdate')
                    ->label('Geboortedatum')
                    ->formatStateUsing(fn ($state) => $state ? \Carbon\Carbon::parse($state)->format('d-m-Y') : null),
                TextColumn::make('last_viewed_at')
                    ->label('Laatst bekeken')
                    ->formatStateUsing(fn ($state) => $state ? \Carbon\Carbon::parse($state)->format('d-m-Y H:i') : null),
            ])
            ->filters([
                // Add filters if needed
            ]);
    }
}
