@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')

<div class="space-y-12 mt-20">

    {{-- TÍTULO PRINCIPAL --}}
    <section class="text-center">
        <h1 class="text-4xl font-bold text-white mb-3">Proyectos</h1>
        <p class="text-[#9CA3AF] text-lg">
            Algunos de los sistemas y soluciones en los que he trabajado.
        </p>
    </section>

    {{-- PROYECTO DESTACADO --}}
    <section class="bg-[#1A1A1A] border border-[#2A2A2A] rounded-xl p-8 shadow-xl grid md:grid-cols-2 gap-8 items-center">
        <div>
            <h2 class="text-2xl font-semibold text-white mb-2">
                Sistema de Historias Clínicas Electrónicas (HCE)
            </h2>
            <p class="text-sm text-[#9CA3AF] mb-4">
                Hospital María Auxiliadora · Sector Salud
            </p>
            <p class="text-[#D1D5DB] leading-relaxed mb-4">
                Desarrollo y mantenimiento de módulos para la Historia Clínica Electrónica,
                integrados al sistema SIGHMA. Implementación de funcionalidades para
                especialidades médicas, optimización de consultas a base de datos y mejora
                del flujo de trabajo del personal de salud.
            </p>
            <p class="text-[#9CA3AF] text-sm">
                <span class="font-semibold text-[#E5E7EB]">Stack:</span> PHP, C#, Python, SQL Server
            </p>
        </div>

        <div class="flex justify-center md:justify-end">
            <div class="w-full max-w-sm h-48 rounded-xl bg-gradient-to-br from-[#06B6D4] to-[#0F172A] opacity-90 flex items-center justify-center text-center text-white text-sm px-4">
                <p class="opacity-90">
                    Proyecto orientado a mejorar la calidad de atención médica mediante
                    la digitalización y organización de la información clínica.
                </p>
            </div>
        </div>
    </section>

    {{-- GRID DE PROYECTOS --}}
    <section>
        <h2 class="text-2xl font-semibold text-white mb-6 text-center md:text-left">
            Otros proyectos
        </h2>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

            {{-- PROYECTO 1 --}}
            <article class="bg-[#1A1A1A] border border-[#2A2A2A] rounded-xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <h3 class="text-xl font-semibold text-white mb-2">
                    Sistema de Gestión Comercial y Catastro
                </h3>
                <p class="text-sm text-[#9CA3AF] mb-3">
                    Municipalidad Distrital de Chilca
                </p>
                <p class="text-[#D1D5DB] text-sm leading-relaxed mb-4">
                    Optimización del catastro comercial y apoyo en el sistema de gestión
                    tributaria. Desarrollo de módulos web para registro, actualización y
                    consulta de información, reduciendo tiempos operativos y errores.
                </p>
                <p class="text-[#9CA3AF] text-xs">
                    <span class="font-semibold text-[#E5E7EB]">Stack:</span> PHP, MySQL, SQL Server
                </p>
            </article>

            {{-- PROYECTO 2 --}}
            <article class="bg-[#1A1A1A] border border-[#2A2A2A] rounded-xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <h3 class="text-xl font-semibold text-white mb-2">
                    Sistema Web de Respaldo Administrativo
                </h3>
                <p class="text-sm text-[#9CA3AF] mb-3">
                    Municipalidad Distrital de Chilca
                </p>
                <p class="text-[#D1D5DB] text-sm leading-relaxed mb-4">
                    Desarrollo de una aplicación web interna para respaldo y consulta de
                    información administrativa, mejorando la trazabilidad y seguridad de
                    los datos documentarios.
                </p>
                <p class="text-[#9CA3AF] text-xs">
                    <span class="font-semibold text-[#E5E7EB]">Stack:</span> PHP, MySQL
                </p>
            </article>

            {{-- PROYECTO 3 --}}
            <article class="bg-[#1A1A1A] border border-[#2A2A2A] rounded-xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <h3 class="text-xl font-semibold text-white mb-2">
                    Sistema Académico Escolar
                </h3>
                <p class="text-sm text-[#9CA3AF] mb-3">
                    Isaac Newton School
                </p>
                <p class="text-[#D1D5DB] text-sm leading-relaxed mb-4">
                    Apoyo en la gestión del sistema académico para control de alumnos,
                    notas y reportes. Integración con procesos de gestión educativa y
                    generación de reportes personalizados.
                </p>
                <p class="text-[#9CA3AF] text-xs">
                    <span class="font-semibold text-[#E5E7EB]">Stack:</span> PHP, SQL Server
                </p>
            </article>

            {{-- PROYECTO 4 --}}
            <article class="bg-[#1A1A1A] border border-[#2A2A2A] rounded-xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <h3 class="text-xl font-semibold text-white mb-2">
                    Sistema Comercial Local
                </h3>
                <p class="text-sm text-[#9CA3AF] mb-3">
                    Multiservicios Johnson & DKM
                </p>
                <p class="text-[#D1D5DB] text-sm leading-relaxed mb-4">
                    Desarrollo de un sistema web local para la gestión comercial, 
                    control de ventas y registro de clientes, mejorando el control del negocio.
                </p>
                <p class="text-[#9CA3AF] text-xs">
                    <span class="font-semibold text-[#E5E7EB]">Stack:</span> PHP, SQL Server
                </p>
            </article>

            {{-- PROYECTO 5 --}}
            <article class="bg-[#1A1A1A] border border-[#2A2A2A] rounded-xl p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition">
                <h3 class="text-xl font-semibold text-white mb-2">
                    Módulos y Reportes para SIAGIE
                </h3>
                <p class="text-sm text-[#9CA3AF] mb-3">
                    Instituciones educativas
                </p>
                <p class="text-[#D1D5DB] text-sm leading-relaxed mb-4">
                    Soporte y desarrollo de procesos relacionados con SIAGIE, generación
                    de reportes y mejora del flujo de trabajo en instituciones educativas.
                </p>
                <p class="text-[#9CA3AF] text-xs">
                    <span class="font-semibold text-[#E5E7EB]">Stack:</span> SQL Server, herramientas web
                </p>
            </article>

        </div>
    </section>

</div>

@endsection
