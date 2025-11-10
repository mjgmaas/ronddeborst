<?php

namespace App\Livewire\Patient;

use App\Models\Pregnancy;
use Filament\Forms;
use Filament\Widgets\Widget;
use Filament\Schemas\Schema;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Illuminate\Database\Eloquent\Model;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;

class PatientPregnancyWidget extends Widget implements HasForms
{
    use InteractsWithForms;
    protected string $view = 'livewire.patient.patient-pregnancy-widget';

    public Pregnancy $pregnancy;

    public ?array $data = [];

    public function mount(Pregnancy $pregnancy): void
    {
        $this->pregnancy = $pregnancy;
        $this->form->fill($pregnancy->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Zwangerschapsgegevens')
                    ->schema([
                        DatePicker::make('due_date')
                            ->label('Uitgerekende datum')
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('due_date', $state)),

                        DatePicker::make('delivery_date')
                            ->label('Geboortedatum')
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('delivery_date', $state)),

                        TextInput::make('delivery_type')
                            ->label('Type bevalling')
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('delivery_type', $state)),

                        TextInput::make('delivery_type_other')
                            ->label('Anders (bevalling)')
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('delivery_type_other', $state)),

                        TextInput::make('birth_place')
                            ->label('Geboorteplaats')
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('birth_place', $state)),

                        TextInput::make('birth_place_other')
                            ->label('Anders (geboorteplaats)')
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('birth_place_other', $state)),

                        Textarea::make('complications')
                            ->label('Complicaties')
                            ->columnSpanFull()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('complications', $state)),

                        Textarea::make('medication_during_delivery')
                            ->label('Medicatie tijdens bevalling')
                            ->columnSpanFull()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('medication_during_delivery', $state)),

                        Textarea::make('remarks')
                            ->label('Opmerkingen')
                            ->columnSpanFull()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('remarks', $state)),

                    ])
                    ->columns(2),
            ])
            ->statePath('data');
    }

    protected function autoSave(string $field, $value): void
    {
        $this->pregnancy->update([$field => $value]);
        $this->dispatch('saved', message: 'Saved');
    }

    protected function getFormModel(): Pregnancy
    {
        return $this->pregnancy;
    }
}
