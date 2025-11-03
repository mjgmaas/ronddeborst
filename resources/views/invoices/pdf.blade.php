@php /** @var \App\Models\Invoice $invoice */ @endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factuur #{{ $invoice->id }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; color: #222; }
        .header { margin-bottom: 30px; }
        .invoice-details { margin-bottom: 20px; }
        .items { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        .items th, .items td { border: 1px solid #ddd; padding: 8px; }
        .items th { background: #f5f5f5; }
        .total { text-align: right; font-size: 1.2em; font-weight: bold; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Factuur #{{ $invoice->id }}</h1>
        <p>Datum: {{ $invoice->created_at->format('d-m-Y') }}</p>
    </div>
    <div class="invoice-details">
        <p><strong>Patiënt:</strong> {{ $invoice->patient->name ?? '-' }}</p>
        <p><strong>Adres:</strong> {{ $invoice->patient->address ?? '-' }}</p>
    </div>
    <table class="items">
        <thead>
            <tr>
                <th>Omschrijving</th>
                <th>Aantal</th>
                <th>Prijs</th>
                <th>Totaal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoice->lines as $line)
                <tr>
                    <td>{{ $line->description }}</td>
                    <td>{{ $line->quantity }}</td>
                    <td>€ {{ number_format($line->price, 2, ',', '.') }}</td>
                    <td>€ {{ number_format($line->quantity * $line->price, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="total">
        Totaal: € {{ number_format($invoice->lines->sum(fn($l) => $l->quantity * $l->price), 2, ',', '.') }}
    </div>
</body>
</html>
