<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwe contactaanvraag</title>
    <style>
        body { font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif; color: #111827; }
        .container { max-width: 640px; margin: 0 auto; padding: 16px; }
        .muted { color: #6B7280; }
        .divider { border: 0; border-top: 1px solid #E5E7EB; margin: 16px 0; }
        .label { font-weight: 600; }
    </style>
    </head>
    <body>
        <div class="container">
            <h1>Nieuwe contactaanvraag</h1>

            <p><span class="label">Naam:</span> {{ $submission->name }}</p>
            <p><span class="label">E-mail:</span> {{ $submission->email }}</p>
            <p><span class="label">Telefoon:</span> {{ $submission->phone ?? '—' }}</p>
            <p><span class="label">Plaats:</span> {{ $submission->city }}</p>
            <p><span class="label">Uitgerekende/Geboorte-datum:</span> {{ $submission->due_date?->format('d-m-Y') ?? 'niet ingevuld' }}</p>
            <p class="muted"><span class="label">IP-adres:</span> {{ $submission->ip_address }}</p>
            <p class="muted"><span class="label">Ingediend op:</span> {{ $submission->submitted_at->format('Y-m-d H:i') }}</p>

            <hr class="divider" />

            <p>{!! nl2br(e($submission->remarks)) !!}</p>
        </div>
    </body>
    </html>


