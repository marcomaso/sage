@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <section class="relative h-screen flex flex-col justify-center items-center text-center -mt-[1px] text-white">
    <!-- Background -->
    <div class="absolute inset-0 z-0">
      <img src="{{ get_theme_file_uri('public/images/hero.png') }}" alt="Luxurious Resort" class="w-full h-full object-cover scale-105 animate-[zoomOut_20s_ease-out_forwards]">
      <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/30 to-[#0A0A0A]"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 translate-y-8 animate-[slideUp_1s_ease-out_forwards] opacity-0" style="animation-delay: 0.3s;">
      <span class="block text-amber-500 tracking-[0.3em] text-sm md:text-base font-semibold mb-4 uppercase">Welcome to Paradise</span>
      <h1 class="text-6xl md:text-8xl font-light mb-6 font-serif">Aura <span class="text-amber-500">&bull;</span> Resort</h1>
      <p class="max-w-2xl mx-auto text-lg md:text-xl text-stone-300 font-light leading-relaxed mb-12">
        Discover the perfect harmony of nature, luxury, and tranquility. An unforgettable escape awaits on the shores of eternity.
      </p>

      <!-- Glassmorphism Booking Bar -->
      <div class="inline-flex flex-col md:flex-row bg-white/10 backdrop-blur-md border border-white/20 p-2 md:rounded-full rounded-2xl w-full max-w-4xl shadow-2xl">
        <div class="flex-1 flex flex-col md:flex-row">
          <div class="flex-1 px-6 py-4 border-b md:border-b-0 md:border-r border-white/20 text-left">
            <span class="block text-xs uppercase tracking-wider text-stone-400 font-semibold mb-1">Check-in</span>
            <input type="date" class="bg-transparent text-white focus:outline-none w-full cursor-pointer placeholder-white/50" />
          </div>
          <div class="flex-1 px-6 py-4 border-b md:border-b-0 md:border-r border-white/20 text-left">
            <span class="block text-xs uppercase tracking-wider text-stone-400 font-semibold mb-1">Check-out</span>
            <input type="date" class="bg-transparent text-white focus:outline-none w-full cursor-pointer placeholder-white/50" />
          </div>
          <div class="flex-1 px-6 py-4 text-left">
            <span class="block text-xs uppercase tracking-wider text-stone-400 font-semibold mb-1">Guests</span>
            <select class="bg-transparent text-white focus:outline-none w-full cursor-pointer appearance-none">
              <option class="text-black">1 Adult</option>
              <option class="text-black" selected>2 Adults</option>
              <option class="text-black">Family (2+2)</option>
            </select>
          </div>
        </div>
        <button class="bg-amber-600 hover:bg-amber-500 text-white md:rounded-full rounded-xl px-10 py-4 font-semibold tracking-wider uppercase transition-all duration-300 mt-2 md:mt-0">
          Check Availability
        </button>
      </div>
    </div>
  </section>

  <!-- Introduction Section -->
  <section class="py-32 bg-[#0A0A0A] text-white">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row items-center gap-16">
        <div class="md:w-1/2">
          <span class="text-amber-500 uppercase tracking-[0.2em] text-sm font-semibold block mb-4">The Experience</span>
          <h2 class="text-4xl md:text-6xl font-serif font-light mb-8 leading-tight">Elevate Your <br />Senses.</h2>
          <p class="text-stone-400 text-lg font-light leading-relaxed mb-8">
            Immerse yourself in our world-class amenities designed to captivate your imagination and restore your spirit. Every detail has been meticulously crafted to offer an experience that transcends the ordinary.
          </p>
          <a href="#" class="inline-flex items-center text-amber-500 uppercase tracking-widest text-sm font-bold group hover:text-white transition-colors duration-300">
            Discover Our Story
            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
          </a>
        </div>
        <div class="md:w-1/2 relative">
          <div class="absolute inset-0 bg-amber-500/10 translate-x-4 -translate-y-4 rounded-xl -z-10"></div>
          <img src="{{ get_theme_file_uri('public/images/room.png') }}" alt="Luxurious Suite" class="w-full h-auto rounded-xl shadow-2xl hover:scale-[1.02] transition-transform duration-500">
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Suites -->
  <section class="py-24 bg-[#111111] text-white">
    <div class="container mx-auto px-6 text-center">
      <span class="text-amber-500 uppercase tracking-[0.2em] text-sm font-semibold block mb-4">Accommodations</span>
      <h2 class="text-4xl md:text-5xl font-serif font-light mb-16">Iconic Suites</h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
        @if (!empty($rooms))
          @foreach($rooms as $room)
            <div class="group cursor-pointer" onclick="window.location.href='{{ $room['link'] }}'">
              <div class="overflow-hidden rounded-t-xl relative h-80">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors duration-500 z-10"></div>
                <img src="{{ get_theme_file_uri('public/images/room.png') }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" alt="{{ $room['title'] }}">
                <div class="absolute top-4 right-4 z-20 bg-white/10 backdrop-blur-md px-4 py-1 text-sm rounded border border-white/20 font-semibold tracking-wide">From ${{ $room['price_from'] }}</div>
              </div>
              <div class="bg-[#1A1A1A] p-8 align-top rounded-b-xl border border-t-0 border-white/5 group-hover:border-white/10 transition-colors">
                <h3 class="text-2xl font-serif mb-2 group-hover:text-amber-500 transition-colors">{{ $room['title'] }}</h3>
                <p class="text-stone-400 text-sm mb-6 line-clamp-2">{{ $room['excerpt'] }}</p>
                <div class="flex justify-between items-center text-xs text-stone-500 uppercase tracking-widest font-semibold">
                  <span>{{ $room['size_sqm'] }} SQM</span>
                  <span>{{ $room['bed_type'] }}</span>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <p class="text-center text-stone-500 italic col-span-3">No suites available at the moment.</p>
        @endif
      </div>
    </div>
  </section>

  <!-- Custom Keyframes Style Block (since we aren't editing app.css directly for these simple animations) -->
  <style>
    @keyframes zoomOut {
      0% { transform: scale(1.1); }
      100% { transform: scale(1); }
    }
    @keyframes slideUp {
      0% { transform: translateY(30px); opacity: 0; }
      100% { transform: translateY(0); opacity: 1; }
    }
  </style>

@endsection
