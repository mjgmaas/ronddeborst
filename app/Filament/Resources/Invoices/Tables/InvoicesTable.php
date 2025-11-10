<?php

namespace App\Filament\Resources\Invoices\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class InvoicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('id')->sortable(),
                \Filament\Tables\Columns\TextColumn::make('user.name')->label('Created By')->sortable(),
                \Filament\Tables\Columns\TextColumn::make('patient.name')->label('Patient')->sortable(),
                \Filament\Tables\Columns\TextColumn::make('send_to')->label('Send To')->sortable(),
                \Filament\Tables\Columns\TextColumn::make('send_at')->dateTime()->sortable(),
                \Filament\Tables\Columns\IconColumn::make('is_payed')->boolean()->label('Payed'),
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
