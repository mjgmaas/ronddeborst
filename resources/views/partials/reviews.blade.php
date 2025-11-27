<section id="ervaringen" class="py-20" style="background-color: #EDF2EE;">
  <div class="max-w-[1000px] mx-auto px-4">
    <h2 class="text-4xl font-semibold text-center mb-10" style="color:#295331;">
      Lieve woordjes
    </h2>
    <div id="reviews-slider" class="relative">
      <div class="overflow-hidden">
        <div class="reviews-slide flex flex-col md:grid md:grid-cols-2 gap-8" data-slide="0">
          <article class="bg-white rounded-2xl shadow-sm px-10 py-12 text-center">
            <div class="w-20 h-20 mx-auto mb-6 rounded-full flex items-center justify-center" style="background-color:#F3F5F3;">
              <img src="{{ asset('assets/thema/heart.svg') }}" class="w-8 h-8" alt="">
            </div>
            <h3 class="text-xl font-semibold mb-3" style="color:#295331;">
              Voornaam Achternaam
            </h3>
            <p class="text-sm leading-relaxed text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut ornare metus.
              Suspendisse rutrum consectetur quam, at cursus leo cursus et. Maecenas facilisis
              egestas felis, non auctor mauris fermentum quis.
            </p>
          </article>
          <article class="bg-white rounded-2xl shadow-sm px-10 py-12 text-center">
            <div class="w-20 h-20 mx-auto mb-6 rounded-full flex items-center justify-center" style="background-color:#F3F5F3;">
              <img src="{{ asset('assets/thema/heart.svg') }}" class="w-8 h-8" alt="">
            </div>
            <h3 class="text-xl font-semibold mb-3" style="color:#295331;">
              Voornaam Achternaam
            </h3>
            <p class="text-sm leading-relaxed text-gray-700">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut ornare metus.
              Suspendisse rutrum consectetur quam, at cursus leo cursus et. Maecenas facilisis
              egestas felis, non auctor mauris fermentum quis.
            </p>
          </article>
        </div>
      </div>
      <div class="flex justify-center gap-3 mt-8">
        <button class="reviews-dot w-3 h-3 rounded-full border border-[#95B39A]" data-target="0" aria-label="Slide 1"></button>
        <button class="reviews-dot w-3 h-3 rounded-full border border-[#95B39A]" data-target="1" aria-label="Slide 2"></button>
      </div>
    </div>
  </div>
</section>
