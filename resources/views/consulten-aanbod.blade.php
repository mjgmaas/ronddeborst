@section('title', 'Consulten aanbod: alle vormen van lactatiekundige begeleiding')

@extends('layouts.app')

@section('content')
    {{-- Navigation included via layout --}}

    <main>
        <!-- HERO -->
        <section id="hero"
            class="w-full h-[35vh] bg-cover bg-center bg-no-repeat relative flex items-end justify-center text-white"
            style="background-image: url('{{ asset('assets/header-home.png') }}');">
            <div class="relative z-10 text-center px-2 pb-10 md:px-6 md:pb-24">
                <h1 class="text-4xl md:text-6xl font-semibold mb-4 drop-shadow-lg">Consulten aanbod</h1>
            </div>
        </section>

        <section class="py-10" style="background-color: #EAEEEB;">
            <div class="max-w-5xl mx-auto px-2 md:px-0">
                <!-- Centering feeding 1 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b border-b-gray-300">
                        <div class="max-w-2xl">
                            <h2 class="text-3xl md:text-4xl font-semibold mb-2" style="color:#295331;">Centering Feeding (zwangerschapscursus)</h2>
                            <p class="text-chantal leading-relaxed mb-2">
                                Door al tijdens de zwangerschap een goede basiskennis te krijgen over het voeden, houd je na de geboorte meer tijd en energie over om te genieten van je baby. Een goede voorbereiding voorkomt zorgen, stress en problemen.
                            </p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-1" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Meer hierover">Meer hierover</button>
                        </div>
                        <div class="flex-shrink-0 md:w-1/4 thumbnail">
                            <div class="aspect-square w-full rounded-full overflow-hidden">
                                <img src="{{ asset('assets/boekje-cf.png') }}" alt="Centering Feeding" class="w-full h-full object-cover object-center">
                            </div>
                        </div>
                    </div>
                    <div id="panel-1" class="px-6 md:px-10 py-10 hidden">
                        <table class="consult-table mb-4">
                            <tr>
                                <td>Kosten:</td>
                                <td>€ 172,-</td>
                            </tr>
                        </table>
                        <ul class="default-list mb-2">
                            <li>Drie interactieve sessies van 2 uur</li>
                            <li>Samen met je partner en 4 andere koppels die in dezelfde fase zitten</li>
                            <li>Met cursusboek en toegang tot e-learning modules</li>
                        </ul>
                        <a href="{{ url('/centering-feeding#centering-feeding-inschrijven') }}" class="inline-block text-white px-6 py-3 rounded-full transition" style="background-color: #B97D67;">Inschrijven</a>
                    </div>
                </div>
                <!-- Oberservatie voedingsmoment -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b border-b-gray-300">
                        <div>
                            <h2 class="text-3xl md:text-4xl font-semibold mb-2" style="color:#295331;">Observatie voedingsmoment</h2>
                            <p class="text-chantal leading-relaxed">
                                Tijdens een voedingsmoment kijk ik mee naar het aanleggen, drinkgedrag, houding en samenspel tussen jou en je baby.
                                We bespreken wat goed gaat en waar verbetering mogelijk is, zodat voeden weer comfortabel en ontspannen wordt.
                            </p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-2" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Meer hierover">Meer hierover</button>
                        </div>
                        <div class="flex-shrink-0 md:w-1/4 thumbnail">
                            <div class="aspect-square w-full rounded-full overflow-hidden">
                                <img src="{{ asset('assets/koppel-met-baby.png') }}" alt="Centering Feeding" class="w-full h-full object-cover object-center">
                            </div>
                        </div>
                    </div>
                    <div id="panel-2" class="px-6 md:px-10 py-10 hidden" data-contact-body="Hoi Chantal,&#10;&#10;Ik wil graag een consult afspraak maken voor een 'Observatie voedingsmoment'.">
                        <table class="consult-table mb-4">
                            <tr>
                                <td>Duur:</td>
                                <td>1-1,5 uur</td>
                            </tr>
                            <tr>
                                <td>Kosten:</td>
                                <td>€ 135,-</td>
                            </tr>
                        </table>
                        <h3>Wat mag je verwachten:</h3>
                        <ul class="default-list mb-4">
                            <li>Huisbezoek tijdens voedingsmoment</li>
                            <li>Mondonderzoek (indien nodig)</li>
                            <li>Borstonderzoek (indien nodig)</li>
                            <li>Uitgebreid consult verslag (digitaal)</li>
                            <li>Nazorg per WhatsApp</li>
                            <li>Inclusief 1x telefonische follow-up</li>
                        </ul>
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition contact-form-action" style="background-color: #B97D67;">Afspraak maken</a>
                    </div>
                </div>
                <!-- Zwangerschapsconsult -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b border-b-gray-300">
                        <div>
                            <h2 class="text-3xl md:text-4xl font-semibold mb-2" style="color:#295331;">Zwangerschapsconsult</h2>
                            <p class="text-chantal leading-relaxed mb-2">
                                In dit individuele consult is er volop aandacht voor jouw persoonlijke situatie – of het nu gaat om een geplande keizersnede, een tweeling, medicijngebruik of eerdere ervaringen met borstvoeding die niet vanzelf gingen.
                            </p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-3" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Meer hierover">Meer hierover</button>
                        </div>
                    </div>
                    <div id="panel-3" class="px-6 md:px-10 py-10 hidden" data-contact-body="Hoi Chantal,&#10;&#10;Ik wil graag een consult afspraak maken voor een 'Zwangerschapsconsult'.">
                        <table class="consult-table mb-4">
                            <tr>
                                <td>Duur:</td>
                                <td>1 uur</td>
                            </tr>
                            <tr>
                                <td>Kosten:</td>
                                <td>€ 100,-</td>
                            </tr>
                        </table>
                        <h3>Wat mag je verwachten:</h3>
                        <ul class="default-list mb-4">
                            <li>Huisbezoek* (1 uur)</li>
                            <li>Bespreken zorgen/vragen</li>
                            <li>Informatie over borstvoeding</li>
                            <li>Passende tips en adviezen</li>
                            <li>Borstvoedingsplan (digitaal)</li>
                        </ul>
                        <p class="text-chantal leading-relaxed mb-4">
                            <em>*Kan in overleg ook online plaatsvinden middels videobellen of ingepland worden op het lactatiekundig spreekuur.</em>
                        </p>
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition contact-form-action" style="background-color: #B97D67;">Afspraak maken</a>
                    </div>
                </div>

                <!-- Kolf consult -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b border-b-gray-300">
                        <div>
                            <h2 class="text-3xl md:text-4xl font-semibold mb-2" style="color:#295331;">Kolf consult</h2>
                            <p class="text-chantal leading-relaxed mb-2">
                                Er zijn veel verschillende kolven verkrijgbaar, maar welke past echt bij jóu? Er bestaat geen ‘beste kolf’, wel een kolf die aansluit bij jouw lichaam, jouw wensen en jouw situatie.
                            </p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-kolf" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Meer hierover">Meer hierover</button>
                        </div>
                        <div class="flex-shrink-0 md:w-1/4 thumbnail">
                            <div class="aspect-square w-full rounded-full overflow-hidden">
                                <img src="{{ asset('assets/kolf-consult.png') }}" alt="Kolf consult" class="w-full h-full object-cover object-center">
                            </div>
                        </div>
                    </div>
                    <div id="panel-kolf" class="px-6 md:px-10 py-10 hidden" data-contact-body="Hoi Chantal,&#10;&#10;Ik wil graag een consult afspraak maken voor een 'Kolf consult'.">
                        <h3>Aan huis</h3>
                        <p class="mb-4">Bij een consult aan huis neem ik 5–6 verschillende kolven mee, zodat je uitgebreid kunt testen welke het beste bij je past.</p>
                        <table class="consult-table mb-4">
                            <tr>
                                <td>Duur:</td>
                                <td>1-1,5 uur</td>
                            </tr>
                            <tr>
                                <td>Kosten:</td>
                                <td>€ 100,-</td>
                            </tr>
                        </table>
                        <h3>Spreekuur</h3>
                        <p class="mb-4">Kom je op het spreekuur? Dan nemen we een half uur de tijd en kun je kiezen uit drie zorgvuldig geselecteerde modellen.</p>
                        <table class="consult-table mb-4">
                            <tr>
                                <td>Duur:</td>
                                <td>30 minuten</td>
                            </tr>
                            <tr>
                                <td>Kosten:</td>
                                <td>€ 45,-</td>
                            </tr>
                        </table>
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition contact-form-action" style="background-color: #B97D67;">Afspraak maken</a>
                    </div>
                </div>
                <!-- Telefonisch consult -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b border-b-gray-300">
                        <div>
                            <h2 class="text-3xl md:text-4xl font-semibold mb-2" style="color:#295331;">Telefonisch consult</h2>
                            <p class="text-chantal leading-relaxed mb-2">
                                Voor een telefonisch consult kun je terecht met korte, praktische vragen die ik goed op afstand kan beantwoorden. Het is geschikt voor onderwerpen waarbij geen borstonderzoek of beoordeling van je baby nodig is, maar waar je wél graag even wilt overleggen of advies wilt krijgen.
                            </p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-4" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Meer hierover">Meer hierover</button>
                        </div>
                    </div>
                    <div id="panel-4" class="px-6 md:px-10 py-10 hidden" data-contact-body="Hoi Chantal,&#10;&#10;Ik wil graag een telefonisch consult inplannen.">
                        <table class="consult-table mb-4">
                            <tr>
                                <td>Kosten:</td>
                                <td>€ 15,- (tot 10 minuten), daarna € 1,- per minuut</td>
                            </tr>
                        </table>
                        <div class="mb-2 font-semibold text-chantal">Denk bijvoorbeeld aan vragen over:</div>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Kolven en het opbouwen of beheren van een melkvoorraad</li>
                            <li>Het gebruik of kiezen van een bepaalde kolf</li>
                            <li>Weer gaan werken en voeding combineren met opvang</li>
                            <li>Korte vragen over vaste voeding of bijvoeding</li>
                        </ul>
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition contact-form-action" style="background-color: #B97D67;">Afspraak maken</a>
                    </div>
                </div>
                <!-- Mail consult -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b border-b-gray-300">
                        <div>
                            <h2 class="text-3xl md:text-4xl font-semibold mb-2" style="color:#295331;">Mail consult</h2>
                            <p class="text-chantal leading-relaxed mb-2">
                                Sommige vragen kunnen prima per mail beantwoord worden. Voor korte, inhoudelijke vragen waarbij geen observatie van jou of je baby nodig is, is een mailconsult een fijne en laagdrempelige optie.
                            </p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-mail" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Meer hierover">Meer hierover</button>
                        </div>
                        <div class="flex-shrink-0 md:w-1/4 thumbnail">
                            <div class="aspect-square w-full rounded-full overflow-hidden">
                                <img src="{{ asset('assets/mailconsult.jpg') }}" alt="Kolf consult" class="w-full h-full object-cover object-center">
                            </div>
                        </div>
                    </div>
                    <div id="panel-mail" class="px-6 md:px-10 py-10 hidden" data-contact-body="Hoi Chantal,&#10;&#10;Ik wil graag een mailconsult aanvragen.">
                        <table class="consult-table mb-4">
                            <tr>
                                <td>Kosten:</td>
                                <td>€ 20,-</td>
                            </tr>
                        </table>
                        <p class="mb-2">Denk bijvoorbeeld aan:</p>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Vragen over medicatie en borstvoeding</li>
                            <li>Praktische vragen waarbij geen beeld of onderzoek nodig is</li>
                            <li>Kleine onduidelijkheden waar je graag schriftelijk advies bij wilt</li>
                            <li>Handig wanneer je je vraag op je eigen moment wilt stellen en een duidelijk, rustig antwoord wilt ontvangen.</li>
                        </ul>
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition contact-form-action" style="background-color: #B97D67;">Afspraak maken</a>
                    </div>
                </div>
                <!-- Behandeling met ultrasound -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b border-b-gray-300">
                        <div>
                            <h2 class="text-3xl md:text-4xl mb-2" style="color:#295331;">Behandeling met ultrasound</h2>
                            <p class="text-chantal leading-relaxed mb-2">
                                Bij pijnlijke, verharde borsten of een (beginnende) ontsteking kan een behandeling met ultrageluid helpen om de stuwing sneller te verlichten en de doorstroming te verbeteren.
                            </p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-ultrageluid" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Meer hierover">Meer hierover</button>
                        </div>
                    </div>
                    <div id="panel-ultrageluid" class="px-6 md:px-10 py-10 hidden" data-contact-body="Hoi Chantal,&#10;&#10;Ik wil graag een afspraak maken voor een behandeling met ultrasound.">
                        <table class="consult-table mb-4">
                            <tr>
                                <td>Aan huis</td>
                                <td> €100,-</td>
                            </tr>
                            <tr>
                                <td>Spreekuur</td>
                                <td>€45,-</td>
                            </tr>
                        </table>
                        <p class="text-chantal leading-relaxed mb-4">
                            Deze behandeling wordt altijd gecombineerd met praktische, haalbare adviezen over aanleggen, rust en herstel, zodat je lichaam optimaal kan meekomen in het genezingsproces.
                        </p>
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition contact-form-action" style="background-color: #B97D67;">Afspraak maken</a>
                    </div>
                </div>
                <!-- Vervolgconsult -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b border-b-gray-300">
                        <div>
                            <h2 class="text-3xl md:text-4xl font-semibold mb-2" style="color:#295331;">Vervolgconsult</h2>
                            <p class="text-chantal leading-relaxed mb-2">
                                Een eerste consult brengt je vaak al heel ver, maar soms verandert je situatie of ontstaat er een nieuwe hulpvraag. Dan kan een 2e consult waardevol zijn.
                            </p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-vervolg" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Meer hierover">Meer hierover</button>
                        </div>
                    </div>
                    <div id="panel-vervolg" class="px-6 md:px-10 py-10 hidden" data-contact-body="Hoi Chantal,&#10;&#10;Ik wil graag een vervolgconsult plannen.">
                        <table class="consult-table mb-4">
                            <tr>
                                <td>Duur:</td>
                                <td>45 min</td>
                            </tr>
                            <tr>
                                <td>Kosten:</td>
                                <td>€ 85,-</td>
                            </tr>
                        </table>
                        <p class="text-chantal leading-relaxed mb-4">
                            Voor alle vragen die je nog hebt of als je dieper op onderwerpen in wilt gaan.
                        </p>
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition contact-form-action" style="background-color: #B97D67;">Afspraak maken</a>
                    </div>
                </div>
                <!-- Spreekuur -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden mb-8">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 px-6 md:px-10 py-6 border-b border-b-gray-300">
                        <div>
                            <h2 class="text-3xl md:text-4xl font-semibold mb-2" style="color:#295331;">Spreekuur</h2>
                            <p class="text-chantal leading-relaxed mb-2">
                                Tijdens het spreekuur kun je terecht met kortere vragen of twijfels waar je niet direct een volledig huisbezoek voor nodig hebt.
                            </p>
                            <button type="button" class="mt-4 inline-flex items-center px-4 py-2 rounded-full text-sm font-medium transition text-white" style="background-color:#295331;" data-toggle-panel="panel-spreekuur" data-toggle-label-open="Dichtklappen" data-toggle-label-closed="Meer hierover">Meer hierover</button>
                        </div>
                    </div>
                    <div id="panel-spreekuur" class="px-6 md:px-10 py-10 hidden" data-contact-body="Hoi Chantal,&#10;&#10;Ik wil graag een afspraak inplannen voor het spreekuur.">
                        <table class="consult-table mb-4">
                            <tr>
                                <td>Duur:</td>
                                <td>20–30 minuten</td>
                            </tr>
                            <tr>
                                <td>Kosten:</td>
                                <td>€ 45,-</td>
                            </tr>
                        </table>
                        <p class="mb-2 font-semibold">Bijvoorbeeld bij:</p>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Kolven</li>
                            <li>Flesvoeding combineren met borstvoeding</li>
                            <li>Afbouwen</li>
                            <li>Of als je gewoon wilt laten checken of alles goed verloopt</li>
                        </ul>
                        <p>Spreekuur locaties: </p>
                        <ul class="mb-4">
                            <li>Baexem</li>
                            <li>Nederweert</li>
                            <li>Sittard</li>
                        </ul>
                        <p class="text-chantal leading-relaxed mb-6">
                            Dit consult vindt in de praktijk of online plaats.
                        </p>
                        <a href="#contact" class="inline-block text-white px-6 py-3 rounded-full transition contact-form-action" style="background-color: #B97D67;">Afspraak maken</a>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </section>
        @include('components.contact-form-section')
        @include('components.footer')

        

        
        <script>



        document.addEventListener('DOMContentLoaded', function() {
            // Definieer consulttypes en bijbehorende tekst
            var consults = {
                'panel-1': "Hallo Chantal,\n\nIk wil graag een consult afspraak maken voor 'Centering Feeding (zwangerschapscursus)'.",
                'panel-2': "Hallo Chantal,\n\nIk wil graag een consult afspraak maken voor een 'Observatie voedingsmoment'.",
                'panel-3': "Hallo Chantal,\n\nIk wil graag een consult afspraak maken voor een 'Zwangerschapsconsult'."
            };

            // Selecteer alle Afspraak maken knoppen binnen panels
            ['panel-1','panel-2','panel-3'].forEach(function(panelId) {
                var btn = document.querySelector('#'+panelId+' a[href="#contact"]');
                if (btn) {
                    btn.addEventListener('click', function() {
                        // Start een interval om te wachten tot het veld zichtbaar is
                        var tries = 0;
                        var maxTries = 20;
                        var interval = setInterval(function() {
                            var omschrijving = document.querySelector('#contact textarea[name="remarks"]');
                            if (omschrijving) {
                                omschrijving.value = consults[panelId];
                                // Focus op het name veld
                                var nameField = document.querySelector('#contact input[name="name"]');
                                if (nameField) {
                                    nameField.focus();
                                }
                                clearInterval(interval);
                            }
                            tries++;
                            if (tries > maxTries) clearInterval(interval);
                        }, 150);
                    });
                }
            });
        });


document.addEventListener('DOMContentLoaded', function() {
    // Selecteer alle "Meer hierover" knoppen
    const toggleButtons = document.querySelectorAll('[data-toggle-panel]');

    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Zoek de dichtstbijzijnde witte kaart (de container van het consult)
            const card = this.closest('.bg-white');
            const panelId = this.getAttribute('data-toggle-panel');
            const panel = document.getElementById(panelId);

            // Wacht heel even totdat de toggle-logica van je framework/andere script klaar is
            setTimeout(() => {
                if (!panel.classList.contains('hidden')) {
                    card.classList.add('is-open');
                } else {
                    card.classList.remove('is-open');
                }
            }, 10);
        });
    });
});




        </script>

        





    </main>
@endsection
