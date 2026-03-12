
<section id="contact" class="py-10 md:py-20" style="background-color:#F7F7F7;">
    <div class="max-w-[1000px] mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-sm px-6 md:px-12 py-12 md:py-16">
            @if ($status ?? false)
                <div
                    id="contact-status-message"
                    role="status"
                    aria-live="polite"
                    class="mb-4 rounded-lg px-4 py-3 text-center {{ $statusType === 'error' ? 'bg-red-50 text-red-800' : 'bg-green-50 text-green-800' }}"
                >
                    {{ $status }}
                </div>
            @elseif (session('status'))
                <div id="contact-status-message" role="status" aria-live="polite" class="mb-4 rounded-lg bg-green-50 text-green-800 px-4 py-3 text-center">
                    {{ session('status') }}
                </div>
            @endif
            <h2 class="text-4xl font-semibold text-center mb-10" style="color:#295331;">Contact</h2>
            <div class="flex flex-wrap justify-center gap-4 mb-10">
                <a href="https://wa.me/31634816926" class="flex items-center gap-2 bg-green-100 text-green-900 px-4 py-2 rounded-full text-sm md:text-base hover:bg-green-200 transition">
                    <img src="{{ asset('assets/thema/whatsapp-icon.svg') }}" class="w-5 h-5" alt="WhatsApp">
                    WhatsApp
                </a>
                <a href="mailto:chantal@ronddeborst.nl" class="flex items-center gap-2 bg-green-100 text-green-900 px-4 py-2 rounded-full text-sm md:text-base hover:bg-green-200 transition">
                    <img src="{{ asset('assets/thema/mail.svg') }}" class="w-5 h-5" alt="Mail">
                    chantal@ronddeborst.nl
                </a>
                <a href="tel:+31634816926" class="flex items-center gap-2 bg-green-100 text-green-900 px-4 py-2 rounded-full text-sm md:text-base hover:bg-green-200 transition">
                    <img src="{{ asset('assets/thema/phone.svg') }}" class="w-5 h-5" alt="Telefoon">
                    +31 6 34 81 69 26
                </a>
            </div>
            <form wire:submit.prevent="submit" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input id="name" name="name" type="text" wire:model.defer="name" required placeholder="Naam" class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-300" />
                    <input id="phone" name="phone" type="text" wire:model.defer="phone" placeholder="Telefoonnummer" class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-300" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input id="city" name="city" type="text" wire:model.defer="city" required placeholder="Plaats" class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-300" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input id="email" name="email" type="email" wire:model.defer="email" required placeholder="E-mailadres" class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-300" />
                    <div class="flex flex-col">
                        <label for="due_date" class="text-sm text-gray-600 mb-1">Uitgerekende/Geboorte-datum</label>
                        <input id="due_date" name="due_date" type="date" wire:model.defer="due_date" class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-300" />
                    </div>
                </div>
                <textarea id="remarks" name="remarks" rows="6" wire:model.defer="remarks" required placeholder="Omschrijving" class="w-full border border-gray-300 rounded-md px-4 py-3 h-32 focus:outline-none focus:ring-2 focus:ring-green-300"></textarea>
                <div class="flex flex-col items-center gap-3">
                    <button
                        type="submit"
                        wire:loading.attr="disabled"
                        wire:target="submit"
                        class="rounded-full bg-green-700 px-8 py-3 text-lg text-white transition hover:bg-green-800"
                    >
                        Versturen
                    </button>

                    <div wire:loading.flex wire:target="submit" class="items-center gap-2 text-sm text-gray-600">
                        <span class="sr-only">Bezig met versturen</span>
                        <svg class="h-5 w-5 animate-spin text-green-700" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-90" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                        </svg>
                        Even geduld, je bericht wordt verzonden.
                    </div>
                </div>
                @error('name')
                    <p class="mt-1 text-sm text-red-600 text-center">{{ $message }}</p>
                @enderror
                @error('email')
                    <p class="mt-1 text-sm text-red-600 text-center">{{ $message }}</p>
                @enderror
                @error('phone')
                    <p class="mt-1 text-sm text-red-600 text-center">{{ $message }}</p>
                @enderror
                @error('remarks')
                    <p class="mt-1 text-sm text-red-600 text-center">{{ $message }}</p>
                @enderror
                @error('city')
                    <p class="mt-1 text-sm text-red-600 text-center">{{ $message }}</p>
                @enderror
                @error('due_date')
                    <p class="mt-1 text-sm text-red-600 text-center">{{ $message }}</p>
                @enderror
            </form>
        </div>
    </div>
</section>
