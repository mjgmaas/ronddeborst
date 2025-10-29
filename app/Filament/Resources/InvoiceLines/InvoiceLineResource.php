<?php

namespace App\Filament\Resources\InvoiceLines;

use App\Filament\Resources\InvoiceLines\Pages\CreateInvoiceLine;
use App\Filament\Resources\InvoiceLines\Pages\EditInvoiceLine;
use App\Filament\Resources\InvoiceLines\Pages\ListInvoiceLines;
use App\Filament\Resources\InvoiceLines\Schemas\InvoiceLineForm;
use App\Filament\Resources\InvoiceLines\Tables\InvoiceLinesTable;
use App\Models\InvoiceLine;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InvoiceLineResource extends Resource
{
    protected static ?string $model = InvoiceLine::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'line_text';

    public static function form(Schema $schema): Schema
    {
        return InvoiceLineForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InvoiceLinesTable::configure($table);
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
            'index' => ListInvoiceLines::route('/'),
            'create' => CreateInvoiceLine::route('/create'),
            'edit' => EditInvoiceLine::route('/{record}/edit'),
        ];
    }
}
