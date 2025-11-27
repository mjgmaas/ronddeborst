
@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="w-full h-[35vh] bg-cover bg-center bg-no-repeat relative flex items-end justify-center text-white"
            style="background-image: url('{{ asset('assets/header-home.png') }}');">
            <div class="relative z-10 text-center px-6 pb-20 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">Consulten aanbod</h1>
            </div>
        </section>

        <section class="py-20" style="background-color: #EAEEEB;">
            <div class="max-w-5xl mx-auto px-4 md:px-0">
                <!-- CONTAINER 1 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b">
                        <div class="max-w-2xl">
                            <h2 class="text-3xl md:text-4xl font-semibold mb-2" style="color:#295331;">Centering Feeding</h2>
                            <p class="text-chantal leading-relaxed">Door al tijdens de zwangerschap een goede basiskennis te krijgen over het voeden, ...</p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-1" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Uitklappen">Uitklappen</button>
                        </div>
                        <div class="flex-shrink-0 md:w-1/4">
                            <div class="aspect-square w-full rounded-full overflow-hidden">
                                <img src="{{ asset('assets/boekje-cf.png') }}" alt="Centering Feeding" class="w-full h-full object-cover object-center">
                            </div>
                        </div>
                    </div>
                    <div id="panel-1" class="px-6 md:px-10 py-10 hidden">
                        <p class="text-chantal leading-relaxed py-4">Hier staat meer tekst</p>
                        <img src="{{ asset('assets/cf-banner.png') }}" alt="Consult" class="w-full h-full rounded-lg object-cover">
                        <p class="text-chantal leading-relaxed py-4 flex items-center gap-2">
                            <img src="{{ asset('assets/thema/heart.svg') }}" class="w-[15px]" alt="">
                            Prijs: €0,00 – Duur: 1,5 uur
                        </p>
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition" style="background-color: #B97D67;">Afspraak maken</a>
                    </div>
                </div>
                <!-- CONTAINER 2 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b">
                        <div>
                            <h2 class="text-3xl md:text-4xl font-semibold mb-2" style="color:#295331;">Observatie voedingsmoment</h2>
                            <p class="text-chantal leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-2" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Uitklappen">Uitklappen</button>
                        </div>
                    </div>
                    <div id="panel-2" class="px-6 md:px-10 py-10 hidden">
                        <p class="text-chantal leading-relaxed py-4">Vestibulum ante ipsum primis in faucibus orci luctus...</p>
                        <img src="{{ asset('assets/thema/placeholder-bar.png') }}" class="w-full h-full rounded-lg object-cover">
                        <p class="text-chantal leading-relaxed py-4 flex items-center gap-2">
                            <img src="{{ asset('assets/thema/heart.svg') }}" class="w-[15px]">
                            Prijs: €0,00 – Duur: 1,5 uur
                        </p>
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition" style="background-color: #B97D67;">Afspraak maken</a>
                    </div>
                </div>
                <!-- CONTAINER 3 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b">
                        <div>
                            <h2 class="text-3xl md:text-4xl font-semibold mb-2" style="color:#295331;">Observatie voedingsmoment</h2>
                            <p class="text-chantal leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-3" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Uitklappen">Uitklappen</button>
                        </div>
                    </div>
                    <div id="panel-3" class="px-6 md:px-10 py-10 hidden">
                        <p class="text-chantal leading-relaxed py-4">Vestibulum ante ipsum primis in faucibus orci luctus...</p>
                        <img src="{{ asset('assets/thema/placeholder-bar.png') }}" class="w-full h-full rounded-lg object-cover">
                        <p class="text-chantal leading-relaxed py-4 flex items-center gap-2">
                            <img src="{{ asset('assets/thema/heart.svg') }}" class="w-[15px]">
                            Prijs: €0,00 – Duur: 1,5 uur
                        </p>
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition" style="background-color: #B97D67;">Afspraak maken</a>
                    </div>
                </div>
            </div>
        </section>

        @include('components.contact-form-section')

        <footer class="pt-16" style="background-color:#C0D0C7;">
            <div class="max-1920 mx-auto px-4">
                <div class="bg-white rounded-t-3xl px-8 py-10 md:px-16 md:py-14">
                    <div class="max-500 grid gap-12 md:grid-cols-2">
                        <div>
                            <h2 class="text-2xl md:text-3xl font-semibold mb-4" style="color:#295331;">Rond de Borst</h2>
                            <div class="h-px w-24 bg-gray-200 mb-6"></div>
                            <ul class="space-y-2 text-sm md:text-base" style="color:#5E626E;">
                                <li><a href="{{ url('/privacyverklaring') }}" class="hover:underline">Privacyverklaring</a></li>
                                <li><a href="{{ url('/algemene-voorwaarden') }}" class="hover:underline">Algemene voorwaarden</a></li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="text-2xl md:text-3xl font-semibold mb-4" style="color:#295331;">Contact</h2>
                            <div class="h-px w-24 bg-gray-200 mb-6"></div>
                            <div class="space-y-2 text-sm md:text-base" style="color:#5E626E;">
                                <p>06 34 81 69 26</p>
                                <p><a href="mailto:chantal@ronddeborst.nl" class="hover:underline">chantal@ronddeborst.nl</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#F8F8F8] py-4">
                <div class="max-w-5xl mx-auto px-4">
                    <div class="flex flex-wrap items-center justify-center gap-4 text-[13px]" style="color:#5E626E;">
                        <span>KvK nummer: 57483218</span>
                        <span class="hidden sm:inline">•</span>
                        <a href="{{ url('/algemene-voorwaarden') }}" class="hover:underline">Algemene Voorwaarden</a>
                        <span class="hidden sm:inline">•</span>
                        <a href="{{ url('/privacyverklaring') }}" class="hover:underline">Privacy Statement</a>
                    </div>
                </div>
            </div>
        </footer>

        @include('components.footer')
    </main>
@endsection
