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
                        Ik volg de principes van deze code in mijn praktijk.<br>
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
                        Ben je ergens niet tevreden over? Laat het me vooral weten; we zoeken samen naar een passende oplossing.<br>
                        Voel je niet de ruimte om je klacht bij mij kenbaar te maken of wil je hulp bij het indienen
                        van een klacht? Neem dan contact op met de klachtenfunctionaris van het CBKZ: Centraal Bureau Klachtenmanagement
                        in de Zorg. Zij zijn onpartijdig, werken onafhankelijk en helpen je graag verder met ondersteuning en advies.
                        Meer informatie?<br> Kijk op <a href="https://www.klachtverloskunde.nl" target="_blank" rel="noopener" class="underline text-[#295331]">www.klachtverloskunde.nl</a>.<br>
                    </p>
                    <p class="text-chantal leading-relaxed mb-6">
                        Ook de NVL biedt informatie over de klachtenprocedure.<br>
                        <a href="https://www.nvlborstvoeding.nl/ouders/klachtenprocedure" target="_blank" rel="noopener" class="underline text-[#295331]">https://www.nvlborstvoeding.nl</a>
                    </p>
                </div>
            </div>
        </section>

        @include('components.contact-form-section')

        @include('components.footer')
    </main>
@endsection
