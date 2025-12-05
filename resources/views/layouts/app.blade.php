<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Lactatiekundige Chantal Mulkens begeleidt ouders bij borstvoeding, hechting en groei. Persoonlijke consulten, Centering Feeding workshops en deskundig advies voor een ontspannen start met voeden.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $title ?? 'Rond de Borst - Lactatiekundige Chantal Mulkens')</title>
    @vite(['resources/css/app.css', 'resources/css/custom-styles.css', 'resources/js/app.js'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    <link rel="canonical" href="{{ url()->current() }}" />
    <!-- Open Graph tags -->
    <meta property="og:title" content="@yield('title', $title ?? 'Rond de Borst - Lactatiekundige Chantal Mulkens')" />
    <meta property="og:description" content="@yield('meta_description', 'Lactatiekundige Chantal Mulkens begeleidt ouders bij borstvoeding, hechting en groei. Persoonlijke consulten, Centering Feeding workshops en deskundig advies voor een ontspannen start met voeden.')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('assets/thema/logo-chantal.png') }}" />

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
    @stack('scripts')
</body>
</html>
