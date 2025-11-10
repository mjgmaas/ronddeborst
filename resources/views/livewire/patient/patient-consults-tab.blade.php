<div>
    <div class="flex justify-between items-center mb-4">
    <button wire:click="openCreateModal" class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-4 py-2 rounded-lg shadow transition border border-yellow-400">Consult toevoegen</button>
        <div class="flex items-center space-x-2">
            <span class="text-sm text-gray-600">Sortering:</span>
            <button wire:click="toggleSortDirection" class="px-2 py-1 rounded border border-gray-300 bg-white hover:bg-gray-100 text-xs">
                <span class="align-middle">
                    @if($sortDirection === 'asc')
                        &#8593; Oudste eerst
                    @else
                        &#8595; Nieuwste eerst
                    @endif
                </span>
            </button>
        </div>
    </div>

    {{-- Modal voor het toevoegen van een consult --}}
    @if($showModal)
        <div class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-40">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
                <h2 class="text-lg font-bold mb-4">Consult toevoegen</h2>
                <form wire:submit.prevent="submitCreateConsult">
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1">Type</label>
                        <select wire:model.defer="form.type" class="w-full border rounded px-3 py-2">
                            @foreach(\App\Enums\ConsultType::cases() as $case)
                                <option value="{{ $case->value }}">{{ $case->label() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1">Datum & Tijd</label>
                        <input type="datetime-local" wire:model.defer="form.consulted_at" class="w-full border rounded px-3 py-2" />
                    </div>
                    @if($modalError)
                        <div class="text-red-600 text-sm mb-2">{{ $modalError }}</div>
                    @endif
                    @if($showDuplicateWarning)
                        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-3 mb-4">
                            Er bestaat al een consult op deze datum. Wil je doorgaan?
                        </div>
                        <div class="flex justify-end gap-2">
                            <button type="button" wire:click="cancelDuplicateWarning" class="px-4 py-2 rounded border border-gray-300 bg-white hover:bg-gray-100">Annuleren</button>
                            <button type="button" wire:click="proceedDuplicateWarning" class="px-4 py-2 rounded bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold">Doorgaan</button>
                        </div>
                    @else
                        <div class="flex justify-end gap-2">
                            <button type="button" wire:click="closeCreateModal" class="px-4 py-2 rounded border border-gray-300 bg-white hover:bg-gray-100">Annuleren</button>
                            <button type="submit" class="px-4 py-2 rounded bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold">Toevoegen</button>
                        </div>
                    @endif
                </form>
                <button type="button" wire:click="closeCreateModal" class="absolute top-2 right-2 text-gray-400 hover:text-gray-700">&times;</button>
            </div>
        </div>
    @endif
    <div>
        @php $newConsultId = $newConsultId ?? null; @endphp
        @php $consults = $consults ?? collect(); @endphp
        @php
            $now = \Carbon\Carbon::now();
            $lastBeforeNowIndex = null;
            foreach ($consults as $idx => $c) {
                if ($c->consulted_at && $c->consulted_at->lessThanOrEqualTo($now)) {
                    $lastBeforeNowIndex = $idx;
                }
            }
        @endphp
        @foreach($consults as $i => $consult)
            @php
                $isFuture = $consult->consulted_at && $consult->consulted_at->greaterThan($now);
                $isLatestBeforeNow = $i === $lastBeforeNowIndex;
                $isNew = $newConsultId && $consult->id === $newConsultId;
            @endphp
            <div class="mb-4">
                @livewire('patient.patient-consult-widget', [
                    'consult' => $consult,
                    'expanded' => $isNew || $isLatestBeforeNow || $isFuture
                ], key($consult->id . '-' . $sortDirection))
            </div>
        @endforeach
    </div>
</div>
