<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>[x-cloak] { display: none !important; }</style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="
    @if($theme === 'slate') bg-[#0D0D0D] text-[#E2E8F0]
    @elseif($theme === 'obsidian') bg-[#000000] text-white
    @elseif($theme === 'cyber') bg-[#0B0B0F] text-[#F8FAFC]

    {{-- Minimalistas --}}
    @elseif($theme === 'dark-slate') bg-[#0F1115] text-[#DCE3EA]
    @elseif($theme === 'carbon') bg-[#0B0B0B] text-[#E5E7EB]
    @elseif($theme === 'graphite') bg-[#111214] text-[#F3F4F6]
    @elseif($theme === 'shadow') bg-[#141414] text-[#EDEDED]

    {{-- Futuristas --}}
    @elseif($theme === 'cyber-purple') bg-[#0A0A0F] text-[#F8F7FF]
    @elseif($theme === 'cyber-blue') bg-[#05060A] text-[#E2EAFB]
    @elseif($theme === 'matrix') bg-[#020403] text-[#D1FFD6]
    @elseif($theme === 'tech-oxide') bg-[#0D0E10] text-[#DDE3EB]

    {{-- Elegantes --}}
    @elseif($theme === 'onyx-gold') bg-[#050505] text-[#F5E9C9]
    @elseif($theme === 'black-velvet') bg-[#0A0A0A] text-[#E8E8E8]
    @elseif($theme === 'midnight-lux') bg-[#000000] text-[#E5E5E5]
    @elseif($theme === 'charcoal') bg-[#1A1A1A] text-[#CCCCCC]

    {{-- Creativos --}}
    @elseif($theme === 'noir-studio') bg-[#0D0D0D] text-[#F0F0F0]
    @elseif($theme === 'ink-paper') bg-[#121212] text-[#FAFAFA]
    @elseif($theme === 'night-aqua') bg-[#0A0A0A] text-[#D7FFFA]
    @elseif($theme === 'studio-muted') bg-[#1C1C1E] text-[#F2F2F7]

    {{-- Corporativos --}}
    @elseif($theme === 'deep-business') bg-[#0E0F13] text-[#E5EAF1]
    @elseif($theme === 'enterprise') bg-[#101214] text-[#E8EBEF]
    @elseif($theme === 'corp-slate') bg-[#0C0F12] text-[#CFD8E3]
    @endif
">


<header x-data="{ open: false }"
        class="fixed top-0 left-0 w-full z-50 bg-[#1A1A1A] border-b border-[#2A2A2A]">

    {{-- CONTENEDOR SUPERIOR --}}
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center w-full">

        {{-- LOGO + TÍTULO PROFESIONAL --}}
        <div>
            <h1 class="font-bold text-xl md:text-2xl text-white select-none leading-tight">
                César Caycho
            </h1>
            <p class="text-xs md:text-sm text-[#9CA3AF] select-none -mt-1">
                Ing. Sistemas e Informática • Backend Developer
            </p>
        </div>

        {{-- BOTÓN MENÚ EN MÓVIL --}}
        <button 
            @click="open = !open"
            class="md:hidden text-[#E2E8F0] hover:text-[#06B6D4] transition focus:outline-none">

            {{-- Icono hamburguesa --}}
            <svg x-show="!open" x-cloak xmlns="http://www.w3.org/2000/svg"
                class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            {{-- Icono cerrar --}}
            <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg"
                class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        {{-- MENÚ DESKTOP --}}
        <nav class="hidden md:flex gap-8 text-[#E2E8F0] text-sm">
            <a href="/" class="hover:text-[#06B6D4] transition">Inicio</a>
            <a href="/cv" class="hover:text-[#06B6D4] transition">CV</a>
            <a href="/proyectos" class="hover:text-[#06B6D4] transition">Proyectos</a>
            <a href="/servicios" class="hover:text-[#06B6D4] transition">Servicios</a>
            <a href="/contacto" class="hover:text-[#06B6D4] transition">Contacto</a>
        </nav>

    </div>

    {{-- MENÚ MÓVIL DESPLEGABLE --}}
    <div 
        x-show="open"
        x-transition.origin.top
        x-cloak
        class="md:hidden bg-[#1A1A1A] border-t border-[#2A2A2A] px-6 py-4 space-y-3 text-[#E2E8F0] absolute w-full">

        <a href="/" class="block hover:text-[#06B6D4] transition">Inicio</a>
        <a href="/cv" class="block hover:text-[#06B6D4] transition">CV</a>
        <a href="/proyectos" class="block hover:text-[#06B6D4] transition">Proyectos</a>
        <a href="/servicios" class="block hover:text-[#06B6D4] transition">Servicios</a>
        <a href="/contacto" class="block hover:text-[#06B6D4] transition">Contacto</a>

    </div>

</header>


<main class="max-w-6xl mx-auto py-16 px-6 pt-20">
    @yield('content')
</main>

<footer class="bg-[#1A1A1A] border-t border-[#2A2A2A] py-6 text-[#E2E8F0] mt-9">

    <div class="max-w-5xl mx-auto px-6 flex flex-col items-center justify-center gap-4">

        {{-- Iconos de redes – compactos y centrados --}}
        <div class="flex gap-5">

            {{-- LinkedIn --}}
            <a href="https://www.linkedin.com/in/juliocesarcaychogarcia/" 
               target="_blank"
               class="text-[#06B6D4] hover:text-white transition"
               aria-label="LinkedIn">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                        d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 10-4 0v7h-4v-7a6 6 0 016-6z" />
                    <rect width="4" height="12" x="2" y="9" rx="1"/>
                    <circle cx="4" cy="4" r="2"/>
                </svg>
            </a>

            {{-- Facebook --}}
            <a href="https://www.facebook.com/juliocesarcaychogarcia/" 
               target="_blank"
               class="text-[#06B6D4] hover:text-white transition"
               aria-label="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    class="w-6 h-6" fill="none" viewBox="0 0 24 24" 
                    stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 2h-3a4 4 0 00-4 4v3H8v4h3v9h4v-9h3l1-4h-4V6a1 1 0 011-1h3z"/>
                </svg>
            </a>

            {{-- Instagram --}}
            <a href="https://www.instagram.com/ingcesarcaycho/" 
               target="_blank"
               class="text-[#06B6D4] hover:text-white transition"
               aria-label="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    class="w-6 h-6" fill="none" viewBox="0 0 24 24" 
                    stroke="currentColor" stroke-width="1.8">
                    <rect x="3" y="3" width="18" height="18" rx="5"/>
                    <circle cx="12" cy="12" r="4"/>
                    <circle cx="17" cy="7" r="1.2"/>
                </svg>
            </a>

            {{-- X (Twitter) --}}
            <a href="https://x.com/juliuscaycho" 
               target="_blank"
               class="text-[#06B6D4] hover:text-white transition"
               aria-label="X (Twitter)">
                <svg xmlns="http://www.w3.org/2000/svg" 
                    class="w-6 h-6" fill="none" viewBox="0 0 24 24" 
                    stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3l7.5 9L3 21h3l6-7.5L18 21h3l-7.5-9L21 3h-3l-6 7.5L6 3H3z"/>
                </svg>
            </a>

        </div>

        {{-- Texto compacto --}}
        <p class="text-sm text-[#64748B] text-center">
            © 2025 Creado por <span class="text-white font-semibold">César Caycho</span>
        </p>

    </div>

</footer>



</body>
</html>
