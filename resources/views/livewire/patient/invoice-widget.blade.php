<div class="bg-white border rounded-lg p-6 mt-6 shadow">
    <h2 class="text-xl font-bold mb-4">Factuur #{{ $invoice->id }}</h2>
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
                    <th class="px-4 py-2 border-b">Consult</th>
                    <th class="px-4 py-2 border-b">Omschrijving</th>
                    <th class="px-4 py-2 border-b">Prijs</th>
                    <th class="px-4 py-2 border-b">BTW</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoice->lines as $line)
                    <tr>
                        <td class="px-4 py-2 border-b">#{{ $line->consult_id }}</td>
                        <td class="px-4 py-2 border-b">{{ $line->line_text }}</td>
                        <td class="px-4 py-2 border-b">€ {{ number_format($line->price, 2, ',', '.') }}</td>
                        <td class="px-4 py-2 border-b">{{ ucfirst($line->vat) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
