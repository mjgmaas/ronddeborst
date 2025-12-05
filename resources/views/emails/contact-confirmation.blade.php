<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bericht ontvangen</title>
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
            <h1>Je bericht is ontvangen</h1>
            <p>Hoi {{ $submission->name }},</p>
            <p>Bedankt voor je bericht. Ik neem binnenkort contact met je op.</p>

            <p>Met zorgzame groet,</p>
            <p>
                Chantal Mulkens<br>
                Lactatiekundige | Verloskundige
            </p>
            <p>
                📞 +31 6 34 81 69 26<br>
                ✉️  <a href="mailto:chantal@ronddeborst.nl">chantal@ronddeborst.nl</a><br>
                🌐  <a href="https://www.ronddeborst.nl">www.ronddeborst.nl</a>
            </p>
            <p>—<br>Waar zorg, kennis en kracht samenkomen</p>

            <hr class="divider" />

            <p class="muted">Kopie van je bericht:</p>
            <p>{!! nl2br(e($submission->remarks)) !!}</p>

            <hr class="divider" />

            <p class="muted">Verzonden op {{ $submission->submitted_at->format('Y-m-d H:i') }}</p>
        </div>
    </body>
    </html>


