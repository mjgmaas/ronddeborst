<header class="bg-white">
  <div class="max-w-[1440px] mx-auto relative flex items-center justify-between padding-20">
    <div>
      <div class="logo-split">
        <a href="/">
          <h1>Rond de Borst</h1>
        </a>
        <p>
          Lactatiekundige<br>Chantal Mulkens
        </p>
      </div>
    </div>
    <img src="{{ asset('assets/thema/logo-chantal.png') }}" alt="Rond de Borst" class="logo-ronddeborst" />
    <nav class="hidden xl:flex items-center gap-3 text-sm font-medium">
      <a href="/over-mij" class="px-3 py-2 rounded-full nav-item-chantal text-green-900 transition">Over mij</a>
      <a href="/consulten-aanbod" class="px-3 py-2 rounded-full nav-item-chantal text-green-900 transition">Consulten</a>
      <a href="/centering-feeding" class="px-3 py-2 rounded-full nav-item-chantal text-green-900 transition whitespace-nowrap">Centering Feeding</a>
      <a href="#contact" class="px-3 py-2 rounded-full text-white transition" style="background-color: #B97D67;">Contact</a>
      <a href="https://wa.me/31634816926" class="flex items-center gap-2 px-3 py-2 rounded-full nav-item-chantal text-green-900 transition">
        <img src="{{ asset('assets/thema/whatsapp-icon.svg') }}" class="w-5 h-5" alt="">
        <span>WhatsApp</span>
      </a>
    </nav>
    <button id="mobile-menu-toggle" type="button" class="xl:hidden inline-flex items-center justify-center p-2 rounded-full border border-gray-300 text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500" aria-label="Open hoofdmenu" aria-expanded="false">
      <span class="sr-only">Menu</span>
      <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>
  <div id="mobile-menu" class="xl:hidden border-t border-gray-200 bg-white hidden">
    <div class="max-w-[1440px] mx-auto padding-20 flex flex-col gap-2 text-sm font-medium">
      <a href="/over-mij" class="block px-4 py-2 rounded-full text-green-900 hover:bg-gray-100 transition">Over mij</a>
      <a href="/consulten-aanbod" class="block px-4 py-2 rounded-full text-green-900 hover:bg-gray-100 transition">Consulten</a>
      <a href="/centering-feeding" class="block px-4 py-2 rounded-full text-green-900 hover:bg-gray-100 transition">Centering Feeding</a>
      <a href="#contact" class="block px-4 py-2 rounded-full text-white" style="background-color: #B97D67;">Contact</a>
      <a href="https://wa.me/31634816926" class="flex items-center gap-2 px-4 py-2 rounded-full text-green-900 hover:bg-gray-100 transition">
        <img src="{{ asset('assets/thema/whatsapp-icon.svg') }}" class="w-5 h-5" alt="">
        <span>WhatsApp</span>
      </a>
    </div>
  </div>
</header>
