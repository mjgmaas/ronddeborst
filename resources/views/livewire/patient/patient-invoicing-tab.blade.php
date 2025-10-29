<div>
    <div class="overflow-x-auto">
        <form wire:submit.prevent="createInvoice">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b w-8"></th>
                        <th class="px-4 py-2 border-b">Datum & Tijd</th>
                        <th class="px-4 py-2 border-b">Type</th>
                        <th class="px-4 py-2 border-b">Duur (min)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consults as $consult)
                        <tr>
                            <td class="px-2 py-2 border-b text-center">
                                <input type="checkbox" wire:model="selectedConsults" value="{{ $consult->id }}">
                            </td>
                            <td class="px-4 py-2 border-b">{{ $consult->consulted_at?->format('d-m-Y H:i') }}</td>
                            <td class="px-4 py-2 border-b">{{ $consult->type?->label() }}</td>
                            <td class="px-4 py-2 border-b text-center">{{ $consult->duration }}</td>
                        </tr>
                    @endforeach
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
    @if(isset($invoices) && count($invoices))
        @foreach($invoices as $invoice)
            <livewire:patient.invoice-widget :invoice="$invoice" :key="$invoice->id" />
        @endforeach
    @else
        <div class="mt-8 text-gray-500 text-center">Er zijn nog geen facturen aangemaakt.</div>
    @endif
</div>
