@php
    $vatLabel = null;
    if ($line->vat instanceof \App\Enums\VatType) {
        $vatLabel = $line->vat->label();
    } elseif ($line->vat === 'no') {
        $vatLabel = 'Vrijgesteld van btw';
    } else {
        $vatLabel = ucfirst($line->vat);
    }
@endphp

@if (!$editing)
    <tr>
        <td class="px-4 py-2 border-b text-left">{{ $line->line_text }}</td>
        <td class="px-4 py-2 border-b text-left">€ {{ number_format($line->price, 2, ',', '.') }}</td>
        <td class="px-4 py-2 border-b text-left">{{ $vatLabel }}</td>
        <td class="px-4 py-2 border-b text-left">
            <button wire:click="startEdit" class="text-blue-600 hover:text-blue-800" title="Bewerk regel">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13h3l8-8a2.828 2.828 0 00-4-4l-8 8v3z" /></svg>
            </button>
        </td>
    </tr>
@else
    <tr>
        <td class="px-4 py-2 border-b text-left">
            <input type="text" wire:model.defer="editText" wire:change="autoSave" class="border rounded px-2 py-1 w-full" />
        </td>
        <td class="px-4 py-2 border-b text-left">
            <input type="number" step="0.01" wire:model.defer="editPrice" wire:change="autoSave" class="border rounded px-2 py-1 w-24" />
        </td>
        <td class="px-4 py-2 border-b text-left">{{ $vatLabel }}</td>
        <td class="px-4 py-2 border-b text-left">
            <button wire:click="stopEdit" class="text-gray-500 hover:text-gray-700">Annuleer</button>
        </td>
    </tr>
@endif
