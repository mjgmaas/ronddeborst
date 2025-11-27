<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Rond de Borst' }}</title>
    @vite(['resources/css/app.css', 'resources/css/custom-styles.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="robots" content="noindex, nofollow" />

    <meta name="theme-color" content="#111827">
    @stack('head')
    <!-- Google Fonts: Sansita & Lato -->
    <link href="https://fonts.googleapis.com/css2?family=Sansita:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-200 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    @include('components.nav')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
    @stack('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('button[data-toggle-panel]').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var panelId = btn.getAttribute('data-toggle-panel');
                var panel = document.getElementById(panelId);
                if (!panel) return;
                var openLabel = btn.getAttribute('data-toggle-label-open') || 'Dichtklappen';
                var closedLabel = btn.getAttribute('data-toggle-label-closed') || 'Uitklappen';
                var isOpen = !panel.classList.contains('hidden');
                panel.classList.toggle('hidden');
                btn.textContent = isOpen ? closedLabel : openLabel;
            });
        });
    });
    </script>
</body>
</html>
