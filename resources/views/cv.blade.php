@extends('layouts.app')

@section('title', 'Currículum')

@section('content')

<div class="space-y-16 mt-20">

    {{-- TÍTULO PRINCIPAL --}}
    <section class="text-center">
        <h1 class="text-4xl font-bold text-white mb-3">Currículum</h1>
        <p class="text-[#9CA3AF] text-lg">Experiencia • Educación • Habilidades</p>
    </section>


    {{-- RESUMEN PROFESIONAL --}}
    <section class="bg-[#1A1A1A] border border-[#2A2A2A] rounded-xl p-8 shadow-lg">
        <h2 class="text-2xl font-semibold text-white mb-4">Resumen Profesional</h2>

        <p class="text-[#D1D5DB] leading-relaxed text-lg max-w-3xl">
            Ingeniero de Sistemas e Informática con experiencia en el desarrollo, análisis y mantenimiento 
            de sistemas orientados al sector salud, administración pública y educación. Especializado en PHP, 
            C#, Python, MySQL y SQL Server, con enfoque en optimización de procesos, implementación de 
            Historias Clínicas Electrónicas, automatización de tareas y desarrollo de soluciones tecnológicas 
            modernas orientadas a resultados reales.
        </p>
    </section>


    {{-- EXPERIENCIA PROFESIONAL --}}
    <section>
        <h2 class="text-2xl font-semibold text-white mb-6">Experiencia Profesional</h2>

        <div class="space-y-8">

            {{-- EXPERIENCIA 1 --}}
            <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-6 rounded-xl">
                <h3 class="text-xl font-bold text-white">Analista Programador — Hospital María Auxiliadora</h3>
                <p class="text-[#9CA3AF] text-sm mb-4">Abril 2025 – Noviembre 2025 | Lima, Perú</p>

                <ul class="text-[#D1D5DB] space-y-2 list-disc pl-5">
                    <li>Desarrollo y mantenimiento de módulos del sistema SIGHMA usando PHP, C# y Python.</li>
                    <li>Optimización de procedimientos almacenados en SQL Server.</li>
                    <li>Implementación de funcionalidades para historias clínicas electrónicas.</li>
                </ul>
            </div>

            {{-- EXPERIENCIA 2 --}}
            <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-6 rounded-xl">
                <h3 class="text-xl font-bold text-white">Análisis y Procesamiento de Datos — Municipalidad de Chilca</h3>
                <p class="text-[#9CA3AF] text-sm mb-4">Agosto 2024 – Febrero 2025 | Chilca, Perú</p>

                <ul class="text-[#D1D5DB] space-y-2 list-disc pl-5">
                    <li>Optimización del catastro comercial y análisis del sistema de gestión.</li>
                    <li>Identificación de mejoras operativas basadas en datos.</li>
                    <li>Desarrollo de módulos documentarios en PHP, MySQL.</li>
                </ul>
            </div>

            {{-- EXPERIENCIA 3 --}}
            <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-6 rounded-xl">
                <h3 class="text-xl font-bold text-white">Analista Administrativo — Municipalidad de Chilca</h3>
                <p class="text-[#9CA3AF] text-sm mb-4">Febrero 2023 – Julio 2024 | Chilca, Perú</p>

                <ul class="text-[#D1D5DB] space-y-2 list-disc pl-5">
                    <li>Actualización del catastro comercial para mejorar la gestión tributaria.</li>
                    <li>Desarrollo de sistema web interno para respaldo de información.</li>
                    <li>Mejoras en atención al usuario mediante reportes inteligentes.</li>
                </ul>
            </div>

            {{-- EXPERIENCIA 4 --}}
            <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-6 rounded-xl">
                <h3 class="text-xl font-bold text-white">Asistente de Sistemas — Isaac Newton School</h3>
                <p class="text-[#9CA3AF] text-sm mb-4">Marzo 2019 – Diciembre 2020 | Chilca, Perú</p>

                <ul class="text-[#D1D5DB] space-y-2 list-disc pl-5">
                    <li>Gestión del sistema académico y soporte técnico a docentes.</li>
                    <li>Generación de reportes académicos personalizados.</li>
                    <li>Administración de plataforma SIAGIE.</li>
                </ul>
            </div>

        </div>
    </section>


    {{-- EDUCACIÓN --}}
    <section>
        <h2 class="text-2xl font-semibold text-white mb-6">Educación</h2>

        <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-6 rounded-xl">
            <h3 class="text-xl font-bold text-white">Ingeniería de Sistemas e Informática</h3>
            <p class="text-[#9CA3AF] text-sm mb-4">Universidad Peruana de Integración Global — 2013 a 2018</p>

            <p class="text-[#D1D5DB]">Participación en el I Foro Regional de Ingeniería de Sistemas con desarrollo web institucional.</p>
        </div>
    </section>


    {{-- CURSOS Y CERTIFICACIONES --}}
    <section>
        <h2 class="text-2xl font-semibold text-white mb-6">Cursos y Certificaciones</h2>

        <div class="grid md:grid-cols-2 gap-6">

            <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-6 rounded-xl">
                <ul class="text-[#D1D5DB] space-y-2 list-disc pl-5">
                    <li>Especialista en Gestión de Base de Datos SQL — Cámara de Comercio Exterior (2025)</li>
                    <li>PHP 8 Profesional — Código Facilito (2025)</li>
                    <li>Analítica Web — Escuela Organización Industrial (2016)</li>
                    <li>Introducción a Python — ESET Academy (2016)</li>
                </ul>
            </div>

            <div class="bg-[#1A1A1A] border border-[#2A2A2A] p-6 rounded-xl">
                <ul class="text-[#D1D5DB] space-y-2 list-disc pl-5">
                    <li>Cloud Computing — EOI (2015)</li>
                    <li>Desarrollo Web — IEE (2015)</li>
                    <li>HTML5, CSS3 y JS — OpenWebinars (2015)</li>
                    <li>SQL Server — UPIG (2015)</li>
                    <li>Modelamiento de Datos — UPIG (2015)</li>
                </ul>
            </div>

        </div>
    </section>

</div>

@endsection
