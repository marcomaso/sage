<footer class="bg-black text-white/70 py-16 border-t border-white/5">
  <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12">
    <div>
      <a class="text-2xl font-bold tracking-[0.2em] font-serif uppercase flex items-center gap-2 text-white mb-6" href="{{ home_url('/') }}">
        <svg class="w-8 h-8 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1v1H9V7zm5 0h1v1h-1V7zm-5 4h1v1H9v-1zm5 0h1v1h-1v-1zm-5 4h1v1H9v-1zm5 0h1v1h-1v-1z"></path></svg>
        Aura
      </a>
      <p class="text-sm font-light mb-6">Aura Resort & Spa<br/>1 Endless Horizon Blvd.<br/>Paradise Island, 99999</p>
      <p class="text-sm font-light uppercase tracking-widest text-amber-500 hover:text-white transition-colors cursor-pointer">info@auraresort.com</p>
    </div>
    
    <div>
      <h4 class="text-xs font-bold uppercase tracking-[0.2em] text-white mb-6">Explore</h4>
      <ul class="space-y-3 text-sm font-light">
        <li><a href="#" class="hover:text-amber-500 transition-colors">Our Story</a></li>
        <li><a href="#" class="hover:text-amber-500 transition-colors">Accommodations</a></li>
        <li><a href="#" class="hover:text-amber-500 transition-colors">Dining & Bars</a></li>
        <li><a href="#" class="hover:text-amber-500 transition-colors">Spa & Wellness</a></li>
      </ul>
    </div>

    <div>
      <h4 class="text-xs font-bold uppercase tracking-[0.2em] text-white mb-6">Legal</h4>
      <ul class="space-y-3 text-sm font-light">
        <li><a href="#" class="hover:text-amber-500 transition-colors">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-amber-500 transition-colors">Terms of Service</a></li>
        <li><a href="#" class="hover:text-amber-500 transition-colors">Cookie Policy</a></li>
        <li><a href="#" class="hover:text-amber-500 transition-colors">Accessibility</a></li>
      </ul>
    </div>

    <div>
      <h4 class="text-xs font-bold uppercase tracking-[0.2em] text-white mb-6">Newsletter</h4>
      <p class="text-sm font-light mb-4">Subscribe for exclusive offers and news.</p>
      <div class="flex border-b border-white/20 pb-2">
        <input type="email" placeholder="Email Address" class="bg-transparent border-none text-white focus:outline-none w-full text-sm font-light placeholder-white/40">
        <button class="text-xs uppercase tracking-widest font-bold text-amber-500 hover:text-white transition-colors">Join</button>
      </div>
    </div>
  </div>
  <div class="container mx-auto px-6 mt-16 pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center text-xs font-light tracking-wide">
    <p>&copy; {{ date('Y') }} Aura Resort. All rights reserved.</p>
    <div class="flex gap-6 mt-4 md:mt-0">
      <a href="#" class="hover:text-white transition-colors">Instagram</a>
      <a href="#" class="hover:text-white transition-colors">Facebook</a>
      <a href="#" class="hover:text-white transition-colors">Twitter</a>
    </div>
  </div>
</footer>
