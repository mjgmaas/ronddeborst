
@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="w-full h-[35vh] bg-cover bg-center bg-no-repeat relative flex items-end justify-center text-white"
            style="background-image: url('{{ asset('assets/header-home.png') }}');">
            <div class="relative z-10 text-center px-6 pb-20 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">Consulten</h1>
            </div>
        </section>

        <section class="py-20" style="background-color: #FAFAFA;" id="consulten">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #B97D67">Consulten</h2>
                    <p class="text-chantal leading-relaxed mb-6">Chantal Mulkens is een ervaren verloskundige en gecertificeerd lactatiedeskundige. Met haar brede kennis en warme, persoonlijke benadering begeleidt zij (aanstaande) ouders in een van de meest bijzondere periodes van hun leven. Van zwangerschap en bevalling tot de eerste periode met de baby en de borstvoeding: Chantal biedt deskundig advies, praktische tips en een luisterend oor. Haar doel is om ouders te ondersteunen bij het maken van keuzes die bij hén passen, zodat zij met vertrouwen en rust kunnen genieten van deze bijzondere tijd.</p>
                    <a href="{{ url('/consulten-aanbod') }}" class="inline-block text-white px-6 py-3 rounded-full transition" style="background-color: #B97D67;">Soorten consulten Rond de Borst</a>
                </div>
                <div class="w-full md:w-[400px] h-full overflow-hidden">
                    <img src="{{ asset('assets/chantal-overhandigd-boekje.png') }}" class="w-full h-full object-cover object-center" alt="">
                </div>
            </div>
        </section>

        <section class="py-20" style="background-color: #EAEEEB;" id="centering-feeding">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row-reverse md:items-stretch px-4 md:px-0">
                <div class="w-full md:w-[600px] bg-white p-10">
                    <h2 class="text-4xl font-semibold mb-4" style="color: #295331">Praktisch</h2>
                    <p class="text-chantal leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut ornare metus. Suspendisse rutrum consectetur quam, at cursus leo cursus et. Maecenas facilisis egestas felis, non auctor mauris fermentum quis. Etiam odio nunc, fringilla nec justo sit amet, volutpat convallis risus. Nulla facilisi.</p>
                    <a href="#" class="inline-block text-white px-6 py-3 rounded-full transition" style="background-color: #295331;">Praktisch</a>
                </div>
                <div class="w-full md:w-[400px] bg-white flex flex-col">
                    <div class="aspect-square w-full overflow-hidden">
                        <img src="{{ asset('assets/chantal-overhandigd-boekje.png') }}" class="w-full h-full object-cover object-center" alt="">
                    </div>
                    <div class="flex-1 bg-white"></div>
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
