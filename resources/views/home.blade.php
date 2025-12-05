@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<section class="rounded-xl overflow-hidden shadow-xl border border-[#2A2A2A] mt-20">

    <div class="grid grid-cols-1 md:grid-cols-2">

        {{-- IZQUIERDA — SOBRE MÍ (negro más intenso) --}}
        <div class="bg-[#0A0A0A] text-[#E2E8F0] p-8 md:p-12 flex flex-col items-center md:items-start text-center md:text-left">

            <img src="/img/perfil.jpg" 
                class="w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 rounded-full object-cover shadow-lg mb-6">

            <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-white">
                Sobre mí
            </h2>

            <p class="text-[#D1D5DB] text-base sm:text-lg leading-relaxed">
                Soy Ingeniero de Sistemas e Informática con experiencia en el desarrollo, análisis y mantenimiento 
                de sistemas para el sector salud, administración pública y organizaciones educativas.
            </p>

            {{-- Redes Sociales --}}
            <div class="flex gap-5 mt-6">

                {{-- X (Twitter) --}}
                <a href="https://x.com/juliuscaycho" 
                target="_blank"
                class="text-[#06B6D4] hover:text-white transition"
                aria-label="X (Twitter)">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="w-7 h-7" 
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3l7.5 9L3 21h3l6-7.5L18 21h3l-7.5-9L21 3h-3l-6 7.5L6 3H3z"/>
                    </svg>
                </a>

                {{-- LinkedIn --}}
                <a href="https://www.linkedin.com/in/juliocesarcaychogarcia/" 
                target="_blank"
                class="text-[#06B6D4] hover:text-white transition"
                aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="w-7 h-7" 
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 1 0-4 0v7h-4v-7a6 6 0 0 1 6-6z" />
                        <rect width="4" height="12" x="2" y="9" rx="1" />
                        <circle cx="4" cy="4" r="2" />
                    </svg>
                </a>

                {{-- Facebook --}}
                <a href="https://www.facebook.com/juliocesarcaychogarcia/" 
                target="_blank"
                class="text-[#06B6D4] hover:text-white transition"
                aria-label="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="w-7 h-7" 
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 2h-3a4 4 0 0 0-4 4v3H8v4h3v9h4v-9h3l1-4h-4V6a1 1 0 0 1 1-1h3z"/>
                    </svg>
                </a>

                {{-- Instagram --}}
                <a href="https://www.instagram.com/ingcesarcaycho/" 
                target="_blank"
                class="text-[#06B6D4] hover:text-white transition"
                aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        class="w-7 h-7" 
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="5" />
                        <circle cx="12" cy="12" r="4" />
                        <circle cx="17" cy="7" r="1.2" />
                    </svg>
                </a>

            </div>


        </div>

        {{-- DERECHA — HERO (usa el estilo del theme) --}}
        <div class="
            p-8 md:p-12
            @if($theme === 'slate') bg-[#1A1A1A] text-[#E2E8F0]
            @elseif($theme === 'obsidian') bg-[#000000] text-white
            @elseif($theme === 'cyber') bg-[#0B0B0F] text-[#F8FAFC]
            @elseif($theme === 'dark-slate') bg-[#0F1115] text-[#DCE3EA]
            @elseif($theme === 'carbon') bg-[#0B0B0B] text-[#E5E7EB]
            @elseif($theme === 'graphite') bg-[#111214] text-[#F3F4F6]
            @elseif($theme === 'shadow') bg-[#141414] text-[#EDEDED]
            @elseif($theme === 'cyber-purple') bg-[#0A0A0F] text-[#F8F7FF]
            @elseif($theme === 'cyber-blue') bg-[#05060A] text-[#E2EAFB]
            @elseif($theme === 'matrix') bg-[#020403] text-[#D1FFD6]
            @elseif($theme === 'tech-oxide') bg-[#0D0E10] text-[#DDE3EB]
            @elseif($theme === 'onyx-gold') bg-[#050505] text-[#F5E9C9]
            @elseif($theme === 'black-velvet') bg-[#0A0A0A] text-[#E8E8E8]
            @elseif($theme === 'midnight-lux') bg-[#000000] text-[#E5E5E5]
            @elseif($theme === 'charcoal') bg-[#1A1A1A] text-[#CCCCCC]
            @elseif($theme === 'noir-studio') bg-[#0D0D0D] text-[#F0F0F0]
            @elseif($theme === 'ink-paper') bg-[#121212] text-[#FAFAFA]
            @elseif($theme === 'night-aqua') bg-[#0A0A0A] text-[#D7FFFA]
            @elseif($theme === 'studio-muted') bg-[#1C1C1E] text-[#F2F2F7]
            @elseif($theme === 'deep-business') bg-[#0E0F13] text-[#E5EAF1]
            @elseif($theme === 'enterprise') bg-[#101214] text-[#E8EBEF]
            @elseif($theme === 'corp-slate') bg-[#0C0F12] text-[#CFD8E3]
            @endif
        ">

            <h1 class="text-5xl sm:text-6xl font-extrabold mb-4 text-white">
                Hola
            </h1>

            <p class="text-xl sm:text-2xl mb-8 opacity-90">
                Esto es lo que soy y lo que hago.
            </p>

            <div class="flex flex-wrap justify-center md:justify-start gap-4 sm:gap-6 mb-10">
                <a href="/cv" 
                    class="px-6 sm:px-8 py-2 sm:py-3 border border-[#06B6D4] text-[#06B6D4] rounded 
                           hover:bg-[#06B6D4] hover:text-black transition font-semibold">
                    CURRICULUM
                </a>

                <a href="/proyectos" 
                    class="px-6 sm:px-8 py-2 sm:py-3 rounded 
                           bg-[#06B6D4] text-black transition font-semibold">
                    PROYECTOS
                </a>
            </div>

            <p class="text-sm sm:text-base leading-relaxed opacity-80 max-w-md mx-auto md:mx-0">
                Desarrollo soluciones tecnológicas que optimizan procesos, mejoran la atención 
                institucional y brindan valor real. Combino ingeniería, análisis y experiencia en 
                sectores como salud, municipalidad y educación para crear sistemas eficientes, 
                modernos y confiables.
            </p>
            <p class="text-sm sm:text-base leading-relaxed opacity-80 max-w-md mx-auto md:mx-0 mt-2">
                He creado e implementado módulos de Historias Clínicas Electrónicas, sistemas documentarios y soluciones 
                comerciales en PHP, C#, Python, MySQL y SQL Server. Mi trabajo se enfoca en optimizar procesos, 
                mejorar la gestión institucional y crear herramientas tecnológicas claras, útiles y orientadas a 
                resultados reales.
            </p>
        </div>

    </div>

</section>

@endsection
