<?php

namespace App\Filament\Resources\Consults\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use App\Enums\ConsultType;
use App\Models\Patient;
use App\Models\User;

class ConsultForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('patient_id')
                    ->label('Patient')
                    ->relationship('patient', 'lastname')
                    ->searchable()
                    ->required(),
                Select::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->required(),
                DateTimePicker::make('consulted_at')
                    ->label('Consulted at')
                    ->required(),
                TextInput::make('duration')
                    ->label('Duration (minutes)')
                    ->numeric()
                    ->required(),
                Select::make('type')
                    ->label('Type')
                    ->options(collect(ConsultType::cases())->mapWithKeys(fn($case) => [$case->value => $case->label()]))
                    ->required(),
                Textarea::make('notes')
                    ->label('Notes')
                    ->rows(3),
            ]);
    }
}
