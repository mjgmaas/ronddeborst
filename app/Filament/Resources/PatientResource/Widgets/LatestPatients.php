<?php

namespace App\Filament\Resources\PatientResource\Widgets;

use App\Models\Patient;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestPatients extends TableWidget
{
    protected static ?string $heading = 'Recent geopend';
    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Patient::query()->orderByDesc('last_viewed_at')->limit(5))
            ->columns([
                TextColumn::make('firstname')->label('Voornaam'),
                TextColumn::make('lastname')->label('Achternaam'),
                TextColumn::make('city')->label('Plaats')->visibleFrom('md'),
                TextColumn::make('phone')->label('Telefoon'),
                TextColumn::make('email')->label('E-mailadres'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ])
            ->searchable(false)
            ->paginated(false)
            ->recordUrl(fn ($record) => \App\Filament\Resources\PatientResource::getUrl('edit', ['record' => $record]));
    }
}
