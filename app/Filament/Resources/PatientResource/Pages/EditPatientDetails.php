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
    public array $patientData = [];
    public array $pregnancyData = [];

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
    }


    // public function formPregnancy($schema = null)
    // {
    //     $schema = $schema ?? new \Filament\Forms\Form();
    //     return $schema
    //         ->components([
    //             DatePicker::make('due_date')->label('Uitgerekende datum'),
    //             DatePicker::make('delivery_date')->label('Geboortedatum'),
    //             TextInput::make('delivery_type')->label('Type bevalling'),
    //             TextInput::make('delivery_type_other')->label('Anders (bevalling)'),
    //             TextInput::make('birth_place')->label('Geboorteplaats'),
    //             TextInput::make('birth_place_other')->label('Anders (geboorteplaats)'),
    //             Textarea::make('complications')->label('Complicaties')->columnSpanFull(),
    //             Textarea::make('medication_during_delivery')->label('Medicatie tijdens bevalling')->columnSpanFull(),
    //             Textarea::make('remarks')->label('Opmerkingen')->columnSpanFull(),
    //             Toggle::make('is_current')->label('Huidige zwangerschap'),
    //         ])
    //         ->statePath('pregnancyData');
    // }


    public static function shouldRegisterNavigation(array $parameters = []): bool
    {
        return false;
    }
    // protected function fillForms(): void
    // {
    //     $this->patientForm->fill($this->patient->toArray());
    //     $this->pregnancyForm->fill($this->pregnancy?->toArray() ?? []);
    // }

    // protected function getForms(): array
    // {
    //     return [
    //         'patientForm' => $this->formPatient(),
    //         'pregnancyForm' => $this->formPregnancy(),
    //     ];
    // }

    public function saveAll()
    {
        $this->patient->update($this->patientData);
        if ($this->pregnancy) {
            $this->pregnancy->update($this->pregnancyData);
        }
        $this->notify('success', 'Alles opgeslagen.');
    }


    public function getLayoutData(): array
    {
        return [
            'patient' => $this->patient,
        ];
    }





}
