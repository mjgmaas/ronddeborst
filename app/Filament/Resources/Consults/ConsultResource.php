<?php

namespace App\Filament\Resources\Consults;

use App\Filament\Resources\Consults\Pages\CreateConsult;
use App\Filament\Resources\Consults\Pages\EditConsult;
use App\Filament\Resources\Consults\Pages\ListConsults;
use App\Filament\Resources\Consults\Schemas\ConsultForm;
use App\Filament\Resources\Consults\Tables\ConsultsTable;
use App\Models\Consult;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ConsultResource extends Resource
{
    protected static ?string $model = Consult::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'consulted_at';

    public static function getRecordTitle($record): ?string
    {
        return $record->type?->label() . ' (' . $record->consulted_at?->format('d-m-Y') . ')';
    }
    public static function form(Schema $schema): Schema
    {
        return ConsultForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ConsultsTable::configure($table);
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
            'index' => ListConsults::route('/'),
            'create' => CreateConsult::route('/create'),
            'edit' => EditConsult::route('/{record}/edit'),
        ];
    }
}
