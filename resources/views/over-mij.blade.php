
@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="w-full h-[30vh] bg-cover bg-center bg-no-repeat relative flex items-end justify-center text-white"
            style="background-image: url('{{ asset('assets/header-home.png') }}');">
            <div class="relative z-10 text-center px-6 pb-20 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">Over mij</h1>
            </div>
        </section>

        <section class="py-20" style="background-color: #FAFAFA;" id="over-mij">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                <div class="w-full bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Chantal Mulkens</h2>
                    <p class="text-chantal leading-relaxed mb-6">
                        Ik ben Chantal Mulkens, lactatiekundige met een achtergrond als verloskundige. Na jaren
                        in de verloskunde ontdekte ik dat mijn hart vooral ligt bij het ondersteunen van ouders
                        en in het bijzonder tijdens de borstvoedingsperiode. Mijn werkwijze is warm, open en
                        zonder oordeel. Ik combineer medische kennis met aandacht voor de emotionele kant
                        van voeding en ouderschap.</p>
                </div>
                <div class="w-full h-64 md:w-[400px] aspect-square md:aspect-auto md:h-auto bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/chantal-blauw.png') }}');">
                </div>
            </div>
        </section>

        <section class="py-20" style="background-color: #EAEEEB;" id="persoonlijk">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                <div class="w-full h-64 md:w-[400px] aspect-square md:aspect-auto md:h-auto bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/petruskerk.jpg') }}');">
                </div>
                <div class="w-full bg-white p-10">

                {{-- <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Chantal Mulkens</h2> --}}
                    <p class="text-chantal leading-relaxed">Ik ben getrouwd met Maurice en woon in Sittard. We zijn de trotse ouders van inmiddels 3 puberende dochters: Jikke, Gitte en Isis. Na 24 jaar een eigen verloskundige praktijk in Sittard te hebben gerund met mijn collega’s heb ik de opleiding tot lactatiekundige gedaan. Naast mijn werk als lactatiekundige begeleid ik ook Centering Pregnancy groepen in de verloskundige praktijk. Ik ben erg blij met deze leuke uitdagingen. In mijn vrije tijd ontspan ik graag met wandelen, een bezoekje aan de sauna of met een goed boek. "Deze liefde” voor lezen inspireerde mij om een selectie aan waardevolle boekentips te verzamelen voor aanstaande en jonge ouders, en natuurlijk over borstvoeding."</p>
                </div>
            </div>
        </section>

        <section class="py-20" style="background-color: #FAFAFA;" id="boeken-tips">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                <div class="w-full bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Boeken tips</h2>
                    <ul>
                        <li>
                            <strong>Borstvoeding handboek voor ouders</strong><br>
                            <em>La Leche League</em><br>

                        </li>
                        <li>
                            <strong>Positief over borstvoeding</strong><br>
                            <em>Amy Brown</em><br>
                        </li>
                        <li>
                            <strong>De melkfabriek</strong><br>
                            <em>Sofie van den Enk</em>
                        </li>
                        <li>
                            <strong>Perfecte moeders bestaan niet</strong><br>
                            <em>Diana Koster</em>
                        </li>
                        <li>
                            <strong>Jouw baby's eerste hapje Rapley-methode boek</strong><br>
                            <em>Babley</em>
                        </li>
                        <li>
                            <strong>Woman: Gedachtes over de liefde, de dood, ouder worden en de kracht van sisterhood</strong><br>
                            <em>Lucy Woesthoff</em>
                        </li>
                        <li>
                            <strong>Master in happiness</strong><br>
                            <em>Maartje Derksen</em>
                        </li>
                    </ul>
                </div>
                <div class="w-full h-64 md:w-[500px] aspect-square md:aspect-auto md:h-auto bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/boeken-large.png') }}');">
                </div>
            </div>
        </section>

        <section class="py-20" style="background-color: #EAEEEB;" id="podcast-borstvoedingsbabbel">
            <div class="max-w-5xl mx-auto flex flex-col px-4 md:px-0">
                <div class="w-full bg-white pl-10 pt-10 pr-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Podcast</h2>
                    <h3 class="text-4xl font-semibold mb-4" >Borstvoedingsbabbel</h3>
                    <p class="text-chantal leading-relaxed mb-6">
                        Borstvoedingsbabbel is een toegankelijke en gezellige podcast over borstvoeding en alles wat daarbij komt kijken.
                        In elke aflevering delen ervaringsdeskundigen en professionals hun kennis, tips en verhalen, zodat luisteraars
                        praktische handvatten krijgen en zich gesteund voelen tijdens hun borstvoedingsreis.
                        Perfect voor ouders én zorgverleners die meer willen weten, geïnspireerd willen raken of gewoon graag luisteren naar herkenbare ervaringen.
                    </p>
                    <a href="https://centeringfeeding.com/podcast" target="_blank"
                        class="inline-block text-white px-6 py-3 rounded-full transition ml-2"
                        style="background-color: #295331;">
                        Beluister de podcast
                    </a>
                </div>
                <div class="w-full bg-white p-10">
                    <h3 class="text-4xl font-semibold mb-4" >Machtige Melk</h3>
                    <p class="text-chantal leading-relaxed mb-6">
                        Machtige Melk is een inspirerende podcast voor (aanstaande) ouders én professionals die meer willen begrijpen
                        over borstvoeding, moeder-kindzorg en de wetenschap erachter. In elke aflevering nemen deskundigen je mee in
                        herkenbare verhalen, actuele inzichten en praktische handvatten die je meteen kunt toepassen.
                    </p>
                    <a href="https://centeringfeeding.com/podcast" target="_blank"
                        class="inline-block text-white px-6 py-3 rounded-full transition ml-2"
                        style="background-color: #295331;">
                        Beluister de podcast
                    </a>
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
