@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="w-full h-[30vh] bg-cover bg-center bg-no-repeat relative flex items-end justify-center text-white"
            style="background-image: url('{{ asset('assets/header-home.png') }}');">
            <div class="relative z-10 text-center px-6 pb-20 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">Algemene voorwaarden</h1>
            </div>
        </section>

        <section class="py-20" style="background-color: #FAFAFA;" id="algemene-voorwaarden">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                <div class="w-full bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Algemene voorwaarden</h2>
                    <p class="text-chantal leading-relaxed mb-6">
                        Ik werk volgens de algemene voorwaarden van de NVL (Nederlandse Vereniging van Lactatiekundigen). Deze voorwaarden gelden voor elke behandelingsovereenkomst tussen mij en mijn cliënten.
                    </p>
                    <p>
                        <a href="https://www.nvlborstvoeding.nl/" target="_blank" rel="noopener" class="underline text-[#295331]">Meer informatie over de NVL</a>
                    </p>
                </div>
            </div>
        </section>

        @include('components.contact-form-section')

        @include('components.footer')
    </main>
@endsection
