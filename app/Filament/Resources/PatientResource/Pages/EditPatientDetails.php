<?php

namespace App\Filament\Resources\PatientResource\Pages;

// use Filament\Pages\Page;
use Filament\Resources\Pages\Page;
use App\Models\Patient;
use App\Models\Pregnancy;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;

class EditPatientDetails extends Page implements HasForms
{
    protected static string $resource = \App\Filament\Resources\PatientResource::class;
    protected string $view = 'filament.resources.patient-resource.pages.edit-patient-details';

    use InteractsWithForms;

    public ?Patient $patient = null;
    public ?Pregnancy $pregnancy = null;
    // public $consults = [];

    public function getTitle(): string
    {
        if ($this->patient) {
            return trim(($this->patient->firstname ?? '') . ' ' . ($this->patient->lastname ?? ''));
        }
        return __('Edit Patient Custom');
    }


    public function mount(Patient $record): void
    {
        $this->patient = $record;
        $this->pregnancy = $record->pregnancies()->latest()->first();
    // $this->consults = $record->consults()->get();
    }

    public static function shouldRegisterNavigation(array $parameters = []): bool
    {
        return false;
    }
}
