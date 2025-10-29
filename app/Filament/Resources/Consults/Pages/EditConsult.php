<?php

namespace App\Filament\Resources\Consults\Pages;

use App\Filament\Resources\Consults\ConsultResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditConsult extends EditRecord
{
    protected static string $resource = ConsultResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
