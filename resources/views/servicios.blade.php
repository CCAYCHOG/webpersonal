@extends('layouts.app')

@section('title', 'Servicios')

@section('content')

<div class="space-y-16 mt-20">

    {{-- TÍTULO PRINCIPAL --}}
    <section class="text-center">
        <h1 class="text-4xl font-bold text-white mb-3">Servicios</h1>
        <p class="text-[#9CA3AF] text-lg">
            Soluciones tecnológicas diseñadas para optimizar procesos y generar valor real.
        </p>
    </section>


    {{-- BLOQUES DE SERVICIOS --}}
    <section class="grid md:grid-cols-2 xl:grid-cols-3 gap-10">


        {{-- SERVICIO 1 --}}
        <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-8 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition">

            {{-- Ícono --}}
            <div class="mb-6 text-[#06B6D4]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 7h18M3 12h18M3 17h18"/>
                </svg>
            </div>

            <h3 class="text-xl font-semibold text-white mb-3">Desarrollo Backend</h3>
            <p class="text-[#D1D5DB] leading-relaxed">
                Desarrollo de aplicaciones y APIs utilizando PHP, C# y Python.
                Soluciones eficientes, seguras y escalables adaptadas a cada necesidad.
            </p>

            <p class="text-[#06B6D4] text-sm mt-4 font-semibold">PHP · C# · Python · Laravel · SQL Server</p>
        </div>


        {{-- SERVICIO 2 --}}
        <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-8 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition">

            <div class="mb-6 text-[#06B6D4]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 7h16M4 12h8M4 17h16"/>
                </svg>
            </div>

            <h3 class="text-xl font-semibold text-white mb-3">Sistemas Clínicos (HCE)</h3>
            <p class="text-[#D1D5DB] leading-relaxed">
                Implementación, mantenimiento y creación de módulos para Historias Clínicas Electrónicas,
                flujos médicos, reportes y automatización de procesos en centros de salud.
            </p>

            <p class="text-[#06B6D4] text-sm mt-4 font-semibold">HCE · SIGHMA · Integración</p>
        </div>


        {{-- SERVICIO 3 --}}
        <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-8 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition">

            <div class="mb-6 text-[#06B6D4]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6l4 2"/>
                    <circle cx="12" cy="12" r="10"/>
                </svg>
            </div>

            <h3 class="text-xl font-semibold text-white mb-3">Optimización y Análisis de Datos</h3>
            <p class="text-[#D1D5DB] leading-relaxed">
                Análisis de sistemas existentes, optimización de consultas SQL, reducción de tiempos 
                operativos y generación de reportes inteligentes para la toma de decisiones.
            </p>

            <p class="text-[#06B6D4] text-sm mt-4 font-semibold">SQL Server · MySQL · Consultas optimizadas</p>
        </div>


        {{-- SERVICIO 4 --}}
        <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-8 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition">

            <div class="mb-6 text-[#06B6D4]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 12l2-2 4 4 4-4 8 8"/>
                </svg>
            </div>

            <h3 class="text-xl font-semibold text-white mb-3">Desarrollo de Sistemas Municipales</h3>
            <p class="text-[#D1D5DB] leading-relaxed">
                Sistemas para catastro comercial, gestión tributaria, trámites documentarios 
                y automatización de procesos municipales.
            </p>

            <p class="text-[#06B6D4] text-sm mt-4 font-semibold">Gestión Comercial · Catastro · Documentario</p>
        </div>


        {{-- SERVICIO 5 --}}
        <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-8 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition">

            <div class="mb-6 text-[#06B6D4]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="12" r="10"/>
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 10h8M8 14h5"/>
                </svg>
            </div>

            <h3 class="text-xl font-semibold text-white mb-3">Sistemas Educativos</h3>
            <p class="text-[#D1D5DB] leading-relaxed">
                Soporte, desarrollo y mejora de sistemas educativos, integración con SIAGIE,
                reportes académicos y automatización administrativa.
            </p>

            <p class="text-[#06B6D4] text-sm mt-4 font-semibold">SIAGIE · Sistemas Académicos</p>
        </div>


        {{-- SERVICIO 6 --}}
        <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-8 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition">

            <div class="mb-6 text-[#06B6D4]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 4v16M4 12h16"/>
                </svg>
            </div>

            <h3 class="text-xl font-semibold text-white mb-3">Automatización y Scripts</h3>
            <p class="text-[#D1D5DB] leading-relaxed">
                Creación de scripts y automatizaciones usando Python o PHP para agilizar tareas
                repetitivas, migraciones y procesos internos.
            </p>

            <p class="text-[#06B6D4] text-sm mt-4 font-semibold">Python · PHP · Automatización</p>
        </div>

    </section>

</div>

@endsection
