<footer class="bg-gradient-to-br from-emerald-600 to-green-400 text-white pt-12 pb-6 mt-10 shadow-2xl">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
      <!-- Marca y descripción -->
      <div>
        <div class="flex items-center justify-center md:justify-start gap-3 mb-3">
          <span class="inline-block bg-white/20 rounded-full p-2">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
          </span>
          <span class="text-2xl font-extrabold tracking-tight">NutriGestión</span>
        </div>
        <p class="text-white/90 text-center md:text-left">La plataforma ideal para que nutriólogos gestionen sus citas, pacientes y planes nutricionales de forma sencilla y profesional.</p>
      </div>
      <!-- Navegación -->
      <div>
        <h6 class="text-lg font-semibold mb-4 text-center md:text-left">Navegación</h6>
        <ul class="flex flex-col items-center md:items-start gap-2">
          <li><a href="{{ route('home') }}" class="hover:text-emerald-100 transition">Inicio</a></li>
          <li><a href="{{ route('about') }}" class="hover:text-emerald-100 transition">Nosotros</a></li>
          <li><a href="{{ route('terminos') }}" class="hover:text-emerald-100 transition">Términos</a></li>
          <li><a href="{{ route('contacto') }}" class="hover:text-emerald-100 transition">Contacto</a></li>
        </ul>
      </div>
      <!-- Contacto y redes -->
      <div>
        <h6 class="text-lg font-semibold mb-4 text-center md:text-left">Contáctanos</h6>
        <div class="text-center md:text-left">
          <p class="mb-1">Email: <a href="mailto:contacto@nutricitas.com" class="underline hover:text-emerald-100">contacto@nutricitas.com</a></p>
          <p>Tel: <a href="tel:+525653594547" class="underline hover:text-emerald-100">+52 5653594547</a></p>
        </div>
        <div class="flex justify-center md:justify-start gap-4 mt-4">
          <a href="#" class="bg-white/20 hover:bg-white/40 rounded-full p-2 transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.6 0 0 .6 0 1.326v21.348C0 23.4.6 24 1.326 24h11.495v-9.294H9.692v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.4 24 24 23.4 24 22.674V1.326C24 .6 23.4 0 22.675 0"/></svg></a>
          <a href="#" class="bg-white/20 hover:bg-white/40 rounded-full p-2 transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.241 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.241 1.246-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.241-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608C4.515 2.497 5.782 2.225 7.148 2.163 8.414 2.105 8.794 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.771.131 4.659.414 3.678 1.395 2.697 2.376 2.414 3.488 2.355 4.769 2.297 6.049 2.284 6.459 2.284 12c0 5.541.013 5.951.071 7.231.059 1.281.342 2.393 1.323 3.374.981.981 2.093 1.264 3.374 1.323 1.28.059 1.689.072 7.23.072s5.951-.013 7.231-.071c1.281-.059 2.393-.342 3.374-1.323.981-.981 1.264-2.093 1.323-3.374.058-1.28.071-1.689.071-7.23s-.013-5.951-.071-7.231c-.059-1.281-.342-2.393-1.323-3.374C19.393.414 18.281.131 17 .072 15.719.013 15.309 0 12 0z"/><circle cx="12" cy="12" r="3.5"/></svg></a>
          <a href="#" class="bg-white/20 hover:bg-white/40 rounded-full p-2 transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-7 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm13.5 9.268h-3v-4c0-1.104-.896-2-2-2s-2 .896-2 2v4h-3v-8h3v1.354c.417-.583 1.19-1.354 2.5-1.354 1.933 0 3.5 1.567 3.5 3.5v4.5z"/></svg></a>
        </div>
      </div>
    </div>
    <div class="border-t border-white/20 mt-10 pt-6 text-center text-white/80 text-sm">
      © {{ date('Y') }} NutriGestión. Todos los derechos reservados.
    </div>
  </div>
</footer>