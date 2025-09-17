<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rond de Borst</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="min-h-screen bg-white text-emerald-800 antialiased dark:bg-zinc-950 dark:text-emerald-300">
    <div class="flex items-center justify-center min-h-screen p-6">
        <div class="w-full max-w-xl rounded-xl border border-zinc-200/80 bg-white/70 shadow-sm backdrop-blur-sm dark:border-zinc-800 dark:bg-zinc-900/60">
            <div class="p-8 sm:p-10">
                <div class="mb-6">
                    <h1 class="text-3xl font-semibold tracking-tight text-emerald-800 sm:text-4xl dark:text-emerald-300">Rond de Borst</h1>
                    <p class="mt-2 text-lg font-medium text-emerald-800 dark:text-emerald-300">Waar zorg, kennis en kracht samenkomen</p>
                </div>

                <div class="space-y-2">
                    <p class="text-xl font-medium">Chantal Mulkens</p>
                    <p class="text-emerald-800 dark:text-emerald-300">Lactatiekundige | Verloskundige</p>
                </div>

                <div class="mt-8 grid gap-3 sm:grid-cols-2">
                    <a href="tel:+31634816926" class="group inline-flex items-center gap-3 rounded-lg border border-zinc-200/80 bg-zinc-50 px-4 py-3 text-emerald-800 transition hover:bg-zinc-100 dark:border-zinc-800 dark:bg-zinc-800/60 dark:text-emerald-300 dark:hover:bg-zinc-800">
                        <span class="text-xl">📞</span>
                        <span class="font-medium tracking-wide">+31 6 34 81 69 26</span>
                    </a>
                    <a href="mailto:chantal@ronddeborst.nl" class="group inline-flex items-center gap-3 rounded-lg border border-zinc-200/80 bg-zinc-50 px-4 pr-12 py-3 text-emerald-800 transition hover:bg-zinc-100 dark:border-zinc-800 dark:bg-zinc-800/60 dark:text-emerald-300 dark:hover:bg-zinc-800">
                        <span class="text-xl">✉️</span>
                        <span class="font-medium tracking-wide">chantal@ronddeborst.nl</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
