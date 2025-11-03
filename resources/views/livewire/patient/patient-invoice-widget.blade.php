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
                    <livewire:patient.patient-invoice-line-row :line="$line" :key="$line->id" />
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
