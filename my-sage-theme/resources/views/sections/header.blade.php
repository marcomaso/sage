<header class="absolute top-0 left-0 w-full z-50 text-white bg-gradient-to-b from-black/80 to-transparent border-b border-white/5 transition-all duration-300">
  <div class="container mx-auto px-6 py-6 flex justify-between items-center">
    <a class="text-2xl font-bold tracking-[0.2em] font-serif uppercase flex items-center gap-2 hover:text-amber-500 transition-colors" href="{{ home_url('/') }}">
      <svg class="w-8 h-8 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1v1H9V7zm5 0h1v1h-1V7zm-5 4h1v1H9v-1zm5 0h1v1h-1v-1zm-5 4h1v1H9v-1zm5 0h1v1h-1v-1z"></path></svg>
      Aura
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="hidden md:flex gap-10 text-xs font-bold uppercase tracking-[0.15em]" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex gap-10', 'echo' => false]) !!}
      </nav>
    @else
      <nav class="hidden md:flex gap-10 text-xs font-bold uppercase tracking-[0.15em]">
        <a href="#" class="hover:text-amber-500 transition-colors">Resort</a>
        <a href="#" class="hover:text-amber-500 transition-colors">Villas & Suites</a>
        <a href="#" class="hover:text-amber-500 transition-colors">Dining</a>
        <a href="#" class="hover:text-amber-500 transition-colors">Spa & Wellness</a>
        <a href="#" class="hover:text-amber-500 transition-colors">Experiences</a>
      </nav>
    @endif
    
    <button class="px-6 py-3 bg-white/10 backdrop-blur-sm border border-white/20 text-white text-xs uppercase tracking-[0.2em] font-bold hover:bg-white hover:text-black hover:border-white transition-all duration-300">
      Book Your Stay
    </button>
  </div>
</header>
