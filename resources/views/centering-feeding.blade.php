
@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="w-full h-[40vh] bg-cover bg-center bg-no-repeat relative flex items-end justify-center text-white"
            style="background-image: url('{{ asset('assets/cf-banner.png') }}');">
            <div class="relative z-10 text-center px-6 pb-20 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">Centering feeding</h1>
            </div>
        </section>

        <!-- Intro -->
        <section class="py-20" style="background-color: #FAFAFA;" id="over-mij">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-10">
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
        <section class="py-20" style="background-color: #EAEEEB;" id="centering-feeding">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-10">
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
        <section class="py-20" style="background-color: #FAFAFA;" id="centering-feeding">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/boekje-cf.png') }}');">
                </div>
                <div class="w-full md:w-[600px] bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Ontdek</h2>
                    <ul class="default-list mb-4">
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

        <!-- Voordelen.. -->
        <section class="py-20" style="background-color: #EAEEEB;" id="voordelen">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Voordelen</h2>
                    <ul class="default-list mb-4">
                        <li>Volledige ondersteuning van een lactatiekundige en medecursisten</li>
                    </ul>
                    <h3>Je weet...</h3>
                    <ul class="default-list mb-4">
                        <li>Wat je te wachten staat</li>
                        <li>Hoe je met uitdagingen om moet gaan</li>
                        <li>Hoe je onnodige struikelpunten voor kunt zijn</li>
                    </ul>
                    <p class="mb-4">
                        <a href="https://www.centeringfeeding.com/ouders" target="_blank" rel="noopener" class="underline text-[#295331]">Meer informatie over Centering Feeding</a>
                    </p>
                </div>
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/cf-banner.png') }}');">
                </div>
            </div>
        </section>

        <!-- Inschrijven -->
        <section class="py-20" style="background-color: #EAEEEB;" id="inschrijven">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[1000px] bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Inschrijven</h2>
                    <p class="pb-8">Momenteel kun je je inschrijven voor de volgende workshop series:</p>
                    {{-- Maak een tabel van 4 kolommen en 4 rijen met als headers: Groep, Lokatie, Datums, Beschikbaarheid  --}}
                    <table class="w-full text-left mb-6">
                        <thead>
                            <tr>
                                <th class="border-b-2 border-gray-300 pb-2">Groep</th>
                                <th class="border-b-2 border-gray-300 pb-2">Lokatie</th>
                                <th class="border-b-2 border-gray-300 pb-2">Datums</th>
                                <th class="border-b-2 border-gray-300 pb-2">Tijd</th>
                                <th class="border-b-2 border-gray-300 pb-2">Beschikbaarheid</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-b border-gray-300 py-2">Groep 2</td>
                                <td class="border-b border-gray-300 py-2">Baexem</td>
                                <td class="border-b border-gray-300 py-2">20 nov, 12 dec, 3e sessie ntb</td>
                                <td class="border-b border-gray-300 py-2">18:30</td>
                                <td class="border-b border-gray-300 py-2">Volgeboekt</td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 py-2">Groep 3</td>
                                <td class="border-b border-gray-300 py-2">Baexem</td>
                                <td class="border-b border-gray-300 py-2">11 dec, 8 jan, 3e sessie ntb</td>
                                <td class="border-b border-gray-300 py-2">18:30</td>
                                <td class="border-b border-gray-300 py-2">Volgeboekt</td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 py-2">Groep 4</td>
                                <td class="border-b border-gray-300 py-2">Baexem</td>
                                <td class="border-b border-gray-300 py-2">12 jan, 5 feb, 3e sessie ntb</td>
                                <td class="border-b border-gray-300 py-2">18:30</td>
                                <td class="border-b border-gray-300 py-2">Plaatsen beschikbaar</td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-300 py-2">Groep 5</td>
                                <td class="border-b border-gray-300 py-2">Baexem</td>
                                <td class="border-b border-gray-300 py-2">9 feb, 2 maart, 3e sessie ntb</td>
                                <td class="border-b border-gray-300 py-2">18:30</td>
                                <td class="border-b border-gray-300 py-2">Plaatsen beschikbaar</td>
                            </tr>
                        </tbody>
                    </table
                    <p class="mb-4">
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition" style="background-color: #B97D67;">Inschrijven</a>
                    </p>
                </div>
            </div>
        </section>

        @include('components.reviews')
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
