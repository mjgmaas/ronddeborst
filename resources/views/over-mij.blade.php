
@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="w-full h-[80vh] bg-cover bg-center bg-no-repeat relative flex items-end justify-center text-white"
            style="background-image: url('{{ asset('assets/chantal-detail.png') }}');">
            <div class="relative z-10 text-center px-6 pb-20 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">Over mij</h1>
            </div>
        </section>

        <section class="py-20" style="background-color: #FAFAFA;" id="over-mij">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-start px-4 md:px-0">
                <div class="w-full bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Chantal Mulkens</h2>
                    <p class="text-chantal leading-relaxed mb-6">Ik ben Chantal Mulkens, lactatiekundige (IBCLC) met een achtergrond als verloskundige. Na jaren in de verloskunde ontdekte ik dat mijn hart vooral ligt bij het ondersteunen van ouders en in het bijzonder tijdens de borstvoedingsperiode. Mijn werkwijze is warm, open en zonder oordeel. Ik combineer medische kennis met aandacht voor de emotionele kant van voeding en ouderschap.</p>
                    <p class="text-chantal leading-relaxed">Ik ben getrouwd met Maurice en woon in Sittard. We zijn de trotse ouders van inmiddels 3 puberende dochters: Jikke, Gitte en Isis. Na 24 jaar een eigen verloskundige praktijk in Sittard te hebben gerund met mijn collega’s heb ik de opleiding tot lactatiekundige gedaan. Naast mijn werk als lactatiekundige begeleid ik ook Centering Pregnancy groepen in de verloskundige praktijk. Ik ben erg blij met deze leuke uitdagingen. In mijn vrije tijd ontspan ik graag met wandelen, een bezoekje aan de sauna of met een goed boek. "Deze liefde” voor lezen inspireerde mij om een selectie aan waardevolle boekentips te verzamelen voor aanstaande en jonge ouders, en natuurlijk over borstvoeding."</p>
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
