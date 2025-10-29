<?php

namespace App\Filament\Resources\InvoiceLines\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class InvoiceLinesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('id')->sortable(),
                \Filament\Tables\Columns\TextColumn::make('invoice_id')->sortable(),
                \Filament\Tables\Columns\TextColumn::make('consult_id')->sortable(),
                \Filament\Tables\Columns\TextColumn::make('price')->money('EUR'),
                \Filament\Tables\Columns\TextColumn::make('vat')->sortable(),
                \Filament\Tables\Columns\TextColumn::make('line_text')->limit(40),
                \Filament\Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
                \Filament\Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
