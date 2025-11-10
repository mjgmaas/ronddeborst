<?php

namespace App\Filament\Resources\Pregnancies\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PregnancyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // patient_id is set automatically, not editable
                DatePicker::make('due_date'),
                DatePicker::make('delivery_date'),
                \Filament\Forms\Components\Select::make('delivery_type')
                    ->options([
                        'vaginal_spontaneous' => 'Vaginal Spontaneous',
                        'vaginal_induced' => 'Vaginal Induced',
                        'vaginal_instrumental' => 'Vaginal Instrumental',
                        'cesarean_elective' => 'Cesarean Elective',
                        'cesarean_emergency' => 'Cesarean Emergency',
                        'water_birth' => 'Water Birth',
                        'breech_vaginal' => 'Breech Vaginal',
                        'assisted_other' => 'Assisted Other',
                        'unknown' => 'Unknown',
                        'other' => 'Other',
                    ])
                    ->label('Delivery Type')
                    ->searchable(),
                TextInput::make('delivery_type_other'),
                \Filament\Forms\Components\Select::make('birth_place')
                    ->options([
                        'home' => 'Home',
                        'hospital' => 'Hospital',
                        'birth_center' => 'Birth Center',
                        'unknown' => 'Unknown',
                        'other' => 'Other',
                    ])
                    ->label('Birth Place')
                    ->searchable(),
                TextInput::make('birth_place_other'),
                Textarea::make('complications')
                    ->columnSpanFull(),
                Textarea::make('medication_during_delivery')
                    ->columnSpanFull(),
                Textarea::make('remarks')
                    ->columnSpanFull(),
            ]);
    }
}
