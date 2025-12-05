@section('title', 'Consulten: praktische hulp en advies bij borstvoeding')

@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="w-full h-[35vh] bg-cover bg-center bg-no-repeat relative flex items-end justify-center text-white"
            style="background-image: url('{{ asset('assets/header-home.png') }}');">
            <div class="relative z-10 text-center px-6 pb-20 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">Consulten</h1>
            </div>
        </section>

        <section class="py-20" style="background-color: #FAFAFA;" id="consulten">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Consulten</h2>
                    <p class="text-chantal leading-relaxed mb-6">
                        Iedere situatie is anders. Daarom bied ik verschillende vormen van begeleiding
                        aan – altijd met aandacht, kennis en tijd voor jouw verhaal.
                    </p>
                    <p class="text-chantal leading-relaxed mb-6">
                        Samen zoeken we naar wat werkt voor jou, je baby en jullie gezin.</p>
                    <a href="{{ url('/consulten-aanbod') }}" class="inline-block text-white px-6 py-3 rounded-full transition" style="background-color: #B97D67;">Bekijk aanbod</a>
                </div>
                <div class="w-full md:w-[400px] h-full overflow-hidden">
                    <img src="{{ asset('assets/chantal-overhandigd-boekje.png') }}" class="w-full h-full object-cover object-center" alt="">
                </div>
            </div>
        </section>

        {{-- <section class="py-20" style="background-color: #EAEEEB;" id="centering-feeding">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Praktisch</h2>
                    <p class="leading-relaxed mb-6">
                        Gelukkig erkennen veel zorgverzekeraars het belang van borstvoeding en de ondersteuning van een
                        IBCLC-lactatiekundige. Daarom worden consulten vaak volledig of deels vergoed wanneer je aanvullend
                        verzekerd bent. Check vooraf altijd even hoe dit bij jouw verzekering geregeld is:<br>
                        <a href="https://www.zorgwijzer.nl/vergoeding/lactatiekundige" target="_blank" target="_blank" rel="noopener" class="underline text-[#295331]">https://zorgwijzer.nl</a>
                    </p>
                    <p class="mb-6">
                        Na afloop van het consult ontvang je de factuur per e-mail. Je betaalt deze rechtstreeks aan mij binnen 14 dagen. Daarna kun je de factuur zelf indienen bij jouw zorgverzekeraar.
                    </p>
                    <p>
                        Let op: sommige verzekeraars vragen om een verwijzing van je huisarts of verloskundige.
                    </p>
                </div>
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/consult-laptop-papieren.png') }}');">
                </div>
            </div>
        </section> --}}

        @include('components.contact-form-section')

        @include('components.footer')

    </main>
@endsection
