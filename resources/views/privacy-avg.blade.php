
@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="w-full h-[30vh] bg-cover bg-center bg-no-repeat relative flex items-end justify-center text-white"
            style="background-image: url('{{ asset('assets/header-home.png') }}');">
            <div class="relative z-10 text-center px-6 pb-20 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">Privacy & AVG</h1>
            </div>
        </section>

        <section class="py-20" style="background-color: #FAFAFA;" id="over-mij">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                <div class="w-full bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Privacy & AVG</h2>
                    <p class="text-chantal leading-relaxed mb-6">
                        Als cliënt is het belangrijk om te weten hoe ik met persoonsgegevens om ga. De
                        Algemene Verordening Gegevensbescherming (AVG) geldt in heel Europa. Als praktijk
                        heb ik plichten, en cliënten hebben rechten over hun gegevens. Daarnaast geldt in
                        de zorg de WGBO, met extra regels voor vertrouwelijkheid en dossierbeheer.
                    </p>
                    <p>
                        <a href="https://www.nvlborstvoeding.nl/privacyverklaring" target="_blank" rel="noopener" class="underline text-[#295331]">https://www.nvlborstvoeding.nl/privacyverklaring</a>
                    </p>
                </div>
                {{-- <div class="w-full h-64 md:w-[400px] aspect-square md:aspect-auto md:h-auto bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/chantal-blauw.png') }}');">
                </div> --}}
            </div>
        </section>

        <section class="py-20" style="background-color: #EAEEEB;" id="persoonlijk">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                {{-- <div class="w-full h-64 md:w-[400px] aspect-square md:aspect-auto md:h-auto bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/chantal-home.png') }}');">
                </div> --}}
                <div class="w-full bg-white p-10">

                <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Beroepsgeheim</h2>
                    <p class="text-chantal leading-relaxed">
Alle informatie die je met mij deelt valt onder het medisch beroepsgeheim. Ik verstrek nooit gegevens aan derden zonder jouw toestemming — ook niet aan familie.
Lactatiekundigen IBCLC zijn volgens de Code of Personal Conduct verplicht dit beroepsgeheim te respecteren. Alleen in uitzonderlijke situaties, of wanneer de veiligheid in het geding is, kan overwogen worden om het beroepsgeheim deels op te heffen. Dit gebeurt altijd zorgvuldig en pas nadat andere opties zijn bekeken.</p>
                </div>
            </div>
        </section>

        @include('components.contact-form-section')

        @include('components.main-footer')
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

    </main>
@endsection
