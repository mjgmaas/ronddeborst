
@extends('layouts.app')

@section('content')
    {{-- Navigation --}}
    {{-- Navigation included via layout --}}

    <!-- HOOFDINHOUD -->
    <main>
        <section id="hero"
            class="w-full h-[50vh] bg-cover bg-center bg-no-repeat relative flex items-end justify-center text-white"
            style="background-image: url('{{ asset('assets/header-home.png') }}');">
            <div class="relative z-10 text-center px-6 pb-20 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">
                    Waar zorg, kennis en kracht samenkomen
                </h1>
            </div>
        </section>

        <section class="py-20 bg-[#FAFAFA]" id="over-mij">
            <div class="max-w-5xl mx-auto px-4 md:px-0 flex flex-col md:flex-row md:items-stretch">
                <div class="w-full md:w-[600px] bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Chantal Mulkens</h2>
                    <p class="text-chantal leading-relaxed mb-6">
                        Als lactatiekundige begeleid ik ouders in de bijzondere periode van voeding,
                        hechting en groei. Of het nu gaat om de eerste weken na de bevalling,
                        terugkerende vragen over borstvoeding of onzekerheid bij het combineren van
                        werk en voeden.
                    </p>
                    <p class="text-chantal leading-relaxed mb-6">
                        Je hoeft het niet alleen te doen. Met aandacht, deskundigheid en respect
                        voor jouw situatie zoeken we samen naar wat werkt voor jou, je baby en
                        jullie gezin. Naast individuele consulten bied ik ook Centering Feeding
                        aan: een workshopreeks tijdens de zwangerschap, die helpt om je voor te
                        bereiden op een ontspannen start met borstvoeding.
                    </p>
                    <a href="{{ url('/over-mij') }}"
                        class="inline-block text-white px-6 py-3 rounded-full transition"
                        style="background-color: #B97D67;">
                        Lees meer
                    </a>
                </div>
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto md:h-auto bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/chantal-zit-op-bed.jpg') }}');">
                </div>
            </div>
        </section>

        <section class="py-20" style="background-color: #EAEEEB;" id="centering-feeding">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-10">
                    <h2 class="header-dark-green text-4xl font-semibold mb-4">Centering feeding</h2>
                        <p class="text-chantal leading-relaxed mb-2">
                            Door al tijdens de zwangerschap een goede basiskennis te krijgen over het voeden,
                            houd je na de geboorte meer tijd en energie over om te genieten van je
                            baby. Een goede voorbereiding voorkomt zorgen, stress en problemen.
                        </p>
                        <ul class="cf-list">
                            <li>Drie interactieve sessies van 2 uur</li>
                            <li>Samen met je partner en 4 andere koppels die in dezelfde fase zitten</li>
                            <li>Met cursusboek en toegang tot e-learning modules</li>
                        </ul>
                    <a href="{{ url('/centering-feeding') }}"
                        class="inline-block text-white px-6 py-3 rounded-full transition"
                        style="background-color: #295331;">
                        Lees meer
                    </a>
                </div>
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                    style="background-image: url('{{ asset('assets/boekje-cf.png') }}');">
                </div>
            </div>
        </section>

        <section class="py-20" style="background-color: #FAFAFA;" id="consulten">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Consulten</h2>
                    <p class="text-chantal leading-relaxed mb-6">
                        Borstvoeding verloopt niet altijd vanzelf. Soms heb je vragen, twijfels of praktische hulp nodig om verder te kunnen. Je kunt bij mij terecht tijdens de zwangerschap, in de kraamtijd of op elk moment daarna.
                    </p>
                    <h3 class="leading-relaxed mb-3">Hulp bij:</h3>
                    <ul class="mb-6">
                        <li>Moeite met aanleggen of pijn tijdens het voeden</li>
                        <li>Stuwing, tepelkloven of (beginnende) borstontsteking</li>
                        <li>Te weinig of juist te veel melk</li>
                        <li>Een slaperige baby of een baby die onrustig drinkt</li>
                        <li>Onvoldoende groei</li>
                        <li>Weigeren van de borst</li>
                        <li>Combinatie van borst- en flesvoeding</li>
                        <li>Kolven, melkproductie opbouwen of afbouwen</li>
                        <li>Terug aan het werk in combinatie met borstvoeding</li>
                        <li>Medicatiegebruik bij borstvoeding</li>
                        <li>Ziekte of handicap bij moeder of baby</li>
                    </ul>
                    <p class="text-chantal leading-relaxed mb-6">
                        Ook als je gewoon even wilt checken of je goed bezig bent.<br>
                        Geen vraag is te klein.
                    </p>
                    <a href="{{ url('/consulten') }}"
                        class="inline-block w-45 text-white px-6 py-3 my-2 rounded-full transition mr-2"
                        style="background-color: #B97D67;">
                        Meer weten
                    </a>
                    <a href="#contact"
                        class="inline-block w-45 text-white px-6 py-3 my-2 rounded-full transition"
                        style="background-color: #295331;">
                        Afspraak maken
                    </a>
                </div>
                <div class="w-full md:w-[400px] aspect-square md:aspect-auto bg-cover bg-center md:h-auto"
                {{-- <div class="w-full md:w-[400px] bg-white flex flex-col bg-cover bg-center md:h-auto"> --}}
                    <div class="aspect-square w-full overflow-hidden">
                        <img src="{{ asset('assets/chantal-consult.jpg') }}" class="w-full h-full object-cover object-center" alt="">
                    </div>
                    <div class="flex-1 bg-white"></div>
                </div>
            </div>
        </section>

        @include('components.reviews')

        @include('components.contact-form-section')

        @include('components.footer')
    </main>
@endsection
