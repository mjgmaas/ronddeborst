<div class="bg-white border rounded-lg p-6 mt-6 shadow">
    <h2 class="text-xl font-bold mb-4">Factuur #{{ $invoice->invoice_number ?? $invoice->id }}</h2>
    <div class="mb-2">
        <span class="font-semibold">Patiënt:</span>
        {{ $invoice->patient?->firstname }} {{ $invoice->patient?->lastname }}
    </div>
    <div class="mb-2">
        <span class="font-semibold">Aangemaakt door:</span>
        {{ $invoice->user?->name }}
    </div>
    <div class="mb-2">
        <span class="font-semibold">Verzenden naar:</span>
        {{ $invoice->send_to }}
    </div>
    <div class="mb-2">
        <span class="font-semibold">Verzenddatum:</span>
        {{ $invoice->send_at ? $invoice->send_at->format('d-m-Y H:i') : '-' }}
    </div>
    <div class="mb-2">
        <span class="font-semibold">Betaald:</span>
        <span class="{{ $invoice->is_payed ? 'text-green-600' : 'text-red-600' }}">
            {{ $invoice->is_payed ? 'Ja' : 'Nee' }}
        </span>
    </div>
    <div class="mt-4">
        <h3 class="font-semibold mb-2">Regels</h3>
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b text-left">Omschrijving</th>
                    <th class="px-4 py-2 border-b text-left">Prijs</th>
                    <th class="px-4 py-2 border-b text-left">BTW</th>
                    <th class="px-4 py-2 border-b text-left"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoice->lines as $line)
                    @php
                        $vatLabel = null;
                        if ($line->vat instanceof \App\Enums\VatType) {
                            $vatLabel = $line->vat->label();
                        } elseif ($line->vat === 'no') {
                            $vatLabel = 'Vrijgesteld';
                        } else {
                            $vatLabel = ucfirst($line->vat);
                        }
                    @endphp
                    @if ($editingLineId === $line->id)
                        <tr>
                            <td class="px-4 py-2 border-b text-left">
                                <input type="text" wire:model.defer="editText" wire:change="autoSave" class="border rounded px-2 py-1 w-full" />
                            </td>
                            <td class="px-4 py-2 border-b text-left">
                                <input type="number" step="0.01" wire:model.defer="editPrice" wire:change="autoSave" class="border rounded px-2 py-1 w-24" />
                            </td>
                            <td class="px-4 py-2 border-b text-left">{{ $vatLabel }}</td>
                            <td class="px-4 py-2 border-b text-left">
                                <button wire:click="stopEdit" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Annuleer</button>
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td class="px-4 py-2 border-b text-left">{{ $line->line_text }}</td>
                            <td class="px-4 py-2 border-b text-left"><span style="white-space:nowrap">€ {{ number_format($line->price, 2, ',', '.') }}</span></td>
                            <td class="px-4 py-2 border-b text-left">{{ $vatLabel }}</td>
                            <td class="px-4 py-2 border-b text-left">
                                <button wire:click="startEdit({{ $line->id }})" class="text-blue-600 hover:text-blue-800" title="Bewerk regel">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13h3l8-8a2.828 2.828 0 00-4-4l-8 8v3z" /></svg> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        <a href="{{ route('invoices.download', $invoice) }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            Download PDF
        </a>
    </div>
</div>
