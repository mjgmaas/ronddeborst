@extends('layouts.app')
@section('content')
    <div class="min-h-screen flex flex-col items-center justify-center p-8 text-center">
        <h1 class="text-6xl font-bold text-[#B97D67] mb-6">404</h1>
        <h2 class="text-2xl font-semibold mb-4">Pagina niet gevonden</h2>
        <p class="mb-8 text-lg text-gray-600">De pagina die je zoekt bestaat niet of is verplaatst.</p>
        <a href="{{ route('home') }}" class="inline-block px-6 py-3 rounded-full text-white font-semibold" style="background-color: #295331;">Terug naar home</a>
    </div>
@endsection
