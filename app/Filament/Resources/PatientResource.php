<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Models\Patient;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use App\Filament\Resources\PatientResource\Schemas\PatientForm;
use App\Filament\Resources\PatientResource\Tables\PatientsTable;
use App\Filament\Resources\PatientResource\RelationManagers\PregnanciesRelationManager;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

class PatientResource extends Resource
{
    protected static bool $globallySearchable = true;
    protected static ?string $model = Patient::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;
    protected static ?string $navigationLabel = 'Patiënten';
    protected static ?string $modelLabel = 'Patiënt';
    protected static ?string $pluralModelLabel = 'Patiënten';

    public static function form(Schema $schema): Schema
    {
        return PatientForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PatientsTable::configure($table);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'firstname',
            'lastname',
            'email',
            'phone',
            'partner_firstname',
            'partner_lastname',
        ];
    }

    public static function getGlobalSearchResultTitle($record): string
    {
        return $record->firstname . ' ' . $record->lastname;
    }

    public static function getGlobalSearchResultDetails($record): array
    {
        return [
            $record->birthdate ? \Carbon\Carbon::parse($record->birthdate)->format('d-m-Y') : null
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}
