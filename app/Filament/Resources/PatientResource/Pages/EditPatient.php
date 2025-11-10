<?php

namespace App\Filament\Resources\PatientResource\Pages;

use App\Filament\Resources\PatientResource;
use Filament\Resources\Pages\EditRecord;

class EditPatient extends EditRecord
{
    protected static string $resource = PatientResource::class;


    public function mount($record): void
    {
        parent::mount($record);
        $this->record->update(['last_viewed_at' => now()]);
        // Redirect to the custom details page
        $this->redirect("/admin/patients/{$record}/details");
    }
}
