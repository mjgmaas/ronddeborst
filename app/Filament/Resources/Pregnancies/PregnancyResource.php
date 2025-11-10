<?php

namespace App\Filament\Resources\Pregnancies;

use App\Filament\Resources\Pregnancies\Pages\CreatePregnancy;
use App\Filament\Resources\Pregnancies\Pages\EditPregnancy;
use App\Filament\Resources\Pregnancies\Pages\ListPregnancies;
use App\Filament\Resources\Pregnancies\Schemas\PregnancyForm;
use App\Filament\Resources\Pregnancies\Tables\PregnanciesTable;
use App\Models\Pregnancy;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PregnancyResource extends Resource
{
    protected static ?string $model = Pregnancy::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'due_date';

    public static function form(Schema $schema): Schema
    {
        return PregnancyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PregnanciesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPregnancies::route('/'),
            // Remove global create and edit pages to prevent orphan pregnancies
        ];
    }
}
