<section class="mb-8">
    <h2 class="text-xl font-bold mb-4">Factureerbare consulten</h2>
    <div class="overflow-x-auto">
        <form wire:submit.prevent="createInvoice">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b w-8 text-left"></th>
                        <th class="px-4 py-2 border-b text-left">Datum & Tijd</th>
                        <th class="px-4 py-2 border-b text-left">Type</th>
                        <th class="px-4 py-2 border-b text-left">Duur (min)</th>
                        <th class="px-4 py-2 border-b text-left">Factuur</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($consults as $consult)
                        <tr>
                            <td class="px-2 py-2 border-b text-left">
                                <input type="checkbox" wire:model="selectedConsults" value="{{ $consult->id }}" @if($consult->invoiceLine) disabled @endif>
                            </td>
                            <td class="px-4 py-2 border-b text-left">{{ $consult->consulted_at?->format('d-m-Y H:i') }}</td>
                            <td class="px-4 py-2 border-b text-left">{{ $consult->type?->label() }}</td>
                            <td class="px-4 py-2 border-b text-left">{{ $consult->duration }}</td>
                            <td class="px-4 py-2 border-b text-left">
                                @if($consult->invoiceLine && $consult->invoiceLine->invoice)
                                    #{{ $consult->invoiceLine->invoice->invoice_number ?? $consult->invoiceLine->invoice->id }}
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-8 text-gray-500 text-left">Er zijn nog geen consults aangemaakt</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4 flex justify-end">
                <button type="submit"
                    class="px-6 py-2 rounded shadow font-semibold text-lg bg-yellow-400 text-black hover:bg-yellow-300 focus:bg-yellow-500 focus:outline-none transition disabled:opacity-50"
                >
                    Maak factuur aan
                </button>
            </div>
        </form>
    </div>
</section>
