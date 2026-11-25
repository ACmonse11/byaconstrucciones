@extends('layouts.app')

@section('title', 'Inicio | BLR & ARCOS')

@section('content')

<main class="overflow-hidden bg-black">

<section
    class="relative
           w-full
           overflow-hidden
           bg-black"
>

    <div class="relative w-full overflow-hidden bg-black">

        {{-- VIDEO HORIZONTAL · TABLET / DESKTOP --}}
        <div class="hidden sm:block relative w-full aspect-video">

            <iframe
                class="absolute
                       inset-0
                       w-full
                       h-full
                       border-0
                       pointer-events-none"
                src="https://www.youtube.com/embed/HGlVbUugwM8?autoplay=1&mute=1&loop=1&playlist=HGlVbUugwM8&controls=0&modestbranding=1&rel=0&playsinline=1"
                title="BLR & ARCOS - Construcción y obra civil"
                allow="autoplay; encrypted-media; picture-in-picture"
                allowfullscreen
            ></iframe>

        </div>


        {{-- VIDEO VERTICAL · MÓVIL --}}
        <div class="block sm:hidden relative w-full aspect-[9/16]">

            <iframe
                class="absolute
                       inset-0
                       w-full
                       h-full
                       border-0
                       pointer-events-none"
                src="https://www.youtube.com/embed/pdpLbTpEUF0?autoplay=1&mute=1&loop=1&playlist=pdpLbTpEUF0&controls=0&modestbranding=1&rel=0&playsinline=1"
                title="BLR & ARCOS - Construcción y obra civil"
                allow="autoplay; encrypted-media; picture-in-picture"
                allowfullscreen
            ></iframe>

        </div>


        {{-- CAPA OSCURA --}}
        <div
            class="absolute
                   inset-0
                   z-10
                   bg-black/40
                   pointer-events-none"
        ></div>


        {{-- DEGRADADO --}}
        <div
            class="absolute
                   inset-0
                   z-10
                   bg-gradient-to-b
                   from-black/10
                   via-transparent
                   to-black/55
                   pointer-events-none"
        ></div>


        {{-- RESPLANDOR AZUL --}}
        <div
            class="hero-glow
                   absolute
                   z-10
                   right-[-150px]
                   top-1/2
                   -translate-y-1/2
                   w-[550px]
                   h-[550px]
                   bg-[#15297C]/20
                   rounded-full
                   blur-[120px]
                   pointer-events-none"
        ></div>


        {{-- LÍNEA SUPERIOR AZUL --}}
        <div
            class="hero-top-blue
                   absolute
                   top-0
                   left-0
                   w-[23%]
                   h-2
                   md:h-3
                   bg-[#15297C]
                   z-20
                   pointer-events-none"
        ></div>


        {{-- LÍNEA SUPERIOR AMARILLA --}}
        <div
            class="hero-top-yellow
                   absolute
                   top-0
                   left-[23%]
                   w-5
                   md:w-8
                   h-2
                   md:h-3
                   bg-yellow-400
                   z-20
                   pointer-events-none"
        ></div>


        {{-- CONTENIDO CENTRAL --}}
        <div
            class="absolute
                   inset-0
                   z-30
                   flex
                   items-end
                   sm:items-center
                   justify-center
                   pb-12
                   sm:pb-0
                   px-4
                   sm:px-6
                   lg:px-10
                   pointer-events-none"
        >

            <div
                class="w-full
                       max-w-7xl
                       mx-auto
                       text-center"
            >

                <p
                    class="hidden
                           sm:block
                           mb-4
                           text-[9px]
                           md:text-[10px]
                           uppercase
                           tracking-[0.35em]
                           font-black
                           text-white/70"
                >
                </p>



<h1
    id="heroFixedText"
    class="text-white
           font-bold
           uppercase
           text-center
           leading-tight
           text-lg
           sm:text-xl
           md:text-3xl
           lg:text-4xl"
>
    <span class="block">
        CONSTRUIMOS GRANDES
        <span class="text-[#15297C]">OBRAS</span>
    </span>

    <span class="block">
        CON
        <span class="text-[#15297C]">INGENIERÍA</span>
        Y PRECISIÓN
    </span>

    <span class="block">
        RESPALDADAS POR
        <span class="text-[#15297C]">EXPERIENCIA</span>
    </span>
</h1>


                {{-- DETALLE AZUL + AMARILLO --}}
                <div
                    class="flex
                           items-center
                           justify-center
                           mt-6
                           gap-0"
                >

                    <span
                        class="block
                               w-14
                               sm:w-20
                               h-[2px]
                               bg-[#15297C]"
                    ></span>

                    <span
                        class="block
                               w-4
                               h-[2px]
                               bg-yellow-400"
                    ></span>

                </div>


                <div
                    class="mt-8
                           flex
                           flex-col
                           items-center
                           gap-3"
                >

                    <span
                        class="text-white/50
                               text-[8px]
                               uppercase
                               tracking-[0.25em]"
                    >
                    </span>

                </div>

            </div>

        </div>


        {{-- TEXTO LATERAL DESKTOP --}}
        <div
            class="hidden
                   lg:flex
                   absolute
                   z-30
                   right-8
                   xl:right-10
                   top-1/2
                   -translate-y-1/2
                   items-center
                   gap-4
                   pointer-events-none"
        >

            <span
                class="block
                       w-10
                       h-px
                       bg-white/30"
            ></span>

            <span
                class="text-white/50
                       text-[8px]
                       uppercase
                       tracking-[0.3em]
                       [writing-mode:vertical-rl]
                       rotate-180"
            >
                BLR & ARCOS · MÉXICO
            </span>

        </div>


        {{-- LÍNEA INFERIOR --}}
        <div
            class="absolute
                   bottom-0
                   left-0
                   z-30
                   w-full
                   h-[3px]
                   pointer-events-none"
        ></div>

    </div>

</section>

<section
    class="relative
           h-16
           sm:h-20
           md:h-24
           bg-black
           overflow-hidden"
>

    <div
        class="transition-blue
               absolute
               top-0
               left-0
               h-full
               w-[34%]
               bg-[#15297C]"
    ></div>

    <div
        class="absolute
               top-0
               left-[34%]
               right-0
               h-full
               bg-black"
    ></div>

    <div
        class="absolute
               bottom-0
               left-[34%]
               right-0
               h-px
               bg-white/20"
    ></div>

    <div
        class="transition-yellow
               absolute
               top-0
               left-[34%]
               w-3
               h-full
               bg-yellow-400"
    ></div>

</section>

<section
    id="servicios"
    class="relative
           bg-white
           py-14
           sm:py-16
           md:py-20
           lg:py-24
           overflow-hidden"
>

    <div
        class="absolute
               -right-24
               top-20
               w-60
               h-60
               border
               border-[#15297C]/[0.05]
               rotate-45
               pointer-events-none"
    ></div>

    <div
        class="relative
               z-10
               max-w-7xl
               mx-auto
               px-6
               lg:px-10"
    >

        <div
            class="grid
                   grid-cols-1
                   lg:grid-cols-[.6fr_1.4fr]
                   gap-8
                   lg:gap-16
                   mb-12
                   md:mb-16"
        >

            <div
            >

                <p
                    class="text-yellow-500
                           text-[9px]
                           uppercase
                           tracking-[0.35em]
                           font-black"
                >
                    01 / Servicios
                </p>

            </div>

            <div
            >

                <div
                    class="inicio-title-line
                           w-full
                           h-[3px]
                           bg-[#15297C]
                           mb-6"
                ></div>

                <h2
                    class="text-black
                           text-3xl
                           sm:text-4xl
                           md:text-5xl
                           lg:text-6xl
                           xl:text-7xl
                           font-black
                           uppercase
                           tracking-[-0.04em]
                           leading-[0.9]"
                >
                    Construcción

                    <span class="block text-[#15297C]">
                        y Obra Civil
                    </span>
                </h2>

                <p
                    class="mt-6
                           max-w-2xl
                           text-gray-600
                           text-sm
                           md:text-base
                           leading-7"
                >
                    En BLR & ARCOS desarrollamos proyectos de construcción, edificación y obra civil, integrando planeación,
                     ejecución y supervisión técnica.
                    Atendemos proyectos residenciales, comerciales,
                     industriales y de infraestructura en Cancún, Quintana Roo y distintos puntos de México,
                      con soluciones adaptadas a las necesidades y alcance de cada obra.
                </p>

            </div>

        </div>

        <div
            class="grid
                   grid-cols-1
                   md:grid-cols-3
                   border-t
                   border-black/15"
        >

            <article
                class="inicio-service
                       group
                       relative
                       overflow-hidden
                       py-8
                       md:px-7
                       md:border-r
                       border-black/15
                       transition-all
                       duration-500"
            >

                <div
                    class="absolute
                           inset-0
                           bg-[#15297C]
                           translate-y-full
                           transition-transform
                           duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative
                           z-10
                           block
                           text-[#15297C]
                           text-4xl
                           lg:text-5xl
                           font-light
                           leading-none
                           mb-8
                           transition-all
                           duration-500
                           group-hover:text-yellow-400
                           group-hover:-translate-y-1"
                >
                    01
                </span>

                <h3
                    class="relative
                           z-10
                           text-black
                           text-xl
                           lg:text-2xl
                           uppercase
                           font-black
                           tracking-tight
                           transition-colors
                           duration-500
                           group-hover:text-white"
                >
                    Edificaciones
                </h3>

                <p
                    class="relative
                           z-10
                           mt-4
                           text-gray-600
                           text-sm
                           leading-6
                           transition-colors
                           duration-500
                           group-hover:text-white/70"
                >
                    Ejecutamos proyectos de construcción
                     y edificación para desarrollos residenciales,
                      comerciales e industriales, coordinando cada etapa de obra con enfoque en calidad,
                       funcionalidad y cumplimiento técnico.
                </p>

                <a
                    href="{{ route('servicios') }}"
                    class="relative
                           z-10
                           inline-flex
                           items-center
                           gap-3
                           mt-7
                           text-black
                           text-[10px]
                           uppercase
                           tracking-[0.2em]
                           font-black
                           transition-colors
                           duration-300
                           group-hover:text-white"
                >
                    Conocer más

                    <span
                        class="text-yellow-500
                               transition-transform
                               duration-300
                               group-hover:translate-x-2"
                    >
                        →
                    </span>
                </a>

            </article>

            <article
                class="inicio-service
                       group
                       relative
                       overflow-hidden
                       py-8
                       md:px-7
                       md:border-r
                       border-black/15
                       transition-all
                       duration-500"
            >

                <div
                    class="absolute
                           inset-0
                           bg-[#15297C]
                           translate-y-full
                           transition-transform
                           duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative
                           z-10
                           block
                           text-[#15297C]
                           text-4xl
                           lg:text-5xl
                           font-light
                           leading-none
                           mb-8
                           transition-all
                           duration-500
                           group-hover:text-yellow-400
                           group-hover:-translate-y-1"
                >
                    02
                </span>

                <h3
                    class="relative
                           z-10
                           text-black
                           text-xl
                           lg:text-2xl
                           uppercase
                           font-black
                           tracking-tight
                           transition-colors
                           duration-500
                           group-hover:text-white"
                >
                    Puentes y estructuras
                </h3>

                <p
                    class="relative
                           z-10
                           mt-4
                           text-gray-600
                           text-sm
                           leading-6
                           transition-colors
                           duration-500
                           group-hover:text-white/70"
                >
                   Desarrollamos y ejecutamos estructuras para proyectos de construcción e infraestructura,
                    considerando los requerimientos técnicos, estructurales y operativos específicos de cada obra.
                </p>

                <a
                    href="{{ route('servicios') }}"
                    class="relative
                           z-10
                           inline-flex
                           items-center
                           gap-3
                           mt-7
                           text-black
                           text-[10px]
                           uppercase
                           tracking-[0.2em]
                           font-black
                           transition-colors
                           duration-300
                           group-hover:text-white"
                >
                    Conocer más

                    <span
                        class="text-yellow-500
                               transition-transform
                               duration-300
                               group-hover:translate-x-2"
                    >
                        →
                    </span>
                </a>

            </article>

            <article
                class="inicio-service
                       group
                       relative
                       overflow-hidden
                       py-8
                       md:px-7
                       transition-all
                       duration-500"
            >

                <div
                    class="absolute
                           inset-0
                           bg-[#15297C]
                           translate-y-full
                           transition-transform
                           duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative
                           z-10
                           block
                           text-[#15297C]
                           text-4xl
                           lg:text-5xl
                           font-light
                           leading-none
                           mb-8
                           transition-all
                           duration-500
                           group-hover:text-yellow-400
                           group-hover:-translate-y-1"
                >
                    03
                </span>

                <h3
                    class="relative
                           z-10
                           text-black
                           text-xl
                           lg:text-2xl
                           uppercase
                           font-black
                           tracking-tight
                           transition-colors
                           duration-500
                           group-hover:text-white"
                >
                    Obra civil
                </h3>

                <p
                    class="relative
                           z-10
                           mt-4
                           text-gray-600
                           text-sm
                           leading-6
                           transition-colors
                           duration-500
                           group-hover:text-white/70"
                >
                    Realizamos trabajos de obra civil, incluyendo cimentaciones, elementos estructurales,
                    terracerías y procesos complementarios para proyectos de diferentes escalas y necesidades.
                </p>

                <a
                    href="{{ route('servicios') }}"
                    class="relative
                           z-10
                           inline-flex
                           items-center
                           gap-3
                           mt-7
                           text-black
                           text-[10px]
                           uppercase
                           tracking-[0.2em]
                           font-black
                           transition-colors
                           duration-300
                           group-hover:text-white"
                >
                    Conocer más

                    <span
                        class="text-yellow-500
                               transition-transform
                               duration-300
                               group-hover:translate-x-2"
                    >
                        →
                    </span>
                </a>

            </article>

        </div>

    </div>

</section>

<section
    class="relative
           bg-black
           overflow-hidden"
>

    <div
        class="stats-glow
               absolute
               -left-44
               top-1/2
               -translate-y-1/2
               w-[420px]
               h-[420px]
               rounded-full
               bg-[#15297C]/15
               blur-[100px]"
    ></div>

    <div
        class="relative
               z-10
               max-w-7xl
               mx-auto
               px-6
               lg:px-10
               py-14
               md:py-20"
    >

        <div
            class="mb-8"
        >

            <p
                class="text-yellow-500
                       text-[9px]
                       uppercase
                       tracking-[0.35em]
                       font-black
                       mb-3"
            >
                02 / Ingeniería en Construcción
            </p>

            <h2
                class="text-white
                       text-3xl
                       md:text-4xl
                       lg:text-5xl
                       font-light
                       uppercase
                       tracking-tight"
            >
                Ingeniería,

                <span class="text-[#15297C]">
                    Construcción y Experiencia
                </span>
            </h2>

        </div>

        <div
            class="grid
                   grid-cols-2
                   lg:grid-cols-4
                   border-t
                   border-[#15297C]"
        >

            <div
                class="stat-box
                       group
                       py-7
                       pr-4
                       border-r
                       border-[#15297C]
                       transition-all
                       duration-500
                       hover:bg-[#15297C]/10"
            >

                <div
                    class="text-white
                           text-4xl
                           sm:text-5xl
                           lg:text-6xl
                           font-light
                           transition-transform
                           duration-500
                           group-hover:-translate-y-1"
                >
                    +<span
                        class="stat-number"
                        data-target="15"
                    >0</span>
                </div>

                <p
                    class="mt-3
                           text-gray-500
                           text-[8px]
                           sm:text-[9px]
                           uppercase
                           tracking-[0.16em]"
                >
                    Años de experiencia
                </p>

            </div>

            <div
                class="stat-box
                       group
                       py-7
                       px-4
                       lg:px-6
                       border-r
                       border-[#15297C]
                       transition-all
                       duration-500
                       hover:bg-[#15297C]/10"
            >

                <div
                    class="text-[#15297C]
                           text-4xl
                           sm:text-5xl
                           lg:text-6xl
                           font-light
                           transition-transform
                           duration-500
                           group-hover:-translate-y-1"
                >
                    <span
                        class="stat-number"
                        data-target="360"
                    >0</span>°
                </div>

                <p
                    class="mt-3
                           text-gray-500
                           text-[8px]
                           sm:text-[9px]
                           uppercase
                           tracking-[0.16em]"
                >
                    Supervisión integral
                </p>

            </div>

            <div
                class="stat-box
                       group
                       py-7
                       px-4
                       lg:px-6
                       border-r
                       border-[#15297C]
                       transition-all
                       duration-500
                       hover:bg-[#15297C]/10"
            >

                <div
                    class="text-white
                           text-4xl
                           sm:text-5xl
                           lg:text-6xl
                           font-light
                           transition-transform
                           duration-500
                           group-hover:-translate-y-1"
                >
                    <span
                        class="stat-number"
                        data-target="100"
                    >0</span>%
                </div>

                <p
                    class="mt-3
                           text-gray-500
                           text-[8px]
                           sm:text-[9px]
                           uppercase
                           tracking-[0.16em]"
                >
                    Enfoque técnico
                </p>

            </div>

            <div
                class="stat-box
                       group
                       py-7
                       pl-4
                       lg:pl-6
                       transition-all
                       duration-500
                       hover:bg-[#15297C]/10"
            >

                <div
                    class="text-[#15297C]
                           text-4xl
                           sm:text-5xl
                           lg:text-6xl
                           font-light
                           transition-transform
                           duration-500
                           group-hover:-translate-y-1"
                >
                    MX
                </div>

                <p
                    class="mt-3
                           text-gray-500
                           text-[8px]
                           sm:text-[9px]
                           uppercase
                           tracking-[0.16em]"
                >
                    Cobertura nacional
                </p>

            </div>

        </div>

    </div>

</section>

<section
    class="relative
           bg-white
           overflow-hidden"
>

    <div class="relative h-14 md:h-20">

        <div
            class="absolute
                   inset-y-0
                   left-0
                   w-[34%]
                   bg-[#15297C]"
        ></div>

        <div
            class="absolute
                   inset-y-0
                   left-[34%]
                   right-0
                   bg-black"
        ></div>

    </div>

    <div
        class="max-w-7xl
               mx-auto
               px-6
               lg:px-10
               py-14
               md:py-20"
    >

        <div
            class="grid
                   grid-cols-1
                   md:grid-cols-2
                   gap-12
                   md:gap-16
                   lg:gap-20"
        >

            <article
                class="inicio-purpose
                       group
                       relative
                       overflow-hidden
                       p-6
                       -mx-6
                       transition-all
                       duration-700
                       hover:bg-[#f6f6f6]"
            >

                <span
                    class="absolute
                           -right-5
                           -top-14
                           text-[180px]
                           font-black
                           leading-none
                           text-[#15297C]/[0.03]
                           transition-all
                           duration-700
                           group-hover:text-[#15297C]/[0.07]
                           group-hover:-translate-y-2"
                >
                    M
                </span>

                <div
                    class="relative
                           w-full
                           h-[3px]
                           bg-[#15297C]
                           mb-6"
                ></div>

                <p
                    class="relative
                           text-yellow-500
                           text-[9px]
                           uppercase
                           tracking-[0.35em]
                           font-black
                           mb-4"
                >
                    03 / Misión
                </p>

                <h2
                    class="relative
                           text-[#d7d7d7]
                           text-3xl
                           md:text-4xl
                           lg:text-5xl
                           font-black
                           uppercase
                           leading-[0.92]
                           tracking-tight
                           mb-6
                           transition-colors
                           duration-500
                           group-hover:text-[#15297C]"
                >
                    Construcción
                    <br>
                    especializada
                </h2>

                <p
                    class="relative
                           text-black
                           text-sm
                           leading-7"
                >
                    En BLR & ARCOS ejecutamos infraestructura, obra civil y
                    construcción especializada en todo México. Gestionamos
                    sistemas de pilotaje, cimentaciones, superestructuras,
                    edificios y puentes mediante coordinación de frentes,
                    control técnico y supervisión.
                </p>

            </article>

            <article
                class="inicio-purpose
                       group
                       relative
                       overflow-hidden
                       p-6
                       -mx-6
                       transition-all
                       duration-700
                       hover:bg-[#f6f6f6]"
            >

                <span
                    class="absolute
                           -right-5
                           -top-14
                           text-[180px]
                           font-black
                           leading-none
                           text-[#15297C]/[0.03]
                           transition-all
                           duration-700
                           group-hover:text-[#15297C]/[0.07]
                           group-hover:-translate-y-2"
                >
                    V
                </span>

                <div
                    class="relative
                           w-full
                           h-[3px]
                           bg-[#15297C]
                           mb-6"
                ></div>

                <p
                    class="relative
                           text-yellow-500
                           text-[9px]
                           uppercase
                           tracking-[0.35em]
                           font-black
                           mb-4"
                >
                    04 / Visión
                </p>

                <h2
                    class="relative
                           text-[#d7d7d7]
                           text-3xl
                           md:text-4xl
                           lg:text-5xl
                           font-black
                           uppercase
                           leading-[0.92]
                           tracking-tight
                           mb-6
                           transition-colors
                           duration-500
                           group-hover:text-[#15297C]"
                >
                    Proyección
                    <br>
                    nacional
                </h2>

                <p
                    class="relative
                           text-black
                           text-sm
                           leading-7"
                >
                    Consolidarnos como referente nacional en ingeniería y
                    construcción de infraestructura, cimentaciones,
                    estructuras, edificios y puentes de alta complejidad,
                    proyectando la expansión internacional de BLR & ARCOS.
                </p>

            </article>

        </div>

    </div>

</section>

<section
    id="valores"
    class="relative
           bg-black
           py-14
           md:py-20
           overflow-hidden"
>

    <div
        class="absolute
               right-[-130px]
               top-1/2
               -translate-y-1/2
               w-80
               h-80
               border
               border-[#15297C]/15
               rotate-45"
    ></div>

    <div
        class="relative
               z-10
               max-w-7xl
               mx-auto
               px-6
               lg:px-10"
    >

        <p
            class="text-yellow-500
                   text-[9px]
                   uppercase
                   tracking-[0.35em]
                   font-black
                   mb-3"
        >
            05 / Principios
        </p>

        <h2
            class="text-white
                   text-3xl
                   sm:text-4xl
                   lg:text-5xl
                   font-light
                   uppercase
                   tracking-tight
                   mb-8"
        >
            Valores corporativos ARCOS
        </h2>

        <div
            class="grid
                   grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-5
                   border-t
                   border-[#15297C]"
        >

            <article
                class="home-value
                       group
                       relative
                       overflow-hidden
                       py-7
                       lg:px-5
                       lg:border-r
                       border-[#15297C]"
            >

                <div
                    class="absolute
                           inset-0
                           bg-[#15297C]
                           translate-y-full
                           transition-transform
                           duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative
                           z-10
                           block
                           text-[#15297C]
                           text-4xl
                           font-light
                           leading-none
                           mb-3
                           transition-all
                           duration-500
                           group-hover:text-yellow-400
                           group-hover:scale-110
                           origin-left"
                >
                    A
                </span>

                <h3
                    class="relative
                           z-10
                           text-white
                           text-[9px]
                           font-black
                           uppercase"
                >
                    Alta calidad
                </h3>

                <p
                    class="relative
                           z-10
                           mt-4
                           text-gray-500
                           text-xs
                           leading-5
                           transition-colors
                           duration-500
                           group-hover:text-white/70"
                >
                    Ingeniería, inspección y control de calidad aplicados
                    a materiales y procedimientos constructivos.
                </p>

            </article>

            <article
                class="home-value
                       group
                       relative
                       overflow-hidden
                       py-7
                       lg:px-5
                       lg:border-r
                       border-[#15297C]"
            >

                <div
                    class="absolute inset-0
                           bg-[#15297C]
                           translate-y-full
                           transition-transform duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative z-10
                           block text-[#15297C]
                           text-4xl font-light
                           leading-none mb-3
                           transition-all duration-500
                           group-hover:text-yellow-400
                           group-hover:scale-110
                           origin-left"
                >
                    R
                </span>

                <h3
                    class="relative z-10
                           text-white text-[9px]
                           font-black uppercase"
                >
                    Responsabilidad
                </h3>

                <p
                    class="relative z-10
                           mt-4 text-gray-500
                           text-xs leading-5
                           transition-colors duration-500
                           group-hover:text-white/70"
                >
                    Gestión ética, trazabilidad técnica y respeto por
                    las personas, comunidades y entorno.
                </p>

            </article>

            <article
                class="home-value
                       group
                       relative
                       overflow-hidden
                       py-7 lg:px-5
                       lg:border-r border-[#15297C]"
            >

                <div
                    class="absolute inset-0
                           bg-[#15297C]
                           translate-y-full
                           transition-transform duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative z-10
                           block text-[#15297C]
                           text-4xl font-light
                           leading-none mb-3
                           transition-all duration-500
                           group-hover:text-yellow-400
                           group-hover:scale-110
                           origin-left"
                >
                    C
                </span>

                <h3
                    class="relative z-10
                           text-white text-[9px]
                           font-black uppercase"
                >
                    Compromiso
                </h3>

                <p
                    class="relative z-10
                           mt-4 text-gray-500
                           text-xs leading-5
                           transition-colors duration-500
                           group-hover:text-white/70"
                >
                    Continuidad operativa, coordinación de especialidades
                    y cumplimiento de alcances.
                </p>

            </article>

            <article
                class="home-value
                       group
                       relative
                       overflow-hidden
                       py-7 lg:px-5
                       lg:border-r border-[#15297C]"
            >

                <div
                    class="absolute inset-0
                           bg-[#15297C]
                           translate-y-full
                           transition-transform duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative z-10
                           block text-[#15297C]
                           text-4xl font-light
                           leading-none mb-3
                           transition-all duration-500
                           group-hover:text-yellow-400
                           group-hover:scale-110
                           origin-left"
                >
                    O
                </span>

                <h3
                    class="relative z-10
                           text-white text-[9px]
                           font-black uppercase"
                >
                    Orden
                </h3>

                <p
                    class="relative z-10
                           mt-4 text-gray-500
                           text-xs leading-5
                           transition-colors duration-500
                           group-hover:text-white/70"
                >
                    Planeación de frentes, recursos y secuencias mediante
                    control técnico.
                </p>

            </article>

            <article
                class="home-value
                       group
                       relative
                       overflow-hidden
                       py-7
                       lg:px-5"
            >

                <div
                    class="absolute inset-0
                           bg-[#15297C]
                           translate-y-full
                           transition-transform duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative z-10
                           block text-[#15297C]
                           text-4xl font-light
                           leading-none mb-3
                           transition-all duration-500
                           group-hover:text-yellow-400
                           group-hover:scale-110
                           origin-left"
                >
                    S
                </span>

                <h3
                    class="relative z-10
                           text-white text-[9px]
                           font-black uppercase"
                >
                    Seguridad
                </h3>

                <p
                    class="relative z-10
                           mt-4 text-gray-500
                           text-xs leading-5
                           transition-colors duration-500
                           group-hover:text-white/70"
                >
                    Prevención de riesgos y control operativo durante
                    cada etapa de ejecución.
                </p>

            </article>

        </div>

    </div>

</section>

<section
    class="relative
           bg-white
           overflow-hidden"
>

    <div
        class="max-w-7xl
               mx-auto
               px-6
               lg:px-10
               py-14
               md:py-20"
    >

        <div
            class="grid
                   grid-cols-1
                   lg:grid-cols-[.7fr_1.3fr]
                   gap-8
                   lg:gap-16
                   mb-12"
        >

            <div
            >

                <p
                    class="text-yellow-500
                           text-[9px]
                           uppercase
                           tracking-[0.35em]
                           font-black"
                >
                    06 / Especialidades
                </p>

            </div>

            <div
            >

                <div
                    class="inicio-title-line
                           w-full
                           h-[3px]
                           bg-[#15297C]
                           mb-6"
                ></div>

                <h2
                    class="text-black
                           text-3xl
                           sm:text-4xl
                           lg:text-5xl
                           xl:text-6xl
                           uppercase
                           font-black
                           leading-[0.9]"
                >
                    Soluciones de construcción

                    <span class="block text-[#15297C]">
                        y obra civil
                    </span>
                </h2>

            </div>

        </div>

        <div
            class="grid
                   grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-4
                   border-t
                   border-black/15"
        >

            <article
                class="specialty
                       group
                       relative
                       overflow-hidden
                       py-8
                       lg:px-5
                       lg:border-r
                       border-black/15
                       transition-all
                       duration-500
                       hover:bg-[#f5f5f5]"
            >

                <div
                    class="absolute
                           top-0
                           left-0
                           w-0
                           h-[3px]
                           bg-[#15297C]
                           transition-all
                           duration-500
                           group-hover:w-full"
                ></div>

                <span
                    class="text-[#15297C]
                           text-[10px]
                           font-black
                           tracking-[0.2em]"
                >
                    01
                </span>

                <h3
                    class="mt-8
                           text-black
                           text-xl
                           uppercase
                           font-black
                           transition-all
                           duration-500
                           group-hover:translate-x-2"
                >
                    Cimentaciones
                </h3>

                <p
                    class="mt-4
                           text-gray-600
                           text-sm
                           leading-6"
                >
                    Ejecución de cimentaciones para obra civil y edificación, adaptadas a los requerimientos estructurales y caracteristicas de cada proyecto.
                </p>

            </article>

            <article
                class="specialty
                       group
                       relative
                       overflow-hidden
                       py-8
                       lg:px-5
                       lg:border-r
                       border-black/15
                       transition-all duration-500
                       hover:bg-[#f5f5f5]"
            >

                <div
                    class="absolute top-0 left-0
                           w-0 h-[3px]
                           bg-[#15297C]
                           transition-all duration-500
                           group-hover:w-full"
                ></div>

                <span
                    class="text-[#15297C]
                           text-[10px]
                           font-black
                           tracking-[0.2em]"
                >
                    02
                </span>

                <h3
                    class="mt-8 text-black
                           text-xl uppercase font-black
                           transition-all duration-500
                           group-hover:translate-x-2"
                >
                    Pilotes
                </h3>

                <p
                    class="mt-4 text-gray-600
                           text-sm leading-6"
                >
                    Ejecución de cimentaciones para obra civil y edificación, adaptadas a los requerimientos estructurales y características de cada proyecto.
                </p>

            </article>

            <article
                class="specialty
                       group
                       relative
                       overflow-hidden
                       py-8
                       lg:px-5
                       lg:border-r
                       border-black/15
                       transition-all duration-500
                       hover:bg-[#f5f5f5]"
            >

                <div
                    class="absolute top-0 left-0
                           w-0 h-[3px]
                           bg-[#15297C]
                           transition-all duration-500
                           group-hover:w-full"
                ></div>

                <span
                    class="text-[#15297C]
                           text-[10px]
                           font-black
                           tracking-[0.2em]"
                >
                    03
                </span>

                <h3
                    class="mt-8 text-black
                           text-xl uppercase font-black
                           transition-all duration-500
                           group-hover:translate-x-2"
                >
                    Estructuras
                </h3>

                <p
                    class="mt-4 text-gray-600
                           text-sm leading-6"
                >
                    Ejecución de estructura metálicas y elementos estructurales para proyectos de construcción que requieren estabilidad y transferencia de cargas al terreno.
                </p>

            </article>

            <article
                class="specialty
                       group
                       relative
                       overflow-hidden
                       py-8
                       lg:px-5
                       transition-all duration-500
                       hover:bg-[#f5f5f5]"
            >

                <div
                    class="absolute top-0 left-0
                           w-0 h-[3px]
                           bg-[#15297C]
                           transition-all duration-500
                           group-hover:w-full"
                ></div>

                <span
                    class="text-[#15297C]
                           text-[10px]
                           font-black
                           tracking-[0.2em]"
                >
                    04
                </span>

                <h3
                    class="mt-8 text-black
                           text-xl uppercase font-black
                           transition-all duration-500
                           group-hover:translate-x-2"
                >
                    Supervisión de obra
                </h3>

                <p
                    class="mt-4 text-gray-600
                           text-sm leading-6"
                >
                    Seguimiento técnico de proyectos de construcción, verificando procesos, avances, calidad y cumplimiento durante las diferentes etapas de ejecución.
                </p>

            </article>

        </div>

    </div>

</section>

{{-- =========================================================
     07 / CUMPLIMIENTO FISCAL Y NORMATIVO
========================================================= --}}
<section
    id="cumplimiento"
    class="relative bg-[#f7f7f7] overflow-hidden"
>
    <div class="absolute top-0 left-0 w-full h-[3px] flex">
        <div class="w-[18%] bg-[#15297C]"></div>
        <div class="w-[2%] bg-yellow-400"></div>
        <div class="flex-1 bg-black/[0.05]"></div>
    </div>

    <div class="absolute -right-24 top-1/2 -translate-y-1/2 w-64 h-64 border border-[#15297C]/[0.04] rotate-45 pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-10 py-14 md:py-16 lg:py-20">
        <div class="cumplimiento-heading text-center mb-12 md:mb-14">
            <p class="text-yellow-500 text-[10px] sm:text-[11px] uppercase tracking-[0.40em] font-black">
                Cumplimiento fiscal y normativo
            </p>

            <div class="flex justify-center items-center mt-5">
                <span class="block w-14 h-[2px] bg-[#15297C]"></span>
                <span class="block w-4 h-[2px] bg-yellow-400"></span>
            </div>
        </div>

        <div class="cumplimiento-logos grid grid-cols-2 md:grid-cols-4 items-center gap-x-8 gap-y-12 md:gap-10 lg:gap-16">
            <div class="cumplimiento-logo group flex items-center justify-center min-h-[90px]">
                <img
                    src="{{ asset('images/fiscal/IMSS.webp') }}"
                    alt="IMSS"
                    loading="lazy"
                    class="w-auto max-w-[150px] h-12 sm:h-14 md:h-16 object-contain grayscale opacity-40 transition-all duration-500 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105"
                >
            </div>

            <div class="cumplimiento-logo group flex items-center justify-center min-h-[90px]">
                <img
                    src="{{ asset('images/fiscal/LOGO REPSE.webp') }}"
                    alt="REPSE"
                    loading="lazy"
                    class="w-auto max-w-[170px] h-12 sm:h-14 md:h-16 object-contain grayscale opacity-40 transition-all duration-500 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105"
                >
            </div>

            <div class="cumplimiento-logo group flex items-center justify-center min-h-[90px]">
                <img
                    src="{{ asset('images/fiscal/SEMARNAT.webp') }}"
                    alt="SEMARNAT"
                    loading="lazy"
                    class="w-auto max-w-[190px] h-12 sm:h-14 md:h-16 object-contain grayscale opacity-40 transition-all duration-500 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105"
                >
            </div>

            <div class="cumplimiento-logo group flex items-center justify-center min-h-[90px]">
                <img
                    src="{{ asset('images/fiscal/STPS LOGO.webp') }}"
                    alt="STPS"
                    loading="lazy"
                    class="w-auto max-w-[190px] h-12 sm:h-14 md:h-16 object-contain grayscale opacity-40 transition-all duration-500 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105"
                >
            </div>
        </div>
    </div>
</section>


<section
    class="relative
           bg-black
           overflow-hidden"
>

    <div
        class="cta-glow
               absolute
               -right-40
               top-1/2
               -translate-y-1/2
               w-[500px]
               h-[500px]
               rounded-full
               bg-[#15297C]/15
               blur-[120px]"
    ></div>

    <div
        class="cta-top-blue
               absolute
               top-0
               right-0
               w-[25%]
               h-3
               bg-[#15297C]"
    ></div>

    <div
        class="cta-top-yellow
               absolute
               top-0
               right-[25%]
               w-5
               h-3
               bg-yellow-400"
    ></div>

    <div
        class="relative
               z-10
               max-w-7xl
               mx-auto
               px-6
               lg:px-10
               py-16
               md:py-24"
    >

        <div
            class="grid
                   grid-cols-1
                   lg:grid-cols-[1.3fr_.7fr]
                   gap-10
                   items-end"
        >

            <div
            >

                <p
                    class="text-yellow-500
                           text-[9px]
                           uppercase
                           tracking-[0.35em]
                           font-black
                           mb-5"
                >
                    08 / INGENIERÍA · CONSTRUCCIÓN · INFRAESTRUCTURA
                </p>

                <h2
                    class="text-white
                           text-4xl
                           sm:text-5xl
                           lg:text-6xl
                           xl:text-7xl
                           font-black
                           uppercase
                           leading-[0.9]
                           tracking-[-0.04em]"
                >
                    Construimos

                    <span class="block text-[#15297C]">
                        proyectos que
                    </span>

                    trascienden
                </h2>

            </div>

            <div
            >

                <a
                    href="{{ route('contacto') }}"
                    class="group
                           relative
                           overflow-hidden
                           inline-flex
                           w-full
                           sm:w-auto
                           items-center
                           justify-between
                           gap-10
                           border
                           border-white
                           text-white
                           px-6
                           py-5
                           text-[10px]
                           uppercase
                           tracking-[0.2em]
                           font-black
                           transition-all
                           duration-500
                           hover:-translate-y-1"
                >

                    <span
                        class="absolute
                               inset-0
                               bg-[#15297C]
                               translate-y-full
                               transition-transform
                               duration-500
                               group-hover:translate-y-0"
                    ></span>

                    <span class="relative z-10">
                        Cotiza tu proyecto
                    </span>

                    <span
                        class="relative
                               z-10
                               text-yellow-400
                               text-base
                               transition-transform
                               duration-500
                               group-hover:translate-x-2"
                    >
                        →
                    </span>

                </a>

            </div>

        </div>

        <div
            class="relative
                   mt-16
                   pt-6
                   border-t
                   border-yellow-500
                   flex
                   flex-col
                   sm:flex-row
                   gap-4
                   sm:justify-between
                   sm:items-center"
        >

            <p
                class="text-gray-500
                       text-[8px]
                       uppercase
                       tracking-[0.2em]"
            >
                BLR & ARCOS · CANCÚN · MÉXICO
            </p>

            <p
                class="text-[#15297C]
                       text-[8px]
                       uppercase
                       tracking-[0.2em]"
            >
                Ingeniería e infraestructura
            </p>

            <a
                href="#servicios"
                aria-label="Volver al contenido"
                class="group
                       hidden
                       sm:flex
                       absolute
                       left-1/2
                       top-0
                       -translate-x-1/2
                       -translate-y-1/2
                       w-10
                       h-10
                       rounded-full
                       border
                       border-white/20
                       bg-[#101010]
                       items-center
                       justify-center
                       text-white
                       hover:bg-[#15297C]
                       hover:-translate-y-[60%]
                       transition-all
                       duration-500"
            >
                ↑
            </a>

        </div>

    </div>

</section>

</main>

<style>

/* ============================================================
   TEXTO
============================================================ */

/* ==========================================
   JUSTIFICACIÓN DE TEXTOS RESPONSIVA
========================================== */

#servicios .max-w-2xl,
.inicio-service p,
.inicio-purpose > p:last-of-type,
.home-value p,
.specialty p,
.cta-description {
    text-align: justify;
    text-justify: inter-word;
    hyphens: auto;
}

/* MÓVILES */
@media (max-width: 767px) {

    #servicios .max-w-2xl,
    .inicio-service p,
    .inicio-purpose > p:last-of-type,
    .home-value p,
    .specialty p,
    .cta-description {
        text-align: justify;
        text-justify: inter-word;
        hyphens: auto;
        -webkit-hyphens: auto;
    }

}


/* ============================================================
   HERO · VIDEO
============================================================ */

.hero-video {
    display: block;
    width: 100%;
    height: auto;

    transform: translateZ(0);
    backface-visibility: hidden;
}


/* ============================================================
   HERO · FRASES ANIMADAS
============================================================ */

#heroChangingText {
    min-height: 1em;

    display: inline-block;

    opacity: 1;

    transform:
        translate3d(0, 0, 0)
        scale(1);

    filter: blur(0);

    text-shadow:
        0 12px 35px rgba(0,0,0,.45);

    transition:
        opacity .70s ease,
        transform .85s cubic-bezier(.22, 1, .36, 1),
        filter .70s ease;

    will-change:
        opacity,
        transform,
        filter;
}


/* FRASE QUE SALE */

#heroChangingText.hero-text-exit {
    opacity: 0;

    transform:
        translate3d(0, -14px, 0)
        scale(.985);

    filter: blur(3px);
}


/* NUEVA FRASE ANTES DE ENTRAR */

#heroChangingText.hero-text-enter {
    opacity: 0;

    transform:
        translate3d(0, 16px, 0)
        scale(.985);

    filter: blur(3px);

    transition: none;
}


/* Compatibilidad por si todavía existe hero-text-hide */

#heroChangingText.hero-text-hide {
    opacity: 0;

    transform:
        translate3d(0, -14px, 0)
        scale(.985);

    filter: blur(3px);
}


/* ============================================================
   MOVIMIENTO DECORATIVO LIGERO
============================================================ */

@keyframes pulseScale {

    0%,
    100% {
        opacity: .4;
        transform: translate3d(0,-50%,0) scale(1);
    }

    50% {
        opacity: .62;
        transform: translate3d(0,-50%,0) scale(1.06);
    }
}


@keyframes linePulse {

    0%,
    100% {
        transform: scaleX(1);
    }

    50% {
        transform: scaleX(.86);
    }
}


@keyframes scrollPulse {

    0%,
    100% {
        transform: scaleY(.3);
        opacity: .35;
    }

    50% {
        transform: scaleY(1);
        opacity: 1;
    }
}


.hero-glow,
.stats-glow,
.cta-glow {
    animation: pulseScale 10s ease-in-out infinite;
}


.hero-top-blue,
.transition-blue,
.inicio-title-line,
.cta-top-blue {
    transform-origin: left center;
    animation: linePulse 8s ease-in-out infinite;
}


.hero-scroll-line {
    transform-origin: top center;
    animation: scrollPulse 2.4s ease-in-out infinite;
}


/* ============================================================
   REVEAL PROFESIONAL AL BAJAR Y SUBIR
============================================================ */
/* ============================================================
   SISTEMA DE ANIMACIONES RESPONSIVE · BLR ARCOS
   Móvil → Tablet → Laptop → Desktop
============================================================ */

.scroll-reveal {
    --reveal-x: 0px;
    --reveal-y: 32px;
    --reveal-scale: .985;
    --reveal-blur: 0px;
    --reveal-rotate: 0deg;

    opacity: 0;

    transform:
        translate3d(
            var(--reveal-x),
            var(--reveal-y),
            0
        )
        scale(var(--reveal-scale))
        rotate(var(--reveal-rotate));

    filter: blur(var(--reveal-blur));

    transition:
        opacity .75s cubic-bezier(.22,.61,.36,1),
        transform .90s cubic-bezier(.16,1,.3,1),
        filter .75s ease;

    transition-delay: var(--reveal-delay,0ms);

    will-change:
        transform,
        opacity,
        filter;
}


/* ============================================================
   TIPOS DE ENTRADA
============================================================ */

/* Desde izquierda */

.scroll-reveal.reveal-left {
    --reveal-x: -45px;
    --reveal-y: 0px;
}


/* Desde derecha */

.scroll-reveal.reveal-right {
    --reveal-x: 45px;
    --reveal-y: 0px;
}


/* Desde abajo */

.scroll-reveal.reveal-up {
    --reveal-x: 0px;
    --reveal-y: 38px;
}


/* Zoom elegante */

.scroll-reveal.reveal-scale {
    --reveal-x: 0px;
    --reveal-y: 22px;
    --reveal-scale: .96;
}


/* Efecto muy sutil */

.scroll-reveal.reveal-soft {
    --reveal-y: 18px;
    --reveal-scale: .99;
}


/* ============================================================
   ELEMENTO VISIBLE
============================================================ */

.scroll-reveal.is-visible {
    opacity: 1;

    transform:
        translate3d(0,0,0)
        scale(1)
        rotate(0deg);

    filter: blur(0);
}


/* ============================================================
   CUANDO EL USUARIO REGRESA HACIA ARRIBA
============================================================ */

body.scroll-up
.scroll-reveal:not(.is-visible) {
    --reveal-y: -26px;
}


body.scroll-up
.scroll-reveal.reveal-left:not(.is-visible) {
    --reveal-x: -32px;
    --reveal-y: 0px;
}


body.scroll-up
.scroll-reveal.reveal-right:not(.is-visible) {
    --reveal-x: 32px;
    --reveal-y: 0px;
}


/* ============================================================
   MÓVIL · 320PX → 767PX
   Movimiento corto para evitar brincos
============================================================ */

@media (max-width: 767px) {

    .scroll-reveal {
        --reveal-x: 0px;
        --reveal-y: 24px;
        --reveal-scale: .985;
        --reveal-blur: 1.5px;

        transition:
            opacity .65s ease,
            transform .78s cubic-bezier(.16,1,.3,1),
            filter .65s ease;
    }


    /*
       En móvil evitamos entradas laterales largas.
       Todo entra principalmente desde abajo.
    */

    .scroll-reveal.reveal-left,
    .scroll-reveal.reveal-right {
        --reveal-x: 0px;
        --reveal-y: 24px;
    }


    .scroll-reveal.reveal-scale {
        --reveal-y: 18px;
        --reveal-scale: .97;
    }


    .scroll-reveal.reveal-soft {
        --reveal-y: 14px;
        --reveal-scale: .99;
    }


    /* Servicios */

    .inicio-service.scroll-reveal {
        --reveal-y: 24px;
        --reveal-scale: .985;
    }


    /* Estadísticas */

    .stat-box.scroll-reveal {
        --reveal-y: 18px;
        --reveal-scale: .95;
    }


    /* Misión / Visión */

    .inicio-purpose.scroll-reveal {
        --reveal-y: 26px;
        --reveal-scale: .99;
    }


    /* Valores */

    .home-value.scroll-reveal {
        --reveal-y: 20px;
        --reveal-scale: .975;
    }


    /* Especialidades */

    .specialty.scroll-reveal {
        --reveal-y: 22px;
        --reveal-scale: .98;
    }


    /* Logos */

    .cumplimiento-logo.scroll-reveal {
        --reveal-y: 15px;
        --reveal-scale: .94;
    }


    /*
       Evitamos movimientos decorativos pesados
       en teléfonos.
    */

    .hero-glow,
    .stats-glow,
    .cta-glow {
        animation: none;
    }
}


/* ============================================================
   TABLET · 768PX → 1023PX
============================================================ */

@media (min-width: 768px) and (max-width: 1023px) {

    .scroll-reveal {
        --reveal-y: 30px;

        transition:
            opacity .72s ease,
            transform .85s cubic-bezier(.16,1,.3,1),
            filter .72s ease;
    }


    .scroll-reveal.reveal-left {
        --reveal-x: -32px;
        --reveal-y: 0px;
    }


    .scroll-reveal.reveal-right {
        --reveal-x: 32px;
        --reveal-y: 0px;
    }


    .scroll-reveal.reveal-scale {
        --reveal-y: 20px;
        --reveal-scale: .965;
    }


    .stat-box.scroll-reveal {
        --reveal-scale: .96;
    }


    .cumplimiento-logo.scroll-reveal {
        --reveal-y: 18px;
        --reveal-scale: .95;
    }
}


/* ============================================================
   LAPTOP · 1024PX → 1439PX
============================================================ */

@media (min-width: 1024px) and (max-width: 1439px) {

    .scroll-reveal {
        --reveal-y: 34px;
    }


    .scroll-reveal.reveal-left {
        --reveal-x: -42px;
        --reveal-y: 0px;
    }


    .scroll-reveal.reveal-right {
        --reveal-x: 42px;
        --reveal-y: 0px;
    }


    .scroll-reveal.reveal-scale {
        --reveal-y: 20px;
        --reveal-scale: .96;
    }
}


/* ============================================================
   DESKTOP · 1440PX+
============================================================ */

@media (min-width: 1440px) {

    .scroll-reveal {
        --reveal-y: 38px;

        transition:
            opacity .78s cubic-bezier(.22,.61,.36,1),
            transform .95s cubic-bezier(.16,1,.3,1),
            filter .75s ease;
    }


    .scroll-reveal.reveal-left {
        --reveal-x: -52px;
        --reveal-y: 0px;
    }


    .scroll-reveal.reveal-right {
        --reveal-x: 52px;
        --reveal-y: 0px;
    }


    .scroll-reveal.reveal-scale {
        --reveal-y: 24px;
        --reveal-scale: .955;
    }
}


/* ============================================================
   PANTALLAS TÁCTILES
============================================================ */

@media (hover: none) and (pointer: coarse) {

    .scroll-reveal {
        transition-duration: .72s;
    }

}


/* ============================================================
   REDUCIR MOVIMIENTO
============================================================ */

@media (prefers-reduced-motion: reduce) {

    .scroll-reveal,
    .scroll-reveal.is-visible {

        opacity: 1 !important;

        transform: none !important;

        filter: none !important;

        transition: none !important;
    }

}


/* ============================================================
   MÓVIL · REVEALS MÁS CORTOS
============================================================ */

@media (max-width: 767px) {

    .scroll-reveal {
        --reveal-y: 22px;
        transition-duration: .62s;
    }

    .scroll-reveal.reveal-left,
    .scroll-reveal.reveal-right {
        --reveal-x: 0px;
        --reveal-y: 22px;
    }

    .hero-glow,
    .stats-glow,
    .cta-glow {
        animation: none;
    }
}


/* ============================================================
   ACCESIBILIDAD · MENOS MOVIMIENTO
============================================================ */

@media (prefers-reduced-motion: reduce) {

    .scroll-reveal,
    .scroll-reveal.is-visible {
        opacity: 1 !important;
        transform: none !important;
        transition: none !important;
    }

    .hero-glow,
    .stats-glow,
    .cta-glow,
    .hero-top-blue,
    .transition-blue,
    .inicio-title-line,
    .cta-top-blue,
    .hero-scroll-line {
        animation: none !important;
    }

    #heroChangingText {
        transition: opacity .25s ease !important;
        transform: none !important;
        filter: none !important;
    }

    #heroChangingText.hero-text-exit,
    #heroChangingText.hero-text-enter,
    #heroChangingText.hero-text-hide {
        transform: none !important;
        filter: none !important;
    }
}


/* ============================================================
   RESPONSIVE GLOBAL · BLR ARCOS
   320px → móvil → tablet → laptop → desktop → 2K
============================================================ */

html,
body {
    max-width: 100%;
    overflow-x: hidden;
}


main {
    width: 100%;
    max-width: 100%;
    overflow-x: clip;
}


img,
video,
svg {
    max-width: 100%;
}


/* Evita scroll horizontal por palabras largas */

#servicios h1,
#servicios h2,
#servicios h3,
#valores h1,
#valores h2,
#valores h3,
.specialty h3,
.inicio-purpose h2,
#heroChangingText {
    overflow-wrap: break-word;
    word-break: normal;
}


/* ============================================================
   HERO · TABLET / LAPTOP PEQUEÑA
============================================================ */

@media (max-width: 1023px) {

    main > section:first-child > div.relative {
        height: clamp(430px,72svh,720px);
        min-height: 430px;
    }

    .hero-video {
        width: 100%;
        height: 100%;

        object-fit: cover;
        object-position: center center;
    }

    #heroChangingText {
        width: min(100%,900px);

        margin-inline: auto;
        padding-inline: .15rem;

        font-size: clamp(2rem,7vw,4.2rem);
        line-height: .94;
    }

    .hero-glow {
        right: -220px;

        width: 460px;
        height: 460px;
    }
}


/* ============================================================
   HERO · DESKTOP
============================================================ */

@media (min-width: 1024px) {

    main > section:first-child > div.relative {
        height: auto;
        min-height: 0;
    }

    .hero-video {
        width: 100%;
        height: auto;

        object-fit: contain;
        object-position: center;
    }
}


/* ============================================================
   TABLET
============================================================ */

@media (min-width: 768px) and (max-width: 1023px) {

    #servicios
    .grid.grid-cols-1.md\:grid-cols-3 {
        grid-template-columns:
            repeat(2,minmax(0,1fr));
    }

    #servicios
    .inicio-service:nth-child(2) {
        border-right: 0;
    }

    #servicios
    .inicio-service:nth-child(3) {
        grid-column: 1 / -1;

        border-top:
            1px solid rgba(0,0,0,.15);
    }
}


/* ============================================================
   MÓVIL
============================================================ */

@media (max-width: 767px) {

    /* Espaciado lateral */

    main section .max-w-7xl {
        padding-left: 1.25rem;
        padding-right: 1.25rem;
    }


    /* ========================================================
       HERO
    ======================================================== */

    main > section:first-child > div.relative {
        height: clamp(420px,68svh,620px);
        min-height: 420px;
    }

    .hero-video {
        object-position: center center;
    }

    #heroChangingText {
        font-size:
            clamp(1.85rem,9vw,3rem);

        line-height: .92;
        letter-spacing: -.035em;
    }

    /*
       En móvil reducimos un poco el recorrido
       para mantener el efecto elegante.
    */

    #heroChangingText.hero-text-exit {
        transform:
            translate3d(0,-9px,0)
            scale(.99);

        filter: blur(2px);
    }

    #heroChangingText.hero-text-enter {
        transform:
            translate3d(0,10px,0)
            scale(.99);

        filter: blur(2px);
    }

    #heroChangingText.hero-text-hide {
        transform:
            translate3d(0,-9px,0)
            scale(.99);

        filter: blur(2px);
    }

    .hero-glow {
        display: none;
    }

    .hero-top-blue {
        width: 34%;
    }

    .hero-top-yellow {
        left: 34%;
        width: 14px;
    }


    /* ========================================================
       TRANSICIÓN DECORATIVA
    ======================================================== */

    .transition-blue {
        width: 28% !important;
    }

    .transition-yellow {
        left: 28% !important;
        width: 8px !important;
    }


    /* ========================================================
       SERVICIOS
    ======================================================== */

    #servicios {
        padding-top: 3.25rem;
        padding-bottom: 3.25rem;
    }

    #servicios
    .inicio-title-line {
        margin-bottom: 1.15rem;
    }

    #servicios h2 {
        font-size:
            clamp(2rem,10vw,3rem);

        line-height: .92;
    }

    #servicios
    .max-w-2xl {
        font-size: .92rem;
        line-height: 1.75;
        text-align: left;
    }

    .inicio-service {
        padding: 1.75rem 0 !important;

        border-right: 0 !important;

        border-bottom:
            1px solid rgba(0,0,0,.15);
    }

    .inicio-service:last-child {
        border-bottom: 0;
    }

    .inicio-service > span {
        margin-bottom: 1.25rem;
        font-size: 2.25rem;
    }

    .inicio-service h3 {
        font-size: 1.15rem;
    }

    .inicio-service p {
        font-size: .875rem;
        line-height: 1.65;
        text-align: left;
    }


    /* ========================================================
       ESTADÍSTICAS
    ======================================================== */

    .stat-box {
        padding:
            1.5rem .85rem !important;

        min-width: 0;
    }

    .stat-box:nth-child(2) {
        border-right: 0 !important;
    }

    .stat-box:nth-child(-n+2) {
        border-bottom:
            1px solid #15297C;
    }

    .stat-box:nth-child(3) {
        border-right:
            1px solid #15297C !important;
    }

    .stat-box:nth-child(4) {
        border-right: 0 !important;
    }

    .stat-box > div {
        font-size:
            clamp(2rem,10vw,2.8rem);
    }

    .stat-box p {
        font-size: 7px;
        line-height: 1.45;
        letter-spacing: .12em;
    }


    /* ========================================================
       MISIÓN / VISIÓN
    ======================================================== */

    .inicio-purpose {
        margin-left: 0 !important;
        margin-right: 0 !important;

        padding: 1.5rem 0 !important;
    }

    .inicio-purpose > span {
        font-size: 120px;

        right: -10px;
        top: -25px;
    }

    .inicio-purpose h2 {
        font-size:
            clamp(2rem,9vw,2.75rem);

        line-height: .94;
    }

    .inicio-purpose > p:last-of-type {
        text-align: left;

        font-size: .9rem;
        line-height: 1.75;
    }


    /* ========================================================
       VALORES
    ======================================================== */

    #valores {
        padding-top: 3.25rem;
        padding-bottom: 3.25rem;
    }

    #valores h2 {
        font-size:
            clamp(2rem,9vw,2.8rem);

        line-height: 1;
    }

    .home-value {
        padding:
            1.5rem 0 !important;

        border-right: 0 !important;

        border-bottom:
            1px solid rgba(21,41,124,.65);
    }

    .home-value:last-child {
        border-bottom: 0;
    }

    .home-value p {
        text-align: left;
    }


    /* ========================================================
       ESPECIALIDADES
    ======================================================== */

    .specialty {
        padding:
            1.75rem 0 !important;

        border-right: 0 !important;

        border-bottom:
            1px solid rgba(0,0,0,.15);
    }

    .specialty:last-child {
        border-bottom: 0;
    }

    .specialty h3 {
        margin-top: 1.25rem;
        font-size: 1.1rem;
    }

    .specialty p {
        text-align: left;

        font-size: .875rem;
        line-height: 1.65;
    }


    /* ========================================================
       CUMPLIMIENTO
    ======================================================== */

    .cumplimiento-logos {
        grid-template-columns:
            repeat(2,minmax(0,1fr));

        column-gap: 1rem;
        row-gap: 1.75rem;
    }

    .cumplimiento-logo {
        min-height: 72px;
    }

    .cumplimiento-logo img {
        max-width: 125px !important;
        height: 48px !important;
    }


    /* ========================================================
       CTA
    ======================================================== */

    .cta-glow {
        display: none;
    }

    .cta-top-blue {
        width: 34%;
    }

    .cta-top-yellow {
        right: 34%;
        width: 14px;
    }

    section:last-of-type h2 {
        font-size:
            clamp(2.2rem,11vw,3.35rem);

        line-height: .92;
    }

    section:last-of-type
    a[href*="contacto"] {
        width: 100%;

        gap: 1rem;

        padding:
            1.1rem 1.25rem;
    }


    /* ========================================================
       TÁCTIL
    ======================================================== */

    @media (hover: none) {

        .inicio-service
        .absolute.inset-0,

        .home-value
        .absolute.inset-0 {
            display: none;
        }

        .inicio-service h3,
        .inicio-service a {
            color: #000 !important;
        }

        .inicio-service p {
            color: #4b5563 !important;
        }

        .home-value h3 {
            color: #fff !important;
        }

        .home-value p {
            color: #6b7280 !important;
        }
    }
}


/* ============================================================
   TELÉFONOS MUY PEQUEÑOS · 320 - 374PX
============================================================ */

@media (max-width: 374px) {

    main section .max-w-7xl {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    main > section:first-child
    > div.relative {
        height: 440px;
        min-height: 440px;
    }

    #heroChangingText {
        font-size: 1.8rem;
    }

    .stat-box {
        padding-left: .55rem !important;
        padding-right: .55rem !important;
    }

    .stat-box > div {
        font-size: 1.95rem;
    }

    .cumplimiento-logos {
        grid-template-columns: 1fr;
    }

    .cumplimiento-logo img {
        max-width: 145px !important;
    }
}

/* ============================================================
   PANTALLAS GRANDES
============================================================ */

@media (min-width: 1536px) {

    #servicios
    .max-w-2xl {
        max-width: 46rem;
    }

    #heroChangingText {
        max-width: 1200px;
        margin-inline: auto;
    }
}

/* ============================================================
   HOVER · SOLO MOUSE
============================================================ */

@media (hover: hover) and (pointer: fine) {

    .inicio-service:hover,
    .home-value:hover,
    .specialty:hover {
        will-change: transform;
    }
}

/* ============================================================
   TELÉFONO HORIZONTAL
============================================================ */

@media (max-height: 520px)
       and (orientation: landscape)
       and (max-width: 1023px) {

    main > section:first-child
    > div.relative {
        height: 100svh;
        min-height: 360px;
    }

    #heroChangingText {
        font-size:
            clamp(1.8rem,6vw,3.2rem);
    }
}

</style>


<script>
document.addEventListener('DOMContentLoaded', () => {

    /* ============================================================
       UTILIDADES
    ============================================================ */

    const q = (selector, context = document) =>
        context.querySelector(selector);

    const qa = (selector, context = document) =>
        [...context.querySelectorAll(selector)];


    /* ============================================================
       DETECCIÓN DEL DISPOSITIVO
    ============================================================ */

    const getDevice = () => {
        const width = window.innerWidth;

        if (width < 768) return 'mobile';
        if (width < 1024) return 'tablet';
        if (width < 1440) return 'laptop';

        return 'desktop';
    };

    let currentDevice = getDevice();

    document.documentElement.dataset.device = currentDevice;


    /* ============================================================
       HERO · ESCRITURA UNA SOLA VEZ
    ============================================================ */

    const heroText = q('#heroFixedText');

    if (heroText) {

        const lineas = qa(':scope > span', heroText);

        const textos = lineas.map(linea =>
            linea.textContent.trim()
        );



// Duración total de la animación
const duracionTotal = 30000; // 30 segundos

// Pausa entre líneas
const pausaEntreLineas = 250;

// Contar todas las letras, incluyendo espacios
const totalCaracteres = textos.reduce(
    (total, texto) => total + texto.length,
    0
);

// Calcular automáticamente la velocidad
const velocidadEscritura = (
    duracionTotal -
    (textos.length - 1) * pausaEntreLineas
) / totalCaracteres;

        const reducirMovimiento = window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;

        if (!reducirMovimiento && lineas.length) {

            lineas.forEach((linea, index) => {

                const texto = textos[index];

                linea.textContent = '';
                linea.style.position = 'relative';

                // Reserva el espacio completo de cada línea
                const reserva = document.createElement('span');

                reserva.textContent = texto;
                reserva.setAttribute('aria-hidden', 'true');

                reserva.style.visibility = 'hidden';
                reserva.style.display = 'inline';

                // Texto que aparecerá progresivamente
                const escritura = document.createElement('span');

                escritura.style.position = 'absolute';
                escritura.style.inset = '0';
                escritura.style.display = 'block';

                linea.appendChild(reserva);
                linea.appendChild(escritura);

                linea._escritura = escritura;

            });

            let lineaActual = 0;

            const escribirLinea = () => {

                if (lineaActual >= lineas.length) {
                    // Todas las líneas quedan visibles
                    return;
                }

                const texto = textos[lineaActual];

                const destino = lineas[lineaActual]._escritura;

                let letraActual = 0;

                const escribir = () => {

                    if (letraActual < texto.length) {

                        destino.textContent +=
                            texto.charAt(letraActual);

                        letraActual++;

                        setTimeout(
                            escribir,
                            velocidadEscritura
                        );

                    } else {

                        lineaActual++;

                        setTimeout(
                            escribirLinea,
                            pausaEntreLineas
                        );

                    }

                };

                escribir();

            };

            escribirLinea();

        }

    }


    /* ============================================================
       HERO · VIDEO
    ============================================================ */

    const video = q('.hero-video');

    if (video && typeof video.play === 'function') {

        video.play().catch(() => {});

        document.addEventListener('visibilitychange', () => {

            if (document.hidden) {

                if (!video.paused) {
                    video.pause();
                }

            } else {

                video.play().catch(() => {});

            }

        });

    }


    /* ============================================================
       CONFIGURACIÓN DE ANIMACIONES
    ============================================================ */

    const groups = [

        // Servicios
        {
            selector: '#servicios .grid > div',
            effect: 'reveal-left',
            delay: 70
        },

        {
            selector: '.inicio-service',
            effect: 'reveal-scale',
            delay: 110
        },

        // Estadísticas
        {
            selector: '.stat-box',
            effect: 'reveal-scale',
            delay: 90
        },

        // Misión y visión
        {
            selector: '.inicio-purpose:first-child',
            effect: 'reveal-left',
            delay: 0
        },

        {
            selector: '.inicio-purpose:last-child',
            effect: 'reveal-right',
            delay: 120
        },

        // Valores
        {
            selector: '.home-value',
            effect: 'reveal-scale',
            delay: 85
        },

        // Especialidades
        {
            selector: '.specialty',
            effect: 'reveal-up',
            delay: 90
        },

        // Cumplimiento
        {
            selector: '.cumplimiento-heading',
            effect: 'reveal-soft',
            delay: 0
        },

        {
            selector: '.cumplimiento-logo',
            effect: 'reveal-scale',
            delay: 100
        },

        // CTA final
        {
            selector: 'section:last-of-type .grid > div',
            effect: 'reveal-up',
            delay: 110
        }

    ];


    /* ============================================================
       APLICACIÓN DE CLASES
    ============================================================ */

    groups.forEach(group => {

        const elements = qa(group.selector);

        elements.forEach((element, index) => {

            if (!element.classList.contains('scroll-reveal')) {

                element.classList.add(
                    'scroll-reveal',
                    group.effect
                );

            }

            const delay = Math.min(
                index * group.delay,
                360
            );

            element.style.setProperty(
                '--reveal-delay',
                `${delay}ms`
            );

        });

    });


    /* ============================================================
       TÍTULOS Y TEXTOS GENERALES
    ============================================================ */

    qa('main section').forEach(section => {

        const elements = qa(
            'h2, section > div > p',
            section
        );

        elements.forEach((element, index) => {

            if (
                element.closest(
                    '.inicio-service,' +
                    '.stat-box,' +
                    '.inicio-purpose,' +
                    '.home-value,' +
                    '.specialty,' +
                    '.cumplimiento-logo'
                )
            ) {
                return;
            }

            if (element.classList.contains('scroll-reveal')) {
                return;
            }

            element.classList.add(
                'scroll-reveal',
                'reveal-soft'
            );

            element.style.setProperty(
                '--reveal-delay',
                `${Math.min(index * 60, 180)}ms`
            );

        });

    });


    /* ============================================================
       DIRECCIÓN DEL SCROLL
    ============================================================ */

    let lastY = window.scrollY;
    let scrollDirection = 'down';
    let ticking = false;

    const detectScrollDirection = () => {

        const currentY = window.scrollY;

        if (Math.abs(currentY - lastY) > 6) {

            scrollDirection =
                currentY > lastY ? 'down' : 'up';

            document.body.classList.toggle(
                'scroll-up',
                scrollDirection === 'up'
            );

            lastY = currentY;

        }

        ticking = false;

    };

    window.addEventListener('scroll', () => {

        if (!ticking) {

            ticking = true;

            requestAnimationFrame(
                detectScrollDirection
            );

        }

    }, { passive: true });


    /* ============================================================
       INTERSECTION OBSERVER
    ============================================================ */

    const revealElements = qa('.scroll-reveal');

    if ('IntersectionObserver' in window) {

        const getObserverSettings = () => {

            const device = getDevice();

            if (device === 'mobile') {

                return {
                    threshold: 0.08,
                    rootMargin: '0px 0px -4% 0px'
                };

            }

            if (device === 'tablet') {

                return {
                    threshold: 0.10,
                    rootMargin: '0px 0px -5% 0px'
                };

            }

            return {
                threshold: 0.14,
                rootMargin: '0px 0px -7% 0px'
            };

        };

        const observer = new IntersectionObserver(
            entries => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        entry.target.classList.add(
                            'is-visible'
                        );

                    } else {

                        entry.target.classList.remove(
                            'is-visible'
                        );

                    }

                });

            },
            getObserverSettings()
        );

        revealElements.forEach(element => {
            observer.observe(element);
        });

    } else {

        revealElements.forEach(element => {
            element.classList.add('is-visible');
        });

    }


    /* ============================================================
       CONTADORES
    ============================================================ */

    const numbers = qa('.stat-number');
    const statsSection = q('.stat-box');

    let counted = false;

    const animateNumber = element => {

        const target = Number(
            element.dataset.target
        );

        if (!Number.isFinite(target)) {
            return;
        }

        const start = performance.now();

        const duration =
            getDevice() === 'mobile'
                ? 1100
                : 1400;

        const frame = now => {

            const progress = Math.min(
                (now - start) / duration,
                1
            );

            const eased =
                1 - Math.pow(1 - progress, 3);

            element.textContent = Math.floor(
                target * eased
            );

            if (progress < 1) {

                requestAnimationFrame(frame);

            } else {

                element.textContent = target;

            }

        };

        requestAnimationFrame(frame);

    };

    if (
        statsSection &&
        numbers.length &&
        'IntersectionObserver' in window
    ) {

        const statObserver = new IntersectionObserver(
            ([entry]) => {

                if (entry.isIntersecting && !counted) {

                    counted = true;

                    numbers.forEach(animateNumber);

                    statObserver.disconnect();

                }

            },
            { threshold: 0.20 }
        );

        statObserver.observe(statsSection);

    } else if (statsSection && numbers.length) {

        numbers.forEach(animateNumber);

    }


    /* ============================================================
       CAMBIO DE TAMAÑO Y ORIENTACIÓN
    ============================================================ */

    let resizeTimer;

    window.addEventListener('resize', () => {

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(() => {

            const newDevice = getDevice();

            if (newDevice !== currentDevice) {

                currentDevice = newDevice;

                document.documentElement.dataset.device =
                    newDevice;

            }

        }, 180);

    }, { passive: true });

});
</script>

@endsection
