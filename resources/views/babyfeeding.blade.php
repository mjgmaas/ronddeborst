@section('title', 'NOLIA BabyFeeding: voorbereiding op ontspannen borstvoeding')

@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="hero-bf w-full h-[40vh] bg-cover bg-no-repeat relative flex items-end justify-center text-white md:mt-0"
            style="background-image: url('{{ asset('assets/bf-banner-full-v2.jpg') }}');">
            <div class="relative z-10 text-center px-2 pb-10 md:px-6 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">NOLIA BabyFeeding</h1>
            </div>
        </section>

        <!-- Intro -->
        <section class="py-10 md:py-20" style="background-color: #FAFAFA;" id="babyfeeding-intro">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-2 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-4 md:p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">NOLIA BabyFeeding</h2>
                    <p class="text-chantal leading-relaxed mb-6">Door al tijdens de zwangerschap een goede basiskennis te krijgen over het voeden, houd je na de geboorte meer tijd en energie over om te genieten van je baby. Een goede voorbereiding voorkomt zorgen, stress en problemen.</p>
                    <ul class="default-list mb-2">
                        <li>Drie interactieve sessies van 2 uur</li>
                        <li>Samen met je partner en 4 andere koppels die in dezelfde fase zitten</li>
                        <li>Met cursusboek en toegang tot e-learning modules</li>
                    </ul>
                </div>
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/bf-boekje.png') }}');">
                </div>
            </div>
        </section>

        <!-- Workshop -->
        <section class="py-10 md:py-20" style="background-color: #EAEEEB;" id="babyfeeding-workshop">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-2 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-4 md:p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Workshop</h2>
                    <p class="text-chantal leading-relaxed mb-4">
                        De workshop NOLIA BabyFeeding is er om jullie te helpen.
                        In 3 fysieke sessies, van ongeveer 2 uur, krijgen jullie kennis
                        en vaardigheden aangeleerd die helpend zijn voor een succesvolle
                        (borst)voedingsperiode. De eerste twee bijeenkomsten zijn tijdens de
                        zwangerschap en de derde en laatste sessie is na de bevalling
                        samen met jullie kindje.
                    </p>
                    <p class="text-chantal leading-relaxed mb-4">
                        Verwacht geen saaie presentaties, want de workshops zijn interactief.
                        Op deze manier kunnen jullie de nieuwe informatie beter onthouden en
                        is het ook nog eens gezellig!
                    </p>
                </div>
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/bf-bordjes.jpg') }}');">
                </div>
            </div>
        </section>

        <!-- Ontdek -->
        <section class="py-10 md:py-20" style="background-color: #FAFAFA;" id="babyfeeding-ontdek">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-2 md:px-0">
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/bf-ontdek.jpg') }}');">
                </div>
                <div class="w-full md:w-[600px] bg-white p-4 md:p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Ontdek</h2>
                    <ul class="mb-4">
                        <li>Hoe moet ik mijn baby voeden? Basisprincipes voor borst- en flesvoeding</li>
                        <li>Hoe vaak en hoelang moet ik voeden? Hoeveel drinkt een baby dan?</li>
                        <li>Hoe weet ik of mijn borsten genoeg melk produceren?</li>
                        <li>Wat als het voeden niet lukt? Hoe los ik problemen op?</li>
                        <li>Doet borstvoeding pijn? Hoe maak ik het comfortabeler?</li>
                        <li>Hoe voorkom ik borstontstekingen en wat als ze toch optreden?</li>
                        <li>Hoe betrek ik mijn partner bij het voeden, vooral bij borstvoeding?</li>
                        <li>Hoe combineer ik borstvoeding met werk? Kan ik het combineren met flesvoeding?</li>
                        <li>Wat zijn de beste voedingstechnieken en -houdingen voor borst- en flesvoeding?</li>
                        <li>Welke materialen zijn nodig? Tips voor gebruik.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Je weet.. -->
        <section class="py-10 md:py-20" style="background-color: #EAEEEB;" id="babyfeeding-voordelen">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-4 md:p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Je weet...</h2>
                    <ul class="mb-4">
                        <li>Wat je te wachten staat</li>
                        <li>Hoe je met uitdagingen om moet gaan</li>
                        <li>Hoe je onnodige struikelpunten voor kunt zijn</li>
                    </ul>
                    <p>Je krijgt volledige ondersteuning van een lactatiekundige en medecursisten.</p>
                    <p class="mb-4 pt-5">
                        <a href="https://babyfeeding.nl/ouders" target="_blank" rel="noopener" class="external underline text-[#295331]">Meer informatie over NOLIA BabyFeeding</a>
                    </p>
                </div>
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/bf-je-weet.jpg') }}');">
                </div>
            </div>
        </section>

        <!-- Kosten -->
        <section class="py-5 md:py-10" style="background-color: #FAFAFA;" id="babyfeeding-kosten">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-2 sm:px-4 md:px-0">
                <div class="w-full md:w-[1000px] bg-white p-4 sm:p-10">

                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Kosten</h2>
                    <ul class="default-list mb-4">
                        <li>€172,-</li>
                        <li>Drie interactieve sessies van 2 uur</li>
                        <li>Samen met je partner en 4 andere koppels die in dezelfde fase zitten</li>
                        <li>Met cursusboek en toegang tot e-learning modules</li>
                    </ul>
                    <p class="text-chantal leading-relaxed">
                        Bij de meeste aanvullende verzekeringen zal de vergoeding onder zwangerschap en lactatiekundige zorg
                        komen te vallen. De factuur krijg je per mail voorafgaand aan de cursus. Na betaling is je plaats
                        gegarandeerd en kun je de factuur indienen bij je eigen verzekering.
                    </p>
                </div>
            </div>
        </section>

        <!-- Inschrijven -->
        <section class="pb-10 md:pb-20" style="background-color: #FAFAFA;" id="babyfeeding-inschrijven">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-2 sm:px-4 md:px-0">
                <div class="w-full md:w-[1000px] bg-white p-4 sm:p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Inschrijven</h2>
                    <p class="pb-8">Momenteel kun je je inschrijven voor de onderstaande workshop series. De
                        eerste 2 sessies vinden doorgaans plaats voor je 30e zwangerschapsweek. De 3e sessie
                        vindt plaats na je bevalling. Soms wordt deze datum nader bepaald.</p>
                    {{-- Maak een tabel van 4 kolommen en 4 rijen met als headers: Groep, Lokatie, Datums, Beschikbaarheid  --}}
                    <div class="overflow-x-auto mb-6">
                        <table class="text-chantal min-w-[600px] w-full text-left mb-6 text-sm">
                        <thead>
                            <tr>
                                <th class="align-top border-b-2 border-gray-300 pb-2 px-1 sm:px-4">Groep</th>
                                <th class="align-top border-b-2 border-gray-300 pb-2 px-1 sm:px-4">Uitgerekend<br>medio</th>
                                <th class="align-top border-b-2 border-gray-300 pb-2 px-1 sm:px-4">Datums</th>
                                <th class="align-top border-b-2 border-gray-300 pb-2 px-1 sm:px-4">Tijd</th>
                                <th class="align-top border-b-2 border-gray-300 pb-2 px-1 sm:px-4">Lokatie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Groep 7</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Juli</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">20 april, 7 mei, 20 aug</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Ittervoort</td>
                            </tr>
                            <tr>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Groep 8</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Augustus</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">19 mei, 2 juni, 22 sept</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Ittervoort</td>
                            </tr>
                            <tr>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Groep 9</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">September</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">15 juni, 6 juli, 26 okt</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Ittervoort</td>
                            </tr>
                            <tr>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Groep 10</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Oktober</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">14 juli,  18 aug, 24 nov</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Ittervoort</td>
                            </tr>
                            <tr>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Groep 11</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">November</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">26 aug,  16 sept, 6 jan</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Ittervoort</td>
                            </tr>
                            <tr>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Groep 12</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">December</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">5 okt,  26 okt, 15 feb</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="align-top border-b border-gray-300 py-2 px-1 sm:px-4">Ittervoort</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <p class="mb-4" data-contact-body="Hoi Chantal,&#10;&#10;Ik wil graag inschrijven voor de workshop NOLIA BabyFeeding.">
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition contact-form-action" style="background-color: #B97D67;">Inschrijven</a>
                    </p>
                </div>
            </div>
        </section>

        @include('components.reviews')

        @include('components.contact-form-section')

        @include('components.footer')
    </main>
@endsection
