@extends('layouts.app')

@section('title', $articulo['titulo_seo'] ?? $articulo['titulo'])
@section('meta_description', $articulo['descripcion_seo'] ?? ($articulo['resumen'] ?? ''))
@section('og_type', 'article')

@php
    // Todas las rutas de fotografías son relativas a public/.
    $fotografias = $articulo['fotografias'] ?? [];
    $principal = $fotografias[1] ?? [];
    $imagenPrincipal = $principal['ruta'] ?? ($articulo['imagen'] ?? null);
    $principalAlt = $principal['alt'] ?? $articulo['titulo'];
    $principalPie = $principal['pie'] ?? null;
    $existePrincipal = $imagenPrincipal && is_file(public_path(ltrim($imagenPrincipal, '/')));

    // Si el contenido ya incluye el cierre comercial, se omite su bloque
    // duplicado y se conserva el cierre fijo con los botones de contacto.
    $contenido = $articulo['contenido'] ?? [];
    $contenidoLimpio = [];
    $omitirCierre = false;
    $normalizar = static function ($texto) {
        $texto = mb_strtolower(trim((string) $texto), 'UTF-8');
        $texto = str_replace(['á', 'é', 'í', 'ó', 'ú', 'ü'], ['a', 'e', 'i', 'o', 'u', 'u'], $texto);
        return trim($texto, " .!¡¿?\t\n\r\0\x0B");
    };
    foreach ($contenido as $bloque) {
        $tipo = $bloque['tipo'] ?? '';
        $texto = $normalizar($bloque['texto'] ?? '');
        if (in_array($tipo, ['titulo', 'subtitulo'], true) && $texto === 'hablemos de tu proximo proyecto') {
            $omitirCierre = true;
            continue;
        }
        if ($omitirCierre) {
            // Los párrafos que siguen al título duplicado pertenecen a ese cierre.
            // Un nuevo título o una imagen reanuda el contenido normal.
            if (in_array($tipo, ['titulo', 'subtitulo', 'imagen'], true)) {
                $omitirCierre = false;
            } else {
                continue;
            }
        }
        // La imagen 1 ya aparece arriba como fotografía principal.
        if ($tipo === 'imagen' && (string) ($bloque['numero'] ?? '') === '1') {
            continue;
        }
        $contenidoLimpio[] = $bloque;
    }
@endphp

@if($existePrincipal)
    @section('og_image', asset(ltrim($imagenPrincipal, '/')))
@endif

@section('content')
<style>
    /* Estilos limitados a la vista del artículo. */
    .blr-blog-articulo .blr-titulo,
    .blr-blog-articulo .blr-subtitulo,
    .blr-blog-articulo .blr-titulo-seccion,
    .blr-blog-articulo .blr-titulo-relacionado {
        letter-spacing: 0 !important;
        line-height: 1.3 !important;
        overflow-wrap: break-word;
        word-break: normal;
        text-wrap: pretty;
        padding-top: .08em;
        padding-bottom: .1em;
    }
    .blr-blog-articulo .blr-titulo { line-height: 1.22 !important; }
    .blr-blog-articulo .blr-parrafo { line-height: 1.9 !important; letter-spacing: normal; }
    @media (max-width: 640px) {
        .blr-blog-articulo .blr-titulo { line-height: 1.25 !important; }
    }
</style>

<main class="blr-blog-articulo bg-white text-neutral-900 min-h-screen">
    <article>
        {{-- ENCABEZADO --}}
        <header class="max-w-5xl mx-auto px-6 pt-36 sm:pt-40 md:pt-44 pb-12 md:pb-16">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-3 text-sm text-neutral-500 hover:text-[#15297c] transition-colors">
                <span aria-hidden="true">←</span> Volver al blog
            </a>
            <div class="flex items-center gap-4 mt-12 md:mt-16 mb-6">
                <span class="w-10 h-[2px] shrink-0 bg-[#15297c]"></span>
                <span class="text-xs font-bold uppercase tracking-[0.15em] text-[#15297c]">{{ $articulo['categoria'] ?? 'Historias de obra' }}</span>
            </div>
            <h1 class="blr-titulo text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-neutral-900">{{ $articulo['titulo'] }}</h1>
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2 mt-7 md:mt-9 text-sm text-neutral-500">
                <span>{{ $articulo['autor'] ?? 'BLR & ARCOS Construcciones y Edificaciones' }}</span>
                @if(!empty($articulo['fecha']))
                    <span class="hidden sm:inline">•</span>
                    <time datetime="{{ $articulo['fecha'] }}">{{ \Carbon\Carbon::parse($articulo['fecha'])->locale('es')->translatedFormat('d \d\e F \d\e Y') }}</time>
                @endif
            </div>
        </header>

        {{-- FOTOGRAFÍA PRINCIPAL --}}
        <div class="max-w-6xl mx-auto px-6">
            <figure>
                @if($existePrincipal)
                    <img src="{{ asset(ltrim($imagenPrincipal, '/')) }}" alt="{{ $principalAlt }}" fetchpriority="high" class="w-full aspect-[16/9] object-cover">
                @else
                    <div class="w-full aspect-[16/9] bg-[#f3f4f6] border border-neutral-200 flex flex-col items-center justify-center gap-4">
                        <span class="text-[#15297c] text-xs font-bold tracking-[0.2em]">BLR & ARCOS</span>
                        <span class="text-neutral-400 text-xs md:text-sm text-center px-4">ESPACIO PARA FOTOGRAFÍA PRINCIPAL</span>
                    </div>
                @endif
                @if($principalPie)
                    <figcaption class="mt-4 text-sm text-neutral-500 leading-relaxed">{{ $principalPie }}</figcaption>
                @endif
            </figure>
        </div>

        {{-- CONTENIDO DEL ARTÍCULO --}}
        <div class="max-w-3xl mx-auto px-6 pt-12 md:pt-20 pb-20 md:pb-24">
            @foreach($contenidoLimpio as $bloque)
                @if(($bloque['tipo'] ?? '') === 'titulo')
                    <h2 class="blr-titulo-seccion text-2xl md:text-3xl font-bold mt-12 md:mt-14 mb-6 md:mb-7">{{ $bloque['texto'] ?? '' }}</h2>
                @elseif(($bloque['tipo'] ?? '') === 'subtitulo')
                    <h3 class="blr-subtitulo text-xl md:text-2xl font-semibold mt-9 md:mt-10 mb-5 text-[#15297c]">{{ $bloque['texto'] ?? '' }}</h3>
                @elseif(($bloque['tipo'] ?? '') === 'parrafo')
                    <p class="blr-parrafo text-base md:text-lg text-neutral-700 mb-7 text-justify">{{ $bloque['texto'] ?? '' }}</p>
                @elseif(($bloque['tipo'] ?? '') === 'cita')
                    <blockquote class="my-12 md:my-14 py-8 md:py-10 px-6 md:px-10 bg-[#f6f7f9] border-l-4 border-[#15297c]">
                        <p class="blr-titulo-seccion text-2xl md:text-4xl font-bold">{{ $bloque['texto'] ?? '' }}</p>
                        <span class="block mt-6 text-xs font-semibold uppercase tracking-[0.15em] text-[#15297c]">Nuestra historia</span>
                    </blockquote>
                @elseif(($bloque['tipo'] ?? '') === 'imagen')
                    @php
                        $numero = $bloque['numero'] ?? null;
                        $foto = $fotografias[$numero] ?? null;
                        $ruta = $foto['ruta'] ?? null;
                        $existeFoto = $ruta && is_file(public_path(ltrim($ruta, '/')));
                    @endphp
                    @if($foto)
                        <figure class="my-12 md:my-14">
                            @if($existeFoto)
                                <img src="{{ asset(ltrim($ruta, '/')) }}" alt="{{ $foto['alt'] ?? $articulo['titulo'] }}" loading="lazy" class="w-full aspect-[16/10] object-cover">
                            @else
                                <div class="w-full aspect-[16/10] bg-[#f3f4f6] border border-neutral-200 flex flex-col items-center justify-center gap-3">
                                    <span class="text-[#15297c] text-xs font-bold tracking-[0.15em]">BLR & ARCOS</span>
                                    <span class="text-neutral-400 text-xs md:text-sm text-center px-4">ESPACIO PARA FOTOGRAFÍA {{ $numero }}</span>
                                </div>
                            @endif
                            @if(!empty($foto['pie']))
                                <figcaption class="mt-4 text-sm text-neutral-500 leading-relaxed">{{ $foto['pie'] }}</figcaption>
                            @endif
                        </figure>
                    @endif
                @endif
            @endforeach

            {{-- CIERRE DEL ARTÍCULO: SE MUESTRA UNA SOLA VEZ --}}
            <div class="mt-16 md:mt-20 pt-10 md:pt-12 border-t border-neutral-200">
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-9 h-[2px] bg-[#15297c]"></span>
                    <span class="text-xs uppercase tracking-[0.15em] font-bold text-[#15297c]">BLR & ARCOS</span>
                </div>
                <h2 class="blr-titulo-seccion text-2xl md:text-4xl font-bold">Hablemos de tu próximo proyecto.</h2>
                <p class="blr-parrafo mt-6 text-neutral-600 text-base md:text-lg">
                    En BLR & ARCOS Construcciones y Edificaciones, nuestra experiencia en campo nos permite comprender los retos de cada obra.
                    Conoce nuestros servicios de construcción, obra civil e infraestructura.
                </p>
                <div class="flex flex-wrap gap-4 mt-9">
                    <a href="{{ url('/contacto') }}" class="inline-flex items-center justify-center gap-4 bg-[#15297c] text-white px-8 py-4 text-sm font-bold hover:bg-black transition-colors">
                        Contáctanos <span aria-hidden="true">↗</span>
                    </a>
                    <a href="{{ url('/servicios') }}" class="inline-flex items-center justify-center border border-neutral-300 px-8 py-4 text-sm font-bold hover:border-[#15297c] transition-colors">
                        Nuestros servicios
                    </a>
                </div>
            </div>
        </div>
    </article>

    {{-- ARTÍCULOS RELACIONADOS --}}
    @if(isset($relacionados) && $relacionados->isNotEmpty())
        <section class="bg-[#f6f7f9] py-16 md:py-20">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-9 h-[2px] bg-[#15297c]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.15em] text-[#15297c]">Sigue explorando</span>
                </div>
                <h2 class="blr-titulo-seccion text-2xl md:text-4xl font-bold mb-10 md:mb-12">Más historias de obra</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach($relacionados as $relacionado)
                        <a href="{{ route('blog.show', $relacionado['slug']) }}" class="group block min-w-0">
                            @if(!empty($relacionado['imagen']) && is_file(public_path(ltrim($relacionado['imagen'], '/'))))
                                <img src="{{ asset(ltrim($relacionado['imagen'], '/')) }}" alt="{{ $relacionado['titulo'] }}" loading="lazy" class="w-full aspect-[4/3] object-cover">
                            @else
                                <div class="aspect-[4/3] bg-neutral-200 flex items-center justify-center">
                                    <span class="text-neutral-500 text-sm">Fotografía pendiente</span>
                                </div>
                            @endif
                            <h3 class="blr-titulo-relacionado mt-5 text-xl font-bold group-hover:text-[#15297c] transition-colors">{{ $relacionado['titulo'] }}</h3>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</main>
@endsection
