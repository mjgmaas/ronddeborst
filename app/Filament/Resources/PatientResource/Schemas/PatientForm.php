<?php

namespace App\Filament\Resources\PatientResource\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PatientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Patiëntgegevens')
                    ->schema([
                        TextInput::make('firstname')
                            ->label('Voornaam')
                            ->required(),
                        TextInput::make('lastname')
                            ->label('Achternaam')
                            ->required(),
                        TextInput::make('street')
                            ->label('Straat')
                            ->required(),
                        // Housenumber and suffix side by side in right column, no border or padding
                        Section::make()
                            ->schema([
                                TextInput::make('housenumber')
                                    ->label('Huisnummer')
                                    ->required()
                                    ->extraAttributes(['class' => 'p-0 border-0 shadow-none']),
                                TextInput::make('housenumber_suffix')
                                    ->label('Toevoeging')
                                    ->extraAttributes(['class' => 'p-0 border-0 shadow-none']),
                            ])
                            ->columns(2)
                            ->contained(false)
                            ->compact(),
                        // ...existing code...
                        TextInput::make('postal_code')
                            ->label('Postcode')
                            ->required(),
                        TextInput::make('city')
                            ->label('Plaats')
                            ->required(),
                        TextInput::make('country')
                            ->label('Land')
                            ->required(),
                        TextInput::make('phone')
                            ->label('Telefoon'),
                        TextInput::make('email')
                            ->label('E-mail')
                            ->email(),
                        DatePicker::make('birthdate')
                            ->label('Geboortedatum')
                            ->firstDayOfWeek(1)
                            ->displayFormat('Y-m-d')
                            ->placeholder('Kies een geboortedatum')
                            ->native(false),
                        Section::make('Partnergegevens')
                            ->schema([
                                TextInput::make('partner_firstname')
                                    ->label('Partner voornaam'),
                                TextInput::make('partner_lastname')
                                    ->label('Partner achternaam'),
                                TextInput::make('partner_phone')
                                    ->label('Partner telefoon'),
                            ])
                            ->columns(2)
                            ->columnSpanFull()
                            ->collapsible()
                            ->collapsed(),
                        Textarea::make('notes')
                            ->label('Notities')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
