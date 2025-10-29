<?php

namespace App\Filament\Resources\Consults\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class ConsultsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('patient.lastname')->label('Patient')->searchable(),
                TextColumn::make('user.name')->label('User')->searchable(),
                TextColumn::make('consulted_at')->label('Consulted at')->dateTime('Y-m-d H:i'),
                TextColumn::make('duration')->label('Duration (min)'),
                BadgeColumn::make('type')
                    ->label('Type')
                    ->formatStateUsing(fn($state) => $state?->label() ?? $state),
                TextColumn::make('notes')->label('Notes')->limit(30),
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
