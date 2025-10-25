<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Patient;
use App\Models\Pregnancy;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Illuminate\Contracts\View\View;

class EditPatientCustom extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public function getTitle(): string
    {
        if ($this->patient) {
            return trim(($this->patient->firstname ?? '') . ' ' . ($this->patient->lastname ?? ''));
        }
        return __('Edit Patient Custom');
    }


    public ?Patient $patient = null;
    public ?Pregnancy $currentPregnancy = null;

    public ?array $patientData = [];
    public ?array $pregnancyData = [];

    public static function getSlug(?\Filament\Panel $panel = null): string
    {
    return 'patients/{record}/details';
    }

    public static function route(): string
    {
        return 'patients/{record}/custom-edit';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public function mount($record): void
    {
        $this->patient = Patient::with('pregnancies')->findOrFail($record);
        $this->currentPregnancy = $this->patient->pregnancies()->orderByDesc('due_date')->first();
        $this->patientData = $this->patient->toArray();
        $this->pregnancyData = $this->currentPregnancy?->toArray() ?? [];
    }

    public function savePatient(): void
    {
        $this->patient->update($this->patientData);
        $this->notify('success', 'Patientgegevens opgeslagen.');
    }

    public function savePregnancy(): void
    {
        if ($this->currentPregnancy) {
            $this->currentPregnancy->update($this->pregnancyData);
            $this->notify('success', 'Zwangerschap opgeslagen.');
        }
    }




    public function content(Schema $schema): Schema
    {
        return $schema->components([
            Tabs::make('EditTabs')
                ->tabs([
                    Tab::make('Patiënt')
                        ->schema([
                            Section::make('Patiëntgegevens')
                                ->schema([
                                    TextInput::make('patientData.firstname')->label('Voornaam')->required(),
                                    TextInput::make('patientData.lastname')->label('Achternaam')->required(),
                                    TextInput::make('patientData.street')->label('Straat')->required(),
                                    TextInput::make('patientData.housenumber')->label('Huisnummer')->required(),
                                    TextInput::make('patientData.housenumber_suffix')->label('Toevoeging'),
                                    TextInput::make('patientData.postal_code')->label('Postcode')->required(),
                                    TextInput::make('patientData.city')->label('Plaats')->required(),
                                    TextInput::make('patientData.country')->label('Land')->required(),
                                    TextInput::make('patientData.phone')->label('Telefoon'),
                                    TextInput::make('patientData.email')->label('E-mail')->email(),
                                    DatePicker::make('patientData.birthdate')->label('Geboortedatum')->firstDayOfWeek(1)->displayFormat('Y-m-d')->placeholder('Kies een geboortedatum')->native(false),
                                    TextInput::make('patientData.general_practitioner')->label('Huisarts'),
                                    TextInput::make('patientData.midwife')->label('Verloskundige'),
                                    TextInput::make('patientData.maternity_care_provider')->label('Kraamzorg'),
                                    Textarea::make('patientData.notes')->label('Notities')->columnSpanFull(),
                                ])->columns(2),
                        ]),
                    Tab::make('Zwangerschap')
                        ->schema([
                            Section::make('Huidige zwangerschap')
                                ->schema([
                                    DatePicker::make('pregnancyData.due_date')->label('Uitgerekende datum'),
                                    DatePicker::make('pregnancyData.delivery_date')->label('Geboortedatum'),
                                    TextInput::make('pregnancyData.delivery_type')->label('Type bevalling'),
                                    TextInput::make('pregnancyData.delivery_type_other')->label('Anders (bevalling)'),
                                    TextInput::make('pregnancyData.birth_place')->label('Geboorteplaats'),
                                    TextInput::make('pregnancyData.birth_place_other')->label('Anders (geboorteplaats)'),
                                    Textarea::make('pregnancyData.complications')->label('Complicaties')->columnSpanFull(),
                                    Textarea::make('pregnancyData.medication_during_delivery')->label('Medicatie tijdens bevalling')->columnSpanFull(),
                                    Textarea::make('pregnancyData.remarks')->label('Opmerkingen')->columnSpanFull(),
                                ])->columns(2),
                        ]),
                ])
        ]);
    }

}
