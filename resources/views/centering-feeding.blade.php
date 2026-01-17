@section('title', 'Centering Feeding: voorbereiding op ontspannen borstvoeding')

@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="hero-cf w-full h-[40vh] bg-cover bg-no-repeat relative flex items-end justify-center text-white mt-[30px] md:mt-0"
            style="background-image: url('{{ asset('assets/cf-banner.png') }}');">
            <div class="relative z-10 text-center px-2 pb-10 md:px-6 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">Centering feeding</h1>
            </div>
        </section>

        <!-- Intro -->
        <section class="py-10 md:py-20" style="background-color: #FAFAFA;" id="centering-feeding-intro">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-2 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-4 md:p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Centering feeding</h2>
                    <p class="text-chantal leading-relaxed mb-6">Door al tijdens de zwangerschap een goede basiskennis te krijgen over het voeden, houd je na de geboorte meer tijd en energie over om te genieten van je baby. Een goede voorbereiding voorkomt zorgen, stress en problemen.</p>
                    <ul class="default-list mb-2">
                        <li>Drie interactieve sessies van 2 uur</li>
                        <li>Samen met je partner en 4 andere koppels die in dezelfde fase zitten</li>
                        <li>Met cursusboek en toegang tot e-learning modules</li>
                    </ul>
                </div>
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/centering-feeding-boekje.png') }}');">
                </div>
            </div>
        </section>

        <!-- Workshop -->
        <section class="py-10 md:py-20" style="background-color: #EAEEEB;" id="centering-feeding-workshop">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-2 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-4 md:p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Workshop</h2>
                    <p class="text-chantal leading-relaxed mb-4">
                            De workshops Centering Feeding zijn er om jullie hierbij te helpen. In 3 fysieke workshops, van ongeveer 2 uur, krijgen jullie kennis en vaardigheden die helpend zijn voor een succesvolle (borst)voedingsperiode. De eerste twee workshops zijn tijdens de zwangerschap en de derde en laatste workshop is na de bevalling samen met jullie kindje.
                        </p>
                        <p class="text-chantal leading-relaxed mb-4">
                            Verwacht geen saaie presentaties, want de workshops zijn interactief. Op deze manier kunnen jullie de nieuwe informatie beter onthouden en is het ook nog eens gezellig!
                        </p>
                </div>
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/cf-bordjes.jpg') }}');">
                </div>
            </div>
        </section>

        <!-- Ontdek -->
        <section class="py-10 md:py-20" style="background-color: #FAFAFA;" id="centering-feeding-ontdek">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-2 md:px-0">
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/cf-ontdek.jpg') }}');">
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
        <section class="py-10 md:py-20" style="background-color: #EAEEEB;" id="centering-feeding-voordelen">
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
                        <a href="https://www.centeringfeeding.com/ouders" target="_blank" rel="noopener" class="underline text-[#295331]">Meer informatie over Centering Feeding</a>
                    </p>
                </div>
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/cf-je-weet.jpg') }}');">
                </div>
            </div>
        </section>

        <!-- Kosten -->
        <section class="py-5 md:py-10" style="background-color: #FAFAFA;" id="centering-feeding-kosten">
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
        <section class="pb-10 md:pb-20" style="background-color: #FAFAFA;" id="centering-feeding-inschrijven">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-2 sm:px-4 md:px-0">
                <div class="w-full md:w-[1000px] bg-white p-4 sm:p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Inschrijven</h2>
                    <p class="pb-8">Momenteel kun je je inschrijven voor de onderstaande workshop series. De
                        eerste 2 sessies vinden doorgaans plaats voor je 30e zwangerschapsweek. De 3e sessie
                        wordt nader bepaald na je bevalling.</p>
                    {{-- Maak een tabel van 4 kolommen en 4 rijen met als headers: Groep, Lokatie, Datums, Beschikbaarheid  --}}
                    <div class="overflow-x-auto mb-6">
                        <table class="text-chantal min-w-[600px] w-full text-left mb-6 text-sm">
                        <thead>
                            <tr>
                                <th class="border-b-2 border-gray-300 pb-2 px-1 sm:px-4">Groep</th>
                                <th class="border-b-2 border-gray-300 pb-2 px-1 sm:px-4">Datums</th>
                                <th class="border-b-2 border-gray-300 pb-2 px-1 sm:px-4">Beschikbaarheid</th>
                                <th class="border-b-2 border-gray-300 pb-2 px-1 sm:px-4">Tijd</th>
                                <th class="border-b-2 border-gray-300 pb-2 px-1 sm:px-4">Lokatie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Groep 2</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">9 okt, 6 nov</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Volgeboekt</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Baexem</td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Groep 3</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">22 dec, 12 jan</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Volgeboekt</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Baexem</td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Groep 4</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">22 jan, 12 feb</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Plaatsen beschikbaar</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Baexem</td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Groep 5</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">9 feb, 2 maart</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Volgeboekt</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Baexem</td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Groep 6</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">17 maart, 14 april</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Plaatsen beschikbaar</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Baexem</td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Groep 7</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">9 april, 7 mei</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Plaatsen beschikbaar</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Baexem</td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Groep 8</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">12 mei, 2 juni</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Plaatsen beschikbaar</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">18:30</td>
                                <td class="border-b border-gray-300 py-2 px-1 sm:px-4">Baexem</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <p class="mb-4">
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition" style="background-color: #B97D67;">Inschrijven</a>
                    </p>
                </div>
            </div>
        </section>

        @include('components.reviews')

        @include('components.contact-form-section')

        @include('components.footer')
    </main>
@endsection
