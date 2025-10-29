<?php

namespace App\Livewire\Patient;

use App\Models\Consult;
use App\Models\Patient;
use Filament\Forms;
use Filament\Widgets\Widget;
use Filament\Schemas\Schema;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use App\Enums\ConsultType;

class PatientConsultWidget extends Widget implements HasForms
{
    public bool $expanded = false;
    use InteractsWithForms;
    protected string $view = 'livewire.patient.patient-consult-widget';

    public Consult $consult;
    public ?array $data = [];

    public function mount(Consult $consult): void
    {
        $this->consult = $consult;
        $this->form->fill($consult->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        $title = '';
        if ($this->consult->consulted_at) {
            $title .= $this->consult->consulted_at->format('d-m-Y H:i') . ' - ';
        }
        $title .= $this->consult->type?->label() ?? '';
        return $schema
            ->components([
                Section::make($title)
                    ->schema([
                        DateTimePicker::make('consulted_at')
                            ->label('Consulted at')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('consulted_at', $state)),
                        TextInput::make('duration')
                            ->label('Duration (minutes)')
                            ->numeric()
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('duration', $state)),
                        Select::make('type')
                            ->label('Type')
                            ->options(collect(ConsultType::cases())->mapWithKeys(fn($case) => [$case->value => $case->label()]))
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('type', $state)),
                        \Filament\Forms\Components\Toggle::make('is_invoicable')
                            ->label('Factureerbaar')
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('is_invoicable', $state)),
                        Textarea::make('notes')
                            ->label('Notes')
                            ->rows(3)
                            ->reactive()
                            ->afterStateUpdated(fn($state) => $this->autoSave('notes', $state)),
                    ])
                    ->collapsible()
                    ->collapsed(!$this->expanded)
                    ->columns(2),
            ])
            ->statePath('data');
    }

    protected function autoSave(string $field, $value): void
    {
        $this->consult->update([$field => $value]);
        $this->dispatch('saved', message: 'Saved');
        $this->dispatch('consultUpdated');
    }

    protected function getFormModel(): Consult
    {
        return $this->consult;
    }
}
