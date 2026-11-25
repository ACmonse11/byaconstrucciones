@extends('layouts.app')

@section('title', 'Blog de construcción | BLR & ARCOS')
@section('meta_description', 'Conoce las historias, proyectos y experiencias de BLR & ARCOS Construcciones y Edificaciones en construcción, obra civil e infraestructura.')

@section('content')
<style>
    /* Ajustes exclusivos del listado del blog. */
    .blr-blog-index .blr-blog-heading {
        line-height: 1.18 !important;
        letter-spacing: normal !important;
        overflow-wrap: break-word;
        word-spacing: normal;
        padding-top: .12em;
        padding-bottom: .12em;
    }
    .blr-blog-index .blr-blog-card-title {
        line-height: 1.45 !important;
        letter-spacing: normal !important;
        overflow-wrap: break-word;
        word-spacing: normal;
    }
    .blr-blog-index .blr-blog-heading a,
    .blr-blog-index .blr-blog-card-title a {
        letter-spacing: inherit;
        line-height: inherit;
    }
    .blr-blog-index .blr-blog-copy { line-height: 1.85 !important; }
    .blr-blog-index .blr-blog-hero { padding-top: 7rem; }
    @media (min-width: 768px) {
        .blr-blog-index .blr-blog-hero { padding-top: 9rem; }
    }
</style>

<main class="blr-blog-index min-h-screen bg-white text-neutral-900">
    {{-- ENCABEZADO --}}
    <section class="relative overflow-hidden bg-[#f7f8fa]">
        <div class="blr-blog-hero relative z-10 max-w-7xl mx-auto px-6 pb-16 md:pb-20">
            <div class="flex items-center gap-4 mb-6">
                <span class="w-10 h-[2px] bg-[#15297c]" aria-hidden="true"></span>
                <span class="text-xs font-semibold uppercase text-[#15297c]" style="letter-spacing:.18em;">BLR &amp; ARCOS</span>
            </div>

            <h1 class="blr-blog-heading max-w-4xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold">
                Historias <span class="block text-[#15297c]">de obra.</span>
            </h1>

            <p class="blr-blog-copy mt-6 max-w-2xl text-base md:text-lg text-neutral-600">
                Detrás de cada proyecto hay experiencias, desafíos y personas que hacen posible construir.
                Compartimos historias reales de nuestra trayectoria en construcción, obra civil e infraestructura.
            </p>

            <div class="flex items-center gap-3 mt-8" aria-hidden="true">
                <span class="w-14 h-[3px] bg-[#15297c]"></span>
                <span class="w-5 h-[3px] bg-[#b59a58]"></span>
            </div>
        </div>
        <div class="absolute -right-20 -bottom-28 w-80 h-80 border border-[#15297c]/10 rounded-full pointer-events-none" aria-hidden="true"></div>
    </section>

    {{-- LISTADO DE ARTÍCULOS --}}
    <section class="max-w-7xl mx-auto px-6 py-14 md:py-20" aria-labelledby="blr-blog-latest">
        <div class="flex flex-wrap justify-between items-end gap-5 mb-10 md:mb-12">
            <div class="min-w-0">
                <span class="text-xs uppercase font-semibold text-[#15297c]" style="letter-spacing:.15em;">Nuestro blog</span>
                <h2 id="blr-blog-latest" class="blr-blog-heading mt-3 text-2xl sm:text-3xl md:text-4xl font-bold">
                    Últimas publicaciones
                </h2>
            </div>
            <span class="text-sm text-neutral-500">
                {{ $articulos->count() }} {{ $articulos->count() === 1 ? 'artículo' : 'artículos' }}
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-14">
            @forelse($articulos as $articulo)
                <article class="group min-w-0 flex flex-col">
                    <a href="{{ route('blog.show', $articulo['slug']) }}" class="block overflow-hidden bg-[#f2f3f5]" aria-label="Leer: {{ $articulo['titulo'] }}">
                        @if(!empty($articulo['imagen']) && file_exists(public_path($articulo['imagen'])))
                            <img src="{{ asset($articulo['imagen']) }}"
                                 alt="{{ $articulo['titulo'] }}"
                                 loading="lazy"
                                 class="block w-full aspect-[4/3] object-cover transition-transform duration-700 group-hover:scale-105">
                        @else
                            <div class="w-full aspect-[4/3] flex flex-col items-center justify-center gap-3 border border-neutral-200">
                                <span class="text-[#15297c] text-xs font-bold" style="letter-spacing:.15em;">BLR &amp; ARCOS</span>
                                <span class="text-xs text-neutral-400">ESPACIO PARA FOTOGRAFÍA</span>
                            </div>
                        @endif
                    </a>

                    <div class="flex flex-wrap items-center gap-x-4 gap-y-2 mt-6">
                        <span class="text-[#15297c] text-xs font-bold uppercase" style="letter-spacing:.1em;">
                            {{ $articulo['categoria'] ?? 'Historias de obra' }}
                        </span>
                        @if(!empty($articulo['fecha']))
                            <time datetime="{{ $articulo['fecha'] }}" class="text-xs text-neutral-500">
                                {{ \Carbon\Carbon::parse($articulo['fecha'])->locale('es')->translatedFormat('d \d\e F \d\e Y') }}
                            </time>
                        @endif
                    </div>

                    <h3 class="blr-blog-card-title mt-3 text-xl md:text-2xl font-bold">
                        <a href="{{ route('blog.show', $articulo['slug']) }}" class="transition-colors group-hover:text-[#15297c]">
                            {{ $articulo['titulo'] }}
                        </a>
                    </h3>

                    <p class="blr-blog-copy mt-4 text-sm md:text-base text-neutral-600">
                        {{ $articulo['resumen'] ?? '' }}
                    </p>

                    <div class="mt-auto pt-6">
                        <a href="{{ route('blog.show', $articulo['slug']) }}"
                           class="inline-flex items-center gap-3 pb-2 border-b-2 border-[#15297c] text-sm font-bold uppercase hover:text-[#15297c] transition-colors"
                           style="letter-spacing:.06em;">
                            Leer historia <span aria-hidden="true">↗</span>
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full py-16 text-center">
                    <h3 class="blr-blog-heading text-2xl font-bold">Próximamente nuevas historias</h3>
                    <p class="mt-4 text-neutral-500">Compartiremos experiencias y proyectos de nuestra trayectoria.</p>
                </div>
            @endforelse
        </div>
    </section>

    {{-- CIERRE CORPORATIVO --}}
    <section class="bg-[#111111] text-white">
        <div class="max-w-7xl mx-auto px-6 py-16 md:py-20 flex flex-col md:flex-row justify-between items-start md:items-center gap-10">
            <div class="min-w-0">
                <span class="text-[#b59a58] text-xs uppercase font-semibold" style="letter-spacing:.15em;">BLR &amp; ARCOS</span>
                <h2 class="blr-blog-heading mt-4 text-2xl sm:text-3xl md:text-4xl font-bold">
                    La experiencia se construye <span class="block">en cada proyecto.</span>
                </h2>
            </div>
            <a href="{{ url('/contacto') }}" class="inline-flex items-center justify-center gap-5 border border-white/40 px-7 py-4 text-sm font-semibold hover:bg-white hover:text-black transition-all">
                Hablemos de tu proyecto <span aria-hidden="true">↗</span>
            </a>
        </div>
    </section>
</main>
@endsection
