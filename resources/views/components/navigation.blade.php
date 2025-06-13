@php
    $currentRoute = Route::currentRouteName();
@endphp

<nav class="bg-emerald-50 shadow-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <a href="{{ route('home') }}" class="flex items-center gap-2 text-2xl font-extrabold text-emerald-700 tracking-tight hover:text-emerald-900 transition">
        <span class="inline-block bg-emerald-100 rounded-full p-1">
          <svg class="w-7 h-7 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
        </span>
        NutriCitas
      </a>
      <div class="hidden md:flex gap-6">
        <a href="{{ route('home') }}" class="py-2 px-3 rounded-lg text-base font-semibold transition {{ $currentRoute == 'home' ? 'bg-emerald-600 text-white shadow' : 'text-emerald-800 hover:bg-emerald-100' }}">Inicio</a>
        <a href="{{ route('about') }}" class="py-2 px-3 rounded-lg text-base font-semibold transition {{ $currentRoute == 'about' ? 'bg-emerald-600 text-white shadow' : 'text-emerald-800 hover:bg-emerald-100' }}">Nosotros</a>
        <a href="{{ route('contacto') }}" class="py-2 px-3 rounded-lg text-base font-semibold transition {{ $currentRoute == 'contacto' ? 'bg-emerald-600 text-white shadow' : 'text-emerald-800 hover:bg-emerald-100' }}">Contactanos</a>
      </div>
      <!-- Botón móvil -->
      <div class="md:hidden">
        <button id="nav-toggle" class="text-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-400">
          <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
        </button>
      </div>
    </div>
    <!-- Menú móvil -->
    <div id="nav-menu" class="md:hidden hidden flex-col gap-2 mt-2 animate-fade-in-up">
      <a href="{{ route('home') }}" class="block py-2 px-3 rounded-lg text-base font-semibold transition {{ $currentRoute == 'home' ? 'bg-emerald-600 text-white shadow' : 'text-emerald-800 hover:bg-emerald-100' }}">Inicio</a>
      <a href="{{ route('about') }}" class="block py-2 px-3 rounded-lg text-base font-semibold transition {{ $currentRoute == 'about' ? 'bg-emerald-600 text-white shadow' : 'text-emerald-800 hover:bg-emerald-100' }}">Nosotros</a>
      <a href="{{ route('terminos') }}" class="block py-2 px-3 rounded-lg text-base font-semibold transition {{ $currentRoute == 'terminos' ? 'bg-emerald-600 text-white shadow' : 'text-emerald-800 hover:bg-emerald-100' }}">Términos</a>
      <a href="{{ route('contacto') }}" class="block py-2 px-3 rounded-lg text-base font-semibold transition {{ $currentRoute == 'contacto' ? 'bg-emerald-600 text-white shadow' : 'text-emerald-800 hover:bg-emerald-100' }}">Contactanos</a>
    </div>
  </div>
  <script>
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    navToggle && navToggle.addEventListener('click', () => {
      navMenu.classList.toggle('hidden');
    });
  </script>
  <style>
    @keyframes fade-in-up {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up {
      animation: fade-in-up 0.5s ease-out both;
    }
  </style>
</nav>