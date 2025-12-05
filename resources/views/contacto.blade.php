@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<div class="space-y-16 mt-20">

    {{-- TÍTULO PRINCIPAL --}}
    <section class="text-center">
        <h1 class="text-4xl font-bold text-white mb-3">Contacto</h1>
        <p class="text-[#9CA3AF] text-lg">¿Tienes un proyecto o consulta? Hablemos.</p>
    </section>


    {{-- BLOQUE PRINCIPAL --}}
    <section class="grid md:grid-cols-2 gap-10">

        {{-- INFORMACIÓN DE CONTACTO --}}
        <div class="bg-[#1A1A1A] border border-[#2A2A2A] rounded-xl p-8 shadow-lg space-y-8">

            {{-- Teléfono --}}
            <div class="flex items-center gap-4">
                <div class="text-[#06B6D4]">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                         class="h-8 w-8" fill="none" viewBox="0 0 24 24" 
                         stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2 5a2 2 0 012-2h1.28a1 1 0 01.95.68l1.1 3.3a1 1 0 01-.3 1.06l-1.52 1.27a11 11 0 005.02 5.02l1.27-1.52a1 1 0 011.06-.3l3.3 1.1a1 1 0 01.68.95V20a2 2 0 01-2 2h-1C8.82 22 2 15.18 2 7V6a2 2 0 012-2z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-white font-semibold text-lg">Teléfono</p>
                    <p class="text-[#D1D5DB]">+51 949 727 024</p>
                </div>
            </div>

            {{-- Correo --}}
            <div class="flex items-center gap-4">
                <div class="text-[#06B6D4]">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                         class="h-8 w-8" fill="none" viewBox="0 0 24 24" 
                         stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2zm0 0l8 7 8-7"/>
                    </svg>
                </div>
                <div>
                    <p class="text-white font-semibold text-lg">Correo Electrónico</p>
                    <p class="text-[#D1D5DB]">ing@cesarcaycho.com</p>
                </div>
            </div>

            {{-- Redes sociales --}}
            <div>
                <p class="text-white font-semibold text-lg mb-4">Redes Sociales</p>

                <div class="flex gap-5">
                    {{-- LinkedIn --}}
                    <a href="https://www.linkedin.com/in/juliocesarcaychogarcia/" 
                       target="_blank" class="text-[#06B6D4] hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-7 h-7" fill="none" viewBox="0 0 24 24" 
                             stroke="currentColor" stroke-width="1.8">
                            <circle cx="4" cy="4" r="2"/>
                            <rect width="4" height="12" x="2" y="9" rx="1"/>
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 1 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/>
                        </svg>
                    </a>

                    {{-- Facebook --}}
                    <a href="https://www.facebook.com/juliocesarcaychogarcia/"
                       target="_blank" class="text-[#06B6D4] hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M18 2h-3a4 4 0 0 0-4 4v3H8v4h3v9h4v-9h3l1-4h-4V6a1 1 0 0 1 1-1h3z"/>
                        </svg>
                    </a>

                    {{-- Instagram --}}
                    <a href="https://www.instagram.com/ingcesarcaycho/"
                       target="_blank" class="text-[#06B6D4] hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="3" width="18" height="18" rx="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17" cy="7" r="1.2"/>
                        </svg>
                    </a>

                    {{-- X (Twitter) --}}
                    <a href="https://x.com/juliuscaycho"
                       target="_blank" class="text-[#06B6D4] hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 3l7.5 9L3 21h3l6-7.5L18 21h3l-7.5-9L21 3h-3l-6 7.5L6 3H3z"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>


        {{-- FORMULARIO DE CONTACTO --}}
        <form method="POST" action="{{ route('contacto.send') }}"
            class="bg-[#1A1A1A] border border-[#2A2A2A] rounded-xl p-8 shadow-lg space-y-6">

            @csrf

            {{-- ÉXITO --}}
            @if(session('success'))
                <div class="p-3 rounded-lg bg-green-600/20 text-green-400 border border-green-700 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            {{-- NOMBRE --}}
            <div>
                <label for="nombre" class="text-[#D1D5DB] text-sm">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"
                    class="w-full mt-1 p-3 rounded-lg bg-[#0F0F0F] border 
                    {{ $errors->has('nombre') ? 'border-red-500' : 'border-[#2A2A2A]' }} 
                    text-white focus:border-[#06B6D4] outline-none">

                @error('nombre')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- EMAIL --}}
            <div>
                <label for="email" class="text-[#D1D5DB] text-sm">Correo electrónico</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="w-full mt-1 p-3 rounded-lg bg-[#0F0F0F] border
                    {{ $errors->has('email') ? 'border-red-500' : 'border-[#2A2A2A]' }}
                    text-white focus:border-[#06B6D4] outline-none">

                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- MENSAJE --}}
            <div>
                <label for="mensaje" class="text-[#D1D5DB] text-sm">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="5"
                        class="w-full mt-1 p-3 rounded-lg bg-[#0F0F0F] border
                        {{ $errors->has('mensaje') ? 'border-red-500' : 'border-[#2A2A2A]' }}
                        text-white focus:border-[#06B6D4] outline-none">{{ old('mensaje') }}</textarea>

                @error('mensaje')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button 
                class="w-full py-3 rounded-lg bg-[#06B6D4] text-black font-semibold hover:bg-[#0ea5b9] transition">
                Enviar mensaje
            </button>

        </form>


    </section>

</div>

@endsection
