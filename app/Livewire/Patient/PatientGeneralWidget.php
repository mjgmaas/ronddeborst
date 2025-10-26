<?php

namespace App\Livewire\Patient;

use App\Models\Patient;
use Filament\Forms;
use Filament\Widgets\Widget;
use Filament\Schemas\Schema;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Illuminate\Database\Eloquent\Model;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;

class PatientGeneralWidget extends Widget implements HasForms
{
    use InteractsWithForms;
    protected string $view = 'livewire.patient.patient-general-widget';

    public Patient $patient;

    public ?array $data = [];

    public function mount(Patient $patient): void
    {
        $this->patient = $patient;
        $this->form->fill($patient->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Patiëntgegevens')
                    ->schema([
                        TextInput::make('firstname')
                            ->label('Voornaam')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('firstname', $state)),
                        TextInput::make('lastname')
                            ->label('Achternaam')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('lastname', $state)),
                        TextInput::make('street')
                            ->label('Straat')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('street', $state)),
                        Section::make()
                            ->schema([
                                TextInput::make('housenumber')
                                    ->label('Huisnummer')
                                    ->required()
                                    ->extraAttributes(['class' => 'p-0 border-0 shadow-none'])
                                    ->reactive()
                                    ->afterStateUpdated(fn($state) => $this->autoSave('housenumber', $state)),
                                TextInput::make('housenumber_suffix')
                                    ->label('Toevoeging')
                                    ->extraAttributes(['class' => 'p-0 border-0 shadow-none'])
                                    ->reactive()
                                    ->afterStateUpdated(fn($state) => $this->autoSave('housenumber_suffix', $state)),
                            ])
                            ->columns(2)
                            ->contained(false)
                            ->compact(),
                        TextInput::make('postal_code')
                            ->label('Postcode')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('postal_code', $state)),
                        TextInput::make('city')
                            ->label('Plaats')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('city', $state)),
                        TextInput::make('country')
                            ->label('Land')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('country', $state)),
                        TextInput::make('phone')
                            ->label('Telefoon')
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('phone', $state)),
                        TextInput::make('email')
                            ->label('E-mail')
                            ->email()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('email', $state)),
                        DatePicker::make('birthdate')
                            ->label('Geboortedatum')
                            ->firstDayOfWeek(1)
                            ->displayFormat('Y-m-d')
                            ->placeholder('Kies een geboortedatum')
                            ->native(false)
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('birthdate', $state)),
                        Section::make('Partnergegevens')
                            ->schema([
                                TextInput::make('partner_firstname')
                                    ->label('Partner voornaam')
                                    ->reactive()
                                    ->afterStateUpdated(fn($state) => $this->autoSave('partner_firstname', $state)),
                                TextInput::make('partner_lastname')
                                    ->label('Partner achternaam')
                                    ->reactive()
                                    ->afterStateUpdated(fn($state) => $this->autoSave('partner_lastname', $state)),
                                TextInput::make('partner_phone')
                                    ->label('Partner telefoon')
                                    ->reactive()
                                    ->afterStateUpdated(fn($state) => $this->autoSave('partner_phone', $state)),
                            ])
                            ->columns(2)
                            ->columnSpanFull()
                            ->collapsible()
                            ->collapsed(),
                        Textarea::make('notes')
                            ->label('Notities')
                            ->columnSpanFull()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('notes', $state)),
                    ])
                    ->columns(2),
            ])
            ->statePath('data');
    }

    protected function autoSave(string $field, $value): void
    {
        $this->patient->update([$field => $value]);
        $this->dispatch('saved', message: 'Saved');
    }

    protected function getFormModel(): Patient
    {
        return $this->patient;
    }

}
