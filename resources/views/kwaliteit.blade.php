@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="w-full h-[30vh] bg-cover bg-center bg-no-repeat relative flex items-end justify-center text-white"
            style="background-image: url('{{ asset('assets/header-home.png') }}');">
            <div class="relative z-10 text-center px-6 pb-20 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">Kwaliteit</h1>
            </div>
        </section>

        <section class="py-20" style="background-color: #FAFAFA;" id="who-code">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                <div class="w-full bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">De WHO-code</h2>
                    <p class="text-chantal leading-relaxed mb-6">
                        De WHO-code is de internationale gedragscode voor het op de markt brengen van vervangingsmiddelen voor moedermelk. Het doel is dat ouders zélf, zonder commerciële beïnvloeding, kunnen kiezen hoe ze hun baby voeden.<br>
                        In Nederland beperkt de WHO-code onder meer de reclame voor zuigelingenvoeding onder de zes maanden. De richtlijnen uit de WHO-code zijn strenger dan de Nederlandse of Europese wetgeving.<br>
                        Ik onderschrijf deze code volledig.<br>
                        Daarom werk ik uitsluitend met merken en producten van bedrijven die zich óók aan de WHO-code houden. Dit betekent dat ik voor bepaalde merken geen reclame maak.
                    </p>
                    <ul class="list-disc pl-6 mb-6">
                        <li>Het beschermen en bevorderen van borstvoeding</li>
                        <li>Het bieden van juiste en volledige informatie aan ouders</li>
                        <li>Het veilig gebruik van vervangingsvoeding wanneer nodig</li>
                        <li>Het reguleren van verkoop en reclame van babyvoeding</li>
                    </ul>
                    <p>
                        <a href="https://iris.who.int/server/api/core/bitstreams/081bd93c-6f5b-4930-903e-3e955afbcb72/content" target="_blank" rel="noopener" class="underline text-[#295331]">Lees de WHO-code (PDF)</a>
                    </p>
                </div>
            </div>
        </section>

        <section class="py-20" style="background-color: #EAEEEB;" id="klachtenregeling">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                <div class="w-full bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Klachtenregeling</h2>
                    <p class="text-chantal leading-relaxed mb-6">
                        Ben je ergens niet tevreden over? Laat het me vooral weten — we zoeken samen naar een passende oplossing.<br>
                        Voel je niet de ruimte om je klacht bij mij kenbaar te maken of wil je hulp bij het indienen
                        van een klacht? Neem dan contact op met de klachtenfunctionaris van het CBKZ: Centraal Bureau Klachtenmanagement
                        in de Zorg. Zij zijn onpartijdig, werken onafhankelijk en helpen je graag verder met ondersteuning en advies.
                        Meer informatie?<br> Kijk op <a href="https://www.klachtverloskunde.nl" target="_blank" rel="noopener" class="underline text-[#295331]">www.klachtverloskunde.nl</a>.<br>
                    </p>
                    <p>
                        Ook de NVL biedt informatie over de klachtenprocedure.<br>
                        <a href="https://www.nvlborstvoeding.nl/ouders/klachtenprocedure" target="_blank" rel="noopener" class="underline text-[#295331]">https://www.nvlborstvoeding.nl</a>
                    </p>
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
                                <li><a href="{{ url('/kwaliteit') }}" class="hover:underline">Kwaliteit</a></li>
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
                        <span class="hidden sm:inline">•</span>
                        <a href="{{ url('/kwaliteit') }}" class="hover:underline">Kwaliteit</a>
                    </div>
                </div>
            </div>
        </footer>

        @include('components.footer')
    </main>
@endsection
