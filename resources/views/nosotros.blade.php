@extends('layouts.app')

@section('title', 'Nosotros | BLR & ARCOS')

@section('content')

<main class="overflow-hidden bg-white">

{{-- ============================================================
     HERO NOSOTROS
============================================================ --}}
<section
    class="relative
           min-h-[520px]
           sm:min-h-[520px]
           md:min-h-[540px]
           lg:min-h-[570px]
           xl:min-h-[600px]
           flex
           items-center
           overflow-hidden
           bg-black
           pt-16
           sm:pt-20"
>

    {{-- FONDO --}}
    <div class="absolute inset-0 bg-black"></div>

    {{-- RESPLANDOR AZUL MUY SUTIL --}}
    <div
        class="nosotros-glow
               absolute
               -right-[180px]
               top-1/2
               -translate-y-1/2
               w-[500px]
               h-[500px]
               rounded-full
               bg-[#15297C]/10
               blur-[100px]
               pointer-events-none"
    ></div>


    {{-- HERRAMIENTAS TÉCNICAS ANIMADAS --}}
    <div
    class="nosotros-tools absolute pointer-events-none select-none"
    style="right: 15% !important;"
    aria-hidden="true"
>
        <svg class="w-full h-auto" viewBox="0 0 720 420" fill="none" xmlns="http://www.w3.org/2000/svg">
            {{-- retícula técnica --}}
            <g class="tools-grid" opacity=".12">
                <path d="M70 70H680M70 130H680M70 190H680M70 250H680M70 310H680M70 370H680" stroke="white" stroke-dasharray="3 13"/>
                <path d="M130 45V390M230 45V390M330 45V390M430 45V390M530 45V390M630 45V390" stroke="white" stroke-dasharray="3 13"/>
            </g>

            {{-- planos --}}
            <g class="tool-plans">
                <path d="M250 108H535V302H250Z" stroke="white" stroke-opacity=".25" stroke-width="2"/>
                <path d="M276 140H505M276 165H455M276 190H488M276 215H430" stroke="#536BD7" stroke-opacity=".55" stroke-width="2" stroke-dasharray="7 8"/>
                <path d="M465 236H505V276H465Z" stroke="white" stroke-opacity=".35" stroke-width="2"/>
            </g>

            {{-- casco --}}
            <g class="tool-helmet">
                <path d="M390 173C392 126 425 93 470 91C516 89 552 121 557 169" stroke="white" stroke-width="5" stroke-linecap="round"/>
                <path d="M373 174H574" stroke="#536BD7" stroke-width="6" stroke-linecap="round"/>
                <path d="M454 93V150M486 93V150" stroke="white" stroke-opacity=".48" stroke-width="3"/>
                <path d="M557 174C572 176 583 184 589 194H371C377 183 387 177 401 174" stroke="white" stroke-opacity=".72" stroke-width="3"/>
            </g>

            {{-- escuadra --}}
            <g class="tool-square">
                <path d="M163 293L267 189V293H163Z" stroke="white" stroke-opacity=".7" stroke-width="4"/>
                <path d="M193 278L249 222V278H193Z" stroke="#536BD7" stroke-width="2"/>
                <path d="M176 288V277M191 288V280M207 288V277M223 288V280M239 288V277" stroke="white" stroke-opacity=".4" stroke-width="2"/>
            </g>

            {{-- martillo --}}
            <g class="tool-hammer">
                <path d="M571 238L625 319" stroke="white" stroke-width="8" stroke-linecap="round"/>
                <path d="M542 211L581 185L607 223L568 249Z" stroke="#536BD7" stroke-width="3"/>
                <path d="M581 185L609 176" stroke="white" stroke-opacity=".7" stroke-width="5" stroke-linecap="round"/>
            </g>

            {{-- llave --}}
            <g class="tool-wrench">
                <path d="M168 117C185 100 208 99 224 108L204 128L214 145L238 137C239 156 227 174 209 181L152 238C144 246 131 246 123 238C115 230 115 217 123 209L180 152C169 143 164 130 168 117Z" stroke="white" stroke-opacity=".65" stroke-width="4"/>
                <circle cx="139" cy="223" r="7" stroke="#FACC15" stroke-width="3"/>
            </g>

            {{-- flexómetro --}}
            <g class="tool-tape">
                <rect x="472" y="316" width="83" height="55" rx="12" stroke="white" stroke-opacity=".75" stroke-width="4"/>
                <circle cx="513" cy="343" r="14" stroke="#536BD7" stroke-width="3"/>
                <path class="tape-line" d="M555 342H650" stroke="#FACC15" stroke-width="4" stroke-linecap="round"/>
                <path d="M579 334V342M596 334V342M613 334V342M630 334V342" stroke="white" stroke-opacity=".45" stroke-width="2"/>
            </g>

            {{-- lápiz técnico --}}
            <g class="tool-pencil">
                <path d="M303 337L406 234" stroke="#FACC15" stroke-width="7" stroke-linecap="round"/>
                <path d="M294 346L303 337L309 343Z" fill="white" fill-opacity=".8"/>
                <path class="pencil-trace" d="M286 356C326 368 369 367 418 354" stroke="white" stroke-opacity=".45" stroke-width="2" stroke-dasharray="6 8"/>
            </g>

            {{-- nodos --}}
            <circle class="tool-node node-one" cx="163" cy="293" r="4" fill="#FACC15"/>
            <circle class="tool-node node-two" cx="574" cy="174" r="4" fill="#536BD7"/>
        </svg>
        <div class="absolute right-5 -bottom-2 flex items-center gap-3 text-white/30 text-[7px] uppercase tracking-[0.28em]">
            <span class="w-10 h-px bg-[#536BD7]/70"></span>
            Planeación · precisión · ejecución
        </div>
    </div>

    {{-- CONTENIDO --}}
    <div
        class="relative z-20
               w-full max-w-[1440px] mx-auto
               px-4 sm:px-6 lg:px-8 xl:px-10"
    >

        <div class="max-w-4xl">

            {{-- MICRO TEXTO --}}
            <div
                class="flex items-center gap-3 mb-5"
                data-aos="fade-right"
                data-aos-duration="900"
            >

                <span
                    class="w-10 sm:w-12 h-[2px] bg-[#15297C]"
                ></span>

                <p
                    class="text-yellow-400
                           text-[9px] sm:text-[10px]
                           uppercase tracking-[0.28em]
                           font-black"
                >
                    Conoce BLR & ARCOS
                </p>

            </div>


            {{-- ÚNICO TÍTULO GRANDE --}}
            <h1
                class="text-white
                       text-5xl sm:text-6xl md:text-7xl
                       lg:text-8xl xl:text-[100px]
                       font-black uppercase
                       tracking-[-0.04em]
                       leading-[0.9]"
                data-aos="fade-up"
                data-aos-duration="1100"
            >
                Nosotros
            </h1>


            {{-- SUBTÍTULO --}}
            <div
                class="flex items-stretch gap-4 mt-6"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="150"
            >

                <span
                    class="nosotros-subline
                           w-[3px]
                           bg-[#15297C]
                           shrink-0"
                ></span>

                <p
                    class="text-white
                           text-base sm:text-lg md:text-xl lg:text-2xl
                           font-black uppercase leading-tight"
                >
                    Ingeniería que convierte

                    <span class="text-[#15297C]">
                        visión en obra.
                    </span>
                </p>

            </div>

        </div>

    </div>


    {{-- LÍNEA INFERIOR --}}
    <div
        class="absolute bottom-0 left-0
               w-full h-[3px]
               bg-[#15297C]"
    >
        <div
            class="nosotros-line
                   h-full
                   bg-yellow-400"
        ></div>
    </div>

</section>



{{-- ============================================================
     QUIÉNES SOMOS
============================================================ --}}
<section
    id="nosotros"
    class="relative bg-white
           py-14 sm:py-16 md:py-20 lg:py-24 xl:py-28
           overflow-hidden"
>

    {{-- DETALLE DE FONDO --}}
    <div
        class="absolute
               -left-20
               top-20
               w-52
               h-52
               border
               border-[#15297C]/[0.05]
               rotate-45
               pointer-events-none"
    ></div>


    <div
        class="relative z-10
               w-full max-w-[1440px] mx-auto
               px-4 sm:px-6 lg:px-8 xl:px-10"
    >

        <div
            class="grid grid-cols-1 lg:grid-cols-2
                   gap-12 lg:gap-16 xl:gap-20
                   items-center"
        >

            {{-- =====================================================
                 COLUMNA TEXTO
            ===================================================== --}}
            <div
                data-aos="fade-right"
                data-aos-duration="1000"
            >

                <div class="flex items-center gap-3 mb-3">

                    <span class="w-7 h-[2px] bg-[#15297C]"></span>

                    <p
                        class="text-yellow-500
                               uppercase
                               text-[9px] sm:text-[10px]
                               tracking-[0.25em]
                               font-black"
                    >
                        Quiénes somos
                    </p>

                </div>


                <h2
                    class="text-black
                           text-xl sm:text-2xl md:text-3xl lg:text-4xl
                           font-black uppercase
                           leading-tight"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    Ingeniería, infraestructura

                    <span class="text-[#15297C]">
                        y construcción
                    </span>
                </h2>


                <div
                    class="nosotros-title-line
                           w-14 h-[3px]
                           bg-[#15297C]
                           mt-6"
                ></div>


                <p
                    class="mt-7
                           text-gray-600
                           text-sm md:text-base
                           leading-7
                           max-w-xl"
                            style="text-align: justify;"
                    data-aos="fade-up"
                    data-aos-delay="170"
                >
                    BLR & ARCOS es una empresa de ingeniería y construcción
                    con sede en Cancún y cobertura nacional. Ejecutamos
                    infraestructura, edificación, estructuras, puentes y
                    sistemas de cimentación profunda mediante pilotes.
                    Integramos planeación, procedimientos constructivos,
                    supervisión y control técnico para desarrollar obras de
                    alta complejidad conforme a cada especificación de proyecto.
                </p>


                {{-- CAPACIDADES --}}
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-8"
                >

                    {{-- CAPACIDAD 1 --}}
                    <div
                        class="nosotros-capacidad
                               group
                               relative
                               overflow-hidden
                               flex items-center gap-3
                               border border-gray-200
                               bg-[#f7f7f7]
                               p-4
                               transition-all duration-500
                               hover:border-[#15297C]
                               hover:-translate-y-1
                               hover:shadow-lg"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >

                        <div
                            class="absolute
                                   left-0
                                   top-0
                                   h-full
                                   w-0
                                   bg-[#15297C]
                                   transition-all
                                   duration-500
                                   group-hover:w-[4px]"
                        ></div>

                        <span
                            class="w-2 h-2
                                   bg-[#15297C]
                                   shrink-0
                                   transition-all
                                   duration-500
                                   group-hover:scale-150
                                   group-hover:rotate-45"
                        ></span>

                        <span
                            class="text-gray-800
                                   text-xs
                                   uppercase
                                   tracking-[0.1em]
                                   font-bold"
                        >
                            Capacidad técnica
                        </span>

                    </div>


                    {{-- CAPACIDAD 2 --}}
                    <div
                        class="nosotros-capacidad
                               group
                               relative
                               overflow-hidden
                               flex items-center gap-3
                               border border-gray-200
                               bg-[#f7f7f7]
                               p-4
                               transition-all duration-500
                               hover:border-[#15297C]
                               hover:-translate-y-1
                               hover:shadow-lg"
                        data-aos="fade-up"
                        data-aos-delay="180"
                    >

                        <div
                            class="absolute
                                   left-0 top-0
                                   h-full w-0
                                   bg-[#15297C]
                                   transition-all duration-500
                                   group-hover:w-[4px]"
                        ></div>

                        <span
                            class="w-2 h-2
                                   bg-[#15297C]
                                   shrink-0
                                   transition-all duration-500
                                   group-hover:scale-150
                                   group-hover:rotate-45"
                        ></span>

                        <span
                            class="text-gray-800
                                   text-xs uppercase
                                   tracking-[0.1em]
                                   font-bold"
                        >
                            Planeación
                        </span>

                    </div>


                    {{-- CAPACIDAD 3 --}}
                    <div
                        class="nosotros-capacidad
                               group
                               relative
                               overflow-hidden
                               flex items-center gap-3
                               border border-gray-200
                               bg-[#f7f7f7]
                               p-4
                               transition-all duration-500
                               hover:border-[#15297C]
                               hover:-translate-y-1
                               hover:shadow-lg"
                        data-aos="fade-up"
                        data-aos-delay="260"
                    >

                        <div
                            class="absolute
                                   left-0 top-0
                                   h-full w-0
                                   bg-yellow-400
                                   transition-all duration-500
                                   group-hover:w-[4px]"
                        ></div>

                        <span
                            class="w-2 h-2
                                   bg-yellow-400
                                   shrink-0
                                   transition-all duration-500
                                   group-hover:scale-150
                                   group-hover:rotate-45"
                        ></span>

                        <span
                            class="text-gray-800
                                   text-xs uppercase
                                   tracking-[0.1em]
                                   font-bold"
                        >
                            Control de obra
                        </span>

                    </div>


                    {{-- CAPACIDAD 4 --}}
                    <div
                        class="nosotros-capacidad
                               group
                               relative
                               overflow-hidden
                               flex items-center gap-3
                               border border-gray-200
                               bg-[#f7f7f7]
                               p-4
                               transition-all duration-500
                               hover:border-[#15297C]
                               hover:-translate-y-1
                               hover:shadow-lg"
                        data-aos="fade-up"
                        data-aos-delay="340"
                    >

                        <div
                            class="absolute
                                   left-0 top-0
                                   h-full w-0
                                   bg-[#15297C]
                                   transition-all duration-500
                                   group-hover:w-[4px]"
                        ></div>

                        <span
                            class="w-2 h-2
                                   bg-[#15297C]
                                   shrink-0
                                   transition-all duration-500
                                   group-hover:scale-150
                                   group-hover:rotate-45"
                        ></span>

                        <span
                            class="text-gray-800
                                   text-xs uppercase
                                   tracking-[0.1em]
                                   font-bold"
                        >
                            Ejecución especializada
                        </span>

                    </div>

                </div>

            </div>



            {{-- =====================================================
                 GALERÍA AUTOMÁTICA
            ===================================================== --}}
            <div
                class="relative"
                data-aos="fade-left"
                data-aos-duration="1100"
            >

                {{-- MARCO ANIMADO --}}
                <div
                    class="nosotros-gallery-frame
                           absolute
                           -right-2 sm:-right-4
                           -bottom-2 sm:-bottom-4
                           w-full h-full
                           border
                           border-[#15297C]/50"
                ></div>


                <div
                    id="galeriaNosotros"
                    class="group
                           relative
                           overflow-hidden
                           bg-black
                           min-h-[340px]
                           sm:min-h-[420px]
                           md:min-h-[480px]
                           lg:min-h-[540px]
                           shadow-xl
                           transition-all
                           duration-700
                           hover:shadow-2xl"
                >

                    {{-- IMAGEN 1 --}}
                    <img
                        src="{{ asset('images/nosotros/equipo-construccion-obra.webp') }}"
                        alt="Proyecto de construcción BLR & ARCOS"
                        class="galeria-nosotros-imagen
                               absolute inset-0
                               w-full h-full
                               object-cover object-center
                               opacity-100
                               scale-100
                               transition-all
                               duration-[1500ms]
                               ease-in-out"
                    >


                    {{-- IMAGEN 2 --}}
                    <img
                        src="{{ asset('images/nosotros/equipo-en-obra-construccion_1.webp') }}"
                        alt="Proyecto de infraestructura BLR & ARCOS"
                        class="galeria-nosotros-imagen
                               absolute inset-0
                               w-full h-full
                               object-cover object-center
                               opacity-0
                               scale-105
                               transition-all
                               duration-[1500ms]
                               ease-in-out"
                    >


                    {{-- IMAGEN 4 --}}
                    <img
                        src="{{ asset('images/nosotros/obra-construccion-equipo-exterior.webp') }}"
                        alt="Infraestructura BLR & ARCOS"
                        class="galeria-nosotros-imagen
                               absolute inset-0
                               w-full h-full
                               object-cover object-center
                               opacity-0
                               scale-105
                               transition-all
                               duration-[1500ms]
                               ease-in-out"
                    >


                    {{-- OVERLAY --}}
                    <div
                        class="absolute
                               z-10 inset-0
                               bg-gradient-to-t
                               from-black/85
                               via-transparent
                               to-black/10
                               pointer-events-none"
                    ></div>


                    {{-- EFECTO BRILLO --}}
                    <div
                        class="nosotros-gallery-shine
                               absolute
                               z-20
                               top-0
                               -left-[120%]
                               w-[50%]
                               h-full
                               bg-gradient-to-r
                               from-transparent
                               via-white/10
                               to-transparent
                               skew-x-[-20deg]
                               pointer-events-none"
                    ></div>


                    {{-- INDICADORES --}}
                    <div
                        class="absolute
                               z-30
                               top-5
                               right-5
                               flex
                               items-center
                               gap-2"
                    >

                        <button
                            type="button"
                            class="galeria-nosotros-dot
                                   w-6 h-[2px]
                                   bg-white
                                   transition-all
                                   duration-500
                                   hover:bg-yellow-400"
                            data-index="0"
                            aria-label="Imagen 1"
                        ></button>

                        <button
                            type="button"
                            class="galeria-nosotros-dot
                                   w-3 h-[2px]
                                   bg-white/30
                                   transition-all
                                   duration-500
                                   hover:bg-yellow-400"
                            data-index="1"
                            aria-label="Imagen 2"
                        ></button>

                        <button
                            type="button"
                            class="galeria-nosotros-dot
                                   w-3 h-[2px]
                                   bg-white/30
                                   transition-all
                                   duration-500
                                   hover:bg-yellow-400"
                            data-index="2"
                            aria-label="Imagen 3"
                        ></button>

                        <button
                            type="button"
                            class="galeria-nosotros-dot
                                   w-3 h-[2px]
                                   bg-white/30
                                   transition-all
                                   duration-500
                                   hover:bg-yellow-400"
                            data-index="3"
                            aria-label="Imagen 4"
                        ></button>

                    </div>


                    {{-- CONTADOR --}}
                    <div
                        class="absolute
                               z-30
                               bottom-5
                               right-5
                               hidden sm:flex
                               items-center gap-2"
                    >

                        <span
                            id="galeriaNosotrosActual"
                            class="text-white
                                   text-xs
                                   font-black"
                        >
                            01
                        </span>

                        <span class="w-5 h-px bg-white/40"></span>

                        <span
                            class="text-white/50
                                   text-[9px]
                                   font-bold"
                        >
                            04
                        </span>

                    </div>


                    {{-- ETIQUETA --}}
                    <div
                        class="absolute
                               z-30
                               bottom-0
                               left-0
                               bg-[#15297C]
                               text-white
                               px-5 sm:px-7
                               py-4 sm:py-5
                               transition-all
                               duration-500
                               group-hover:px-8
                               group-hover:bg-[#101f61]"
                    >

                        <p
                            class="text-yellow-400
                                   text-[8px] sm:text-[9px]
                                   uppercase
                                   tracking-[0.18em]
                                   font-black"
                        >
                            BLR & ARCOS
                        </p>

                        <p
                            class="text-lg sm:text-xl
                                   font-black
                                   uppercase"
                        >
                            Ingeniería en obra
                        </p>

                    </div>


                    {{-- PROGRESO --}}
                    <div
                        class="absolute
                               z-40
                               bottom-0
                               left-0
                               w-full
                               h-[2px]
                               bg-white/15"
                    >
                        <div
                            id="galeriaNosotrosProgress"
                            class="h-full
                                   bg-yellow-400
                                   w-0"
                        ></div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- ============================================================
     MISIÓN Y VISIÓN
============================================================ --}}
<section
    class="relative
           bg-[#f5f5f5]
           py-14 sm:py-16 md:py-20 lg:py-24
           overflow-hidden"
>

    <div
        class="absolute
               -right-32
               top-10
               w-64
               h-64
               border
               border-[#15297C]/[0.06]
               rotate-45
               pointer-events-none"
    ></div>


    <div
        class="relative z-10
               w-full
               max-w-[1440px]
               mx-auto
               px-4 sm:px-6 lg:px-8 xl:px-10"
    >

        {{-- CABECERA --}}
        <div
            class="flex
                   flex-col
                   md:flex-row
                   md:items-end
                   md:justify-between
                   gap-5
                   pb-7
                   border-b
                   border-gray-300
                   mb-8
                   lg:mb-10"
            data-aos="fade-up"
            data-aos-duration="900"
        >

            <div>

                <div class="flex items-center gap-3 mb-3">

                    <span class="w-7 h-[2px] bg-[#15297C]"></span>

                    <p
                        class="text-yellow-500
                               text-[9px] sm:text-[10px]
                               uppercase
                               tracking-[0.25em]
                               font-black"
                    >
                        Nuestra dirección
                    </p>

                </div>


                <h2
                    class="text-black
                           text-xl sm:text-2xl md:text-3xl
                           font-black uppercase"
                >
                    Propósito y visión
                </h2>

            </div>


            <p
                class="text-gray-600
                       text-xs sm:text-sm
                       leading-6
                       md:max-w-md"
                        style="text-align: justify;"
            >
                La forma en que trabajamos hoy y la dirección
                hacia la que proyectamos nuestro crecimiento.
            </p>

        </div>


        <div
            class="grid grid-cols-1 lg:grid-cols-2
                   gap-5 lg:gap-6"
        >

            {{-- =====================================================
                 MISIÓN
            ===================================================== --}}
            <article
                class="group
                       relative
                       overflow-hidden
                       bg-white
                       border
                       border-gray-200
                       p-7 sm:p-9 md:p-10 lg:p-12
                       transition-all
                       duration-700
                       hover:border-[#15297C]
                       hover:-translate-y-2
                       hover:shadow-2xl"
                data-aos="fade-right"
                data-aos-duration="1000"
            >

                {{-- FONDO HOVER --}}
                <div
                    class="absolute
                           inset-x-0
                           bottom-0
                           h-0
                           bg-[#15297C]/[0.025]
                           transition-all
                           duration-700
                           group-hover:h-full"
                ></div>


                {{-- M DECORATIVA --}}
                <span
                    class="absolute
                           -top-5
                           right-2
                           text-[110px]
                           sm:text-[140px]
                           lg:text-[170px]
                           font-black
                           text-[#15297C]/[0.04]
                           leading-none
                           transition-all
                           duration-700
                           group-hover:text-[#15297C]/[0.10]
                           group-hover:-translate-y-2
                           group-hover:-translate-x-2"
                >
                    M
                </span>


                <div
                    class="relative
                           w-12 h-[3px]
                           bg-[#15297C]
                           mb-8
                           transition-all
                           duration-500
                           group-hover:w-20"
                ></div>


                <p
                    class="relative
                           text-yellow-500
                           text-[9px]
                           uppercase
                           tracking-[0.22em]
                           font-black"
                >
                    Nuestro propósito
                </p>


                <h3
                    class="relative
                           text-black
                           text-xl sm:text-2xl md:text-3xl
                           font-black uppercase
                           mt-3
                           transition-colors
                           duration-500
                           group-hover:text-[#15297C]"
                >
                    Misión
                </h3>


                <p
                    class="relative
                           mt-6
                           text-gray-600
                           text-sm md:text-base
                           leading-7"
                            style="text-align: justify;"
                >
                    En BLR & ARCOS ejecutamos infraestructura, obra civil y
                    construcción especializada en todo México. Gestionamos
                    sistemas de pilotaje, cimentaciones, superestructuras,
                    edificios y puentes mediante coordinación de frentes,
                    control técnico y supervisión. Entregamos soluciones
                    seguras y duraderas, con apego al programa, los alcances,
                    las especificaciones de proyecto y los criterios de calidad.
                </p>

            </article>



            {{-- =====================================================
                 VISIÓN
            ===================================================== --}}
            <article
                class="group
                       relative
                       overflow-hidden
                       bg-[#15297C]
                       border
                       border-[#15297C]
                       p-7 sm:p-9 md:p-10 lg:p-12
                       transition-all
                       duration-700
                       hover:-translate-y-2
                       hover:shadow-2xl"
                data-aos="fade-left"
                data-aos-duration="1000"
            >

                {{-- LUZ HOVER --}}
                <div
                    class="absolute
                           -right-32
                           -bottom-32
                           w-72
                           h-72
                           rounded-full
                           bg-white/[0.04]
                           transition-all
                           duration-700
                           group-hover:scale-150"
                ></div>


                {{-- V DECORATIVA --}}
                <span
                    class="absolute
                           -top-5
                           right-2
                           text-[110px]
                           sm:text-[140px]
                           lg:text-[170px]
                           font-black
                           text-white/[0.04]
                           leading-none
                           transition-all
                           duration-700
                           group-hover:text-white/[0.09]
                           group-hover:-translate-y-2
                           group-hover:-translate-x-2"
                >
                    V
                </span>


                <div
                    class="relative
                           w-12 h-[3px]
                           bg-yellow-400
                           mb-8
                           transition-all
                           duration-500
                           group-hover:w-20"
                ></div>


                <p
                    class="relative
                           text-yellow-400
                           text-[9px]
                           uppercase
                           tracking-[0.22em]
                           font-black"
                >
                    Hacia dónde vamos
                </p>


                <h3
                    class="relative
                           text-white
                           text-xl sm:text-2xl md:text-3xl
                           font-black
                           uppercase
                           mt-3"
                >
                    Visión
                </h3>


                <p
                    class="relative
                           mt-6
                           text-white/75
                           text-sm md:text-base
                           leading-7
                           transition-colors
                           duration-500
                           group-hover:text-white/90"
                            style="text-align: justify;"
                >
                    Consolidarnos como referente nacional en ingeniería y
                    construcción de infraestructura, cimentaciones, estructuras,
                    edificios y puentes de alta complejidad. Desde Cancún,
                    proyectamos la expansión internacional de BLR & ARCOS
                    mediante innovación constructiva, estandarización de
                    procesos, gestión integral de obra y un desempeño seguro,
                    sostenible y verificable.
                </p>

            </article>

        </div>

    </div>

</section>



{{-- ============================================================
     VALORES ARCOS
============================================================ --}}
<section
    class="relative
           bg-white
           py-14 sm:py-16 md:py-20 lg:py-24 xl:py-28
           overflow-hidden"
>

    <div
        class="w-full
               max-w-[1440px]
               mx-auto
               px-4 sm:px-6 lg:px-8 xl:px-10"
    >

        {{-- CABECERA --}}
        <div
            class="flex
                   flex-col
                   md:flex-row
                   md:items-end
                   md:justify-between
                   gap-6
                   mb-9
                   lg:mb-12"
            data-aos="fade-up"
        >

            <div>

                <div class="flex items-center gap-3 mb-3">

                    <span class="w-7 h-[2px] bg-[#15297C]"></span>

                    <p
                        class="text-yellow-500
                               text-[9px] sm:text-[10px]
                               uppercase
                               tracking-[0.25em]
                               font-black"
                    >
                        Nuestra forma de construir
                    </p>

                </div>


                <h2
                    class="text-black
                           text-xl sm:text-2xl md:text-3xl
                           font-black uppercase"
                >
                    Valores que forman

                    <span class="text-[#15297C]">
                        ARCOS
                    </span>
                </h2>

            </div>


            <p
                class="text-gray-600
                       text-xs sm:text-sm
                       leading-6
                       md:max-w-md"
                        style="text-align: justify;"
            >
                Cada letra representa un principio que guía nuestra
                forma de planear, ejecutar y supervisar cada proyecto.
            </p>

        </div>



        {{-- =====================================================
             LETRAS ARCOS
        ===================================================== --}}
        <div
            class="grid
                   grid-cols-5
                   bg-[#15297C]
                   border
                   border-[#15297C]
                   overflow-hidden"
            data-aos="fade-up"
            data-aos-duration="900"
        >

            {{-- A --}}
            <div
                class="arcos-letter
                       group
                       relative
                       overflow-hidden
                       flex
                       items-center
                       justify-center
                       py-5 sm:py-6 md:py-8
                       border-r
                       border-white/15"
            >

                <div
                    class="absolute
                           inset-0
                           bg-yellow-400
                           translate-y-full
                           transition-transform
                           duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative
                           z-10
                           text-white
                           text-3xl md:text-5xl
                           font-black
                           transition-all
                           duration-500
                           group-hover:text-black
                           group-hover:scale-125"
                >
                    A
                </span>

            </div>


            {{-- R --}}
            <div
                class="arcos-letter
                       group
                       relative
                       overflow-hidden
                       flex items-center justify-center
                       py-5 sm:py-6 md:py-8
                       border-r border-white/15"
            >

                <div
                    class="absolute inset-0
                           bg-white
                           translate-y-full
                           transition-transform duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative z-10
                           text-white
                           text-3xl md:text-5xl
                           font-black
                           transition-all duration-500
                           group-hover:text-[#15297C]
                           group-hover:scale-125"
                >
                    R
                </span>

            </div>


            {{-- C --}}
            <div
                class="arcos-letter
                       group
                       relative
                       overflow-hidden
                       flex items-center justify-center
                       py-5 sm:py-6 md:py-8
                       border-r border-white/15"
            >

                <div
                    class="absolute inset-0
                           bg-yellow-400
                           translate-y-full
                           transition-transform duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative z-10
                           text-white
                           text-3xl md:text-5xl
                           font-black
                           transition-all duration-500
                           group-hover:text-black
                           group-hover:scale-125"
                >
                    C
                </span>

            </div>


            {{-- O --}}
            <div
                class="arcos-letter
                       group
                       relative
                       overflow-hidden
                       flex items-center justify-center
                       py-5 sm:py-6 md:py-8
                       border-r border-white/15"
            >

                <div
                    class="absolute inset-0
                           bg-white
                           translate-y-full
                           transition-transform duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative z-10
                           text-white
                           text-3xl md:text-5xl
                           font-black
                           transition-all duration-500
                           group-hover:text-[#15297C]
                           group-hover:scale-125"
                >
                    O
                </span>

            </div>


            {{-- S --}}
            <div
                class="arcos-letter
                       group
                       relative
                       overflow-hidden
                       flex items-center justify-center
                       py-5 sm:py-6 md:py-8"
            >

                <div
                    class="absolute inset-0
                           bg-yellow-400
                           translate-y-full
                           transition-transform duration-500
                           group-hover:translate-y-0"
                ></div>

                <span
                    class="relative z-10
                           text-white
                           text-3xl md:text-5xl
                           font-black
                           transition-all duration-500
                           group-hover:text-black
                           group-hover:scale-125"
                >
                    S
                </span>

            </div>

        </div>



        {{-- =====================================================
             VALORES
        ===================================================== --}}
        <div
            class="grid
                   grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-5
                   border-x
                   border-b
                   border-gray-200
                   bg-white"
        >

            {{-- A --}}
            <article
                class="valor-arcos
                       group
                       relative
                       overflow-hidden
                       p-6
                       border-b
                       sm:border-r
                       lg:border-b-0
                       border-gray-200
                       transition-all
                       duration-500
                       hover:bg-[#15297C]
                       hover:-translate-y-1"
                data-aos="fade-up"
                data-aos-delay="0"
            >

                <span
                    class="absolute
                           -right-2
                           -top-7
                           text-[100px]
                           font-black
                           text-[#15297C]/[0.03]
                           transition-all
                           duration-500
                           group-hover:text-white/[0.05]"
                >
                    A
                </span>

                <p
                    class="relative
                           text-yellow-500
                           text-[9px]
                           uppercase
                           tracking-[0.18em]
                           font-black"
                >
                    A
                </p>

                <h3
                    class="relative
                           text-black
                           text-base
                           font-black
                           uppercase
                           mt-2
                           transition-colors
                           duration-500
                           group-hover:text-white"
                >
                    Alta calidad
                </h3>

                <p
                    class="relative
                           text-gray-600
                           text-sm
                           leading-6
                           mt-4
                           transition-colors
                           duration-500
                           group-hover:text-white/75"
                            style="text-align: justify;"
                >
                    Aplicamos criterios de ingeniería, inspección y control
                    para asegurar materiales, procesos y resultados conforme
                    a las especificaciones del proyecto.
                </p>

            </article>


            {{-- R --}}
            <article
                class="valor-arcos
                       group
                       relative
                       overflow-hidden
                       p-6
                       border-b
                       lg:border-b-0
                       lg:border-r
                       border-gray-200
                       transition-all duration-500
                       hover:bg-[#15297C]
                       hover:-translate-y-1"
                data-aos="fade-up"
                data-aos-delay="100"
            >

                <span
                    class="absolute
                           -right-2
                           -top-7
                           text-[100px]
                           font-black
                           text-[#15297C]/[0.03]
                           transition-all duration-500
                           group-hover:text-white/[0.05]"
                >
                    R
                </span>

                <p
                    class="relative
                           text-yellow-500
                           text-[9px]
                           uppercase
                           tracking-[0.18em]
                           font-black"
                >
                    R
                </p>

                <h3
                    class="relative
                           text-black
                           text-base
                           font-black
                           uppercase
                           mt-2
                           transition-colors duration-500
                           group-hover:text-white"
                >
                    Responsabilidad
                </h3>

                <p
                    class="relative
                           text-gray-600
                           text-sm leading-6 mt-4
                           transition-colors duration-500
                           group-hover:text-white/75"
                            style="text-align: justify;"
                >
                    Gestionamos cada obra con ética, trazabilidad,
                    disciplina técnica y respeto por las personas,
                    las comunidades y el entorno.
                </p>

            </article>


            {{-- C --}}
            <article
                class="valor-arcos
                       group
                       relative
                       overflow-hidden
                       p-6
                       border-b
                       sm:border-r
                       lg:border-b-0
                       border-gray-200
                       transition-all duration-500
                       hover:bg-[#15297C]
                       hover:-translate-y-1"
                data-aos="fade-up"
                data-aos-delay="200"
            >

                <span
                    class="absolute
                           -right-2
                           -top-7
                           text-[100px]
                           font-black
                           text-[#15297C]/[0.03]
                           transition-all duration-500
                           group-hover:text-white/[0.05]"
                >
                    C
                </span>

                <p
                    class="relative
                           text-yellow-500
                           text-[9px]
                           uppercase
                           tracking-[0.18em]
                           font-black"
                >
                    C
                </p>

                <h3
                    class="relative
                           text-black
                           text-base
                           font-black
                           uppercase
                           mt-2
                           transition-colors duration-500
                           group-hover:text-white"
                >
                    Compromiso
                </h3>

                <p
                    class="relative
                           text-gray-600
                           text-sm
                           leading-6
                           mt-4
                           transition-colors duration-500
                           group-hover:text-white/75"
                            style="text-align: justify;"
                >
                    Damos seguimiento constante a alcances, entregables,
                    especialidades y programa de obra para cumplir
                    cada compromiso adquirido.
                </p>

            </article>


            {{-- O --}}
            <article
                class="valor-arcos
                       group
                       relative
                       overflow-hidden
                       p-6
                       border-b
                       lg:border-b-0
                       lg:border-r
                       border-gray-200
                       transition-all duration-500
                       hover:bg-[#15297C]
                       hover:-translate-y-1"
                data-aos="fade-up"
                data-aos-delay="300"
            >

                <span
                    class="absolute
                           -right-2
                           -top-7
                           text-[100px]
                           font-black
                           text-[#15297C]/[0.03]
                           transition-all duration-500
                           group-hover:text-white/[0.05]"
                >
                    O
                </span>

                <p
                    class="relative
                           text-yellow-500
                           text-[9px]
                           uppercase
                           tracking-[0.18em]
                           font-black"
                >
                    O
                </p>

                <h3
                    class="relative
                           text-black
                           text-base
                           font-black
                           uppercase
                           mt-2
                           transition-colors duration-500
                           group-hover:text-white"
                >
                    Orden
                </h3>

                <p
                    class="relative
                           text-gray-600
                           text-sm
                           leading-6
                           mt-4
                           transition-colors duration-500
                           group-hover:text-white/75"
                            style="text-align: justify;"
                >
                    Organizamos recursos, frentes y secuencias de ejecución
                    mediante planeación, supervisión y control técnico.
                </p>

            </article>


            {{-- S --}}
            <article
                class="valor-arcos
                       group
                       relative
                       overflow-hidden
                       p-6
                       transition-all
                       duration-500
                       hover:bg-[#15297C]
                       hover:-translate-y-1"
                data-aos="fade-up"
                data-aos-delay="400"
            >

                <span
                    class="absolute
                           -right-2
                           -top-7
                           text-[100px]
                           font-black
                           text-[#15297C]/[0.03]
                           transition-all duration-500
                           group-hover:text-white/[0.05]"
                >
                    S
                </span>

                <p
                    class="relative
                           text-yellow-500
                           text-[9px]
                           uppercase
                           tracking-[0.18em]
                           font-black"
                >
                    S
                </p>

                <h3
                    class="relative
                           text-black
                           text-base
                           font-black
                           uppercase
                           mt-2
                           transition-colors duration-500
                           group-hover:text-white"
                >
                    Seguridad
                </h3>

                <p
                    class="relative
                           text-gray-600
                           text-sm
                           leading-6
                           mt-4
                           transition-colors duration-500
                           group-hover:text-white/75"
                            style="text-align: justify;"
                >
                    Aplicamos medidas preventivas, análisis de riesgos
                    y control operativo para una ejecución segura
                    en cada frente de trabajo.
                </p>

            </article>

        </div>

    </div>

</section>



{{-- ============================================================
     CTA FINAL
============================================================ --}}
<section
    class="relative
           bg-black
           py-14 sm:py-16 md:py-20 lg:py-24
           overflow-hidden"
>

    {{-- RESPLANDOR --}}
    <div
        class="absolute
               right-[-150px]
               top-1/2
               -translate-y-1/2
               w-[400px]
               h-[400px]
               bg-[#15297C]/10
               rounded-full
               blur-[100px]
               pointer-events-none"
    ></div>


    {{-- DECORACIÓN --}}
    <div
        class="nosotros-float-cta
               absolute
               right-[-100px]
               top-[-100px]
               w-72
               h-72
               border
               border-[#15297C]/30
               rotate-45"
    ></div>


    <div
        class="relative
               z-10
               w-full
               max-w-[1440px]
               mx-auto
               px-4 sm:px-6 lg:px-8 xl:px-10"
    >

        <div
            class="group
                   relative
                   overflow-hidden
                   border
                   border-white/10
                   p-7 sm:p-9 md:p-10 lg:p-12
                   transition-all
                   duration-700
                   hover:border-[#15297C]/70"
            data-aos="zoom-in"
            data-aos-duration="1000"
        >

            {{-- FONDO HOVER --}}
            <div
                class="absolute
                       inset-0
                       bg-[#15297C]/[0.05]
                       translate-y-full
                       transition-transform
                       duration-700
                       group-hover:translate-y-0"
            ></div>


            {{-- LÍNEA SUPERIOR --}}
            <div
                class="absolute
                       top-0 left-0
                       w-full
                       h-[3px]
                       bg-[#15297C]"
            >
                <div
                    class="nosotros-cta-line
                           h-full
                           bg-yellow-400"
                ></div>
            </div>


            <div
                class="relative
                       z-10
                       flex
                       flex-col
                       lg:flex-row
                       lg:items-center
                       lg:justify-between
                       gap-8"
            >

                <div
                    class="max-w-3xl"
                    data-aos="fade-right"
                    data-aos-delay="150"
                >

                    <p
                        class="text-yellow-400
                               text-[9px] sm:text-[10px]
                               uppercase
                               tracking-[0.22em]
                               font-black
                               mb-4"
                    >
                        Construyamos el siguiente proyecto
                    </p>


                    <h2
                        class="text-white
                               text-xl sm:text-2xl md:text-3xl lg:text-4xl
                               font-black
                               uppercase
                               leading-tight"
                    >
                        Convertimos desafíos en

                        <span class="text-[#15297C]">
                            soluciones constructivas
                        </span>
                    </h2>

                </div>


                <a
                    href="{{ route('contacto') }}"
                    class="group/btn
                           relative
                           overflow-hidden
                           inline-flex
                           w-full sm:w-auto
                           shrink-0
                           items-center
                           justify-center
                           gap-5
                           border
                           border-yellow-400
                           text-yellow-400
                           px-7 sm:px-8
                           py-4
                           text-[10px] sm:text-xs
                           uppercase
                           tracking-[0.17em]
                           font-black
                           transition-all
                           duration-500
                           hover:-translate-y-1
                           hover:shadow-[0_15px_40px_rgba(0,0,0,0.3)]"
                    data-aos="fade-left"
                    data-aos-delay="200"
                >

                    {{-- FONDO ANIMADO --}}
                    <span
                        class="absolute
                               inset-0
                               bg-yellow-400
                               translate-y-full
                               transition-transform
                               duration-500
                               group-hover/btn:translate-y-0"
                    ></span>


                    <span
                        class="relative z-10
                               transition-colors
                               duration-500
                               group-hover/btn:text-black"
                    >
                        Contactar
                    </span>


                    <span
                        class="relative z-10
                               transition-all
                               duration-500
                               group-hover/btn:text-black
                               group-hover/btn:translate-x-2"
                    >
                        →
                    </span>

                </a>

            </div>

        </div>

    </div>

</section>

</main>



{{-- ============================================================
     EFECTOS PERSONALIZADOS
============================================================ --}}

<style>
/* ============================================
   BLR ARCOS · NOSOTROS
   RESPONSIVE + CONTENIDO SIEMPRE VISIBLE
============================================ */

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

/* ============================================
   DESACTIVAR APARICIÓN Y DESAPARICIÓN
============================================ */

[data-aos],
[data-aos].aos-init,
[data-aos].aos-animate,
.blr-reveal,
.blr-reveal.from-left,
.blr-reveal.from-right,
.blr-reveal.zoom-soft,
.blr-reveal.is-visible {
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
    transition: none !important;
    animation: none !important;
    will-change: auto !important;
}

/* ============================================
   HERO · HERRAMIENTAS TÉCNICAS
============================================ */

.nosotros-tools {
    display: block;
    position: absolute;
    right: 12%;
    top: 50%;
    width: 45%;
    max-width: 620px;
    z-index: 1;
    opacity: .84;
    transform: translateY(-50%);
    filter: drop-shadow(
        0 22px 42px rgba(0,0,0,.28)
    );
    animation: toolsFloat 8s ease-in-out infinite;
    pointer-events: none;
    user-select: none;
}

.nosotros-tools::before {
    content: "";
    position: absolute;
    inset: 12% 8%;
    background: radial-gradient(
        circle,
        rgba(21,41,124,.22),
        transparent 68%
    );
    filter: blur(30px);
}

.nosotros-tools svg {
    position: relative;
    z-index: 2;
    display: block;
    width: 100%;
    height: auto;
    overflow: visible;
}

/* ============================================
   ELEMENTOS ANIMADOS DEL HERO
============================================ */

.tools-grid {
    animation: toolsGrid 6s ease-in-out infinite;
}

.tool-helmet {
    transform-origin: 480px 175px;
    animation: helmetFloat 5.5s ease-in-out infinite;
}

.tool-square {
    transform-origin: 215px 250px;
    animation: squareMove 7s ease-in-out infinite;
}

.tool-hammer {
    transform-origin: 575px 230px;
    animation: hammerMove 4.8s ease-in-out infinite;
}

.tool-wrench {
    transform-origin: 180px 170px;
    animation: wrenchMove 6.5s ease-in-out infinite;
}

.tool-tape {
    animation: tapeBody 5s ease-in-out infinite;
}

.tape-line {
    stroke-dasharray: 100;
    stroke-dashoffset: 65;
    animation: tapeExtend 4s ease-in-out infinite;
}

.tool-pencil {
    transform-origin: 350px 300px;
    animation: pencilMove 5.8s ease-in-out infinite;
}

.pencil-trace {
    stroke-dasharray: 130;
    stroke-dashoffset: 130;
    animation: pencilDraw 5.8s ease-in-out infinite;
}

.tool-plans {
    animation: plansPulse 7s ease-in-out infinite;
}

.tool-node {
    animation: toolNodePulse 2.8s ease-in-out infinite;
}

.node-two {
    animation-delay: 1.2s;
}

/* ============================================
   ANIMACIONES DE HERRAMIENTAS
============================================ */

@keyframes toolsFloat {
    0%, 100% {
        transform: translateY(-50%);
    }
    50% {
        transform: translateY(calc(-50% - 7px));
    }
}

@keyframes toolsGrid {
    0%, 100% { opacity: .07; }
    50% { opacity: .15; }
}

@keyframes helmetFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
}

@keyframes squareMove {
    0%, 100% {
        transform: translate(0,0) rotate(0);
    }
    50% {
        transform: translate(7px,-5px) rotate(2deg);
    }
}

@keyframes hammerMove {
    0%, 100% { transform: rotate(0); }
    45% { transform: rotate(-5deg); }
    60% { transform: rotate(2deg); }
}

@keyframes wrenchMove {
    0%, 100% {
        transform: rotate(0) translateY(0);
    }
    50% {
        transform: rotate(4deg) translateY(-5px);
    }
}

@keyframes tapeBody {
    0%, 100% { transform: translateX(0); }
    50% { transform: translateX(-4px); }
}

@keyframes tapeExtend {
    0%, 100% { stroke-dashoffset: 75; }
    45%, 60% { stroke-dashoffset: 0; }
}

@keyframes pencilMove {
    0%, 100% { transform: translate(0,0); }
    45% { transform: translate(12px,3px); }
    60% { transform: translate(18px,-2px); }
}

@keyframes pencilDraw {
    0%, 15% { stroke-dashoffset: 130; }
    55%, 80% { stroke-dashoffset: 0; }
    100% { stroke-dashoffset: -130; }
}

@keyframes plansPulse {
    0%, 100% { opacity: .55; }
    50% { opacity: .9; }
}

@keyframes toolNodePulse {
    0%, 100% {
        opacity: .3;
        transform: scale(.8);
    }
    50% {
        opacity: 1;
        transform: scale(1.35);
    }
}

/* ============================================
   RESPLANDOR HERO
============================================ */

@keyframes nosotrosGlow {
    0%, 100% {
        opacity: .55;
        transform: translateY(-50%) scale(1);
    }
    50% {
        opacity: .9;
        transform: translateY(-50%) scale(1.12);
    }
}

.nosotros-glow {
    animation: nosotrosGlow 7s ease-in-out infinite;
}

/* ============================================
   LÍNEA INFERIOR HERO
============================================ */

@keyframes nosotrosLine {
    0%, 100% { width: 5%; }
    50% { width: 13%; }
}

.nosotros-line {
    animation: nosotrosLine 5s ease-in-out infinite;
}

/* ============================================
   LÍNEA SUBTÍTULO
============================================ */

@keyframes subtitlePulse {
    0%, 100% { opacity: .7; }
    50% { opacity: 1; }
}

.nosotros-subline {
    animation: subtitlePulse 2.5s ease-in-out infinite;
}

/* ============================================
   LÍNEA QUIÉNES SOMOS
============================================ */

@keyframes titleLine {
    0%, 100% { width: 3.5rem; }
    50% { width: 5rem; }
}

.nosotros-title-line {
    animation: titleLine 4s ease-in-out infinite;
}

/* ============================================
   GALERÍA
============================================ */

@keyframes galleryFrame {
    0%, 100% { transform: translate(0,0); }
    50% { transform: translate(5px,5px); }
}

.nosotros-gallery-frame {
    animation: galleryFrame 5s ease-in-out infinite;
}

@keyframes galleryShine {
    0%, 45% { left: -120%; }
    65%, 100% { left: 160%; }
}

.nosotros-gallery-shine {
    animation: galleryShine 7s ease-in-out infinite;
}

/* Mantener transiciones de fotografías */

#galeriaNosotros .galeria-nosotros-imagen {
    transition:
        opacity 1.5s ease-in-out,
        transform 1.5s ease-in-out;
}

/* ============================================
   CTA FINAL
============================================ */

@keyframes nosotrosCTAFloat {
    0%, 100% {
        transform: rotate(45deg) translateY(0);
    }
    50% {
        transform: rotate(48deg) translateY(-15px);
    }
}

.nosotros-float-cta {
    animation: nosotrosCTAFloat 9s ease-in-out infinite;
}

@keyframes ctaLine {
    0%, 100% { width: 10%; }
    50% { width: 22%; }
}

.nosotros-cta-line {
    animation: ctaLine 5s ease-in-out infinite;
}

/* ============================================
   LAPTOP
============================================ */

@media (min-width: 1024px) and (max-width: 1199px) {
    .nosotros-tools {
        width: 49%;
        max-width: 580px;
        right: -3%;
        top: 50%;
        opacity: .68;
    }
}

/* ============================================
   TABLET
============================================ */

@media (min-width: 768px) and (max-width: 1023px) {
    .nosotros-tools {
        display: block !important;
        width: 500px;
        max-width: none;
        right: -115px;
        top: 53%;
        opacity: .23;
        filter: none;
    }

    .nosotros-tools::before {
        opacity: .45;
    }

    .nosotros-tools > div {
        display: none;
    }

    #nosotros {
        padding-top: 64px;
        padding-bottom: 64px;
    }

    #galeriaNosotros {
        width: 100%;
        min-height: 480px;
    }
}

/* ============================================
   MÓVIL
============================================ */

@media (max-width: 767px) {

    /* HERO */

    main > section:first-of-type {
        min-height: 520px;
        padding-top: 80px;
    }

    main > section:first-of-type > .relative.z-20 {
        position: relative;
        z-index: 20;
        padding-left: 20px;
        padding-right: 20px;
    }

    main > section:first-of-type h1 {
        font-size: clamp(2.7rem, 14vw, 4.5rem);
        line-height: .9;
        overflow-wrap: normal;
        word-break: normal;
    }

    .nosotros-subline + p {
        max-width: 270px;
        font-size: .95rem;
        line-height: 1.35;
    }

    /* HERRAMIENTAS */

    .nosotros-tools {
        display: block !important;
        width: 315px;
        max-width: none;
        right: -78px;
        top: auto;
        bottom: 20px;
        opacity: .19;
        transform: none;
        filter: none;
        animation: none;
    }

    .nosotros-tools::before {
        opacity: .32;
        filter: blur(22px);
    }

    .nosotros-tools > div {
        display: none;
    }

    /* QUIÉNES SOMOS */

    #nosotros {
        padding-top: 56px;
        padding-bottom: 56px;
    }

    #nosotros h2 {
        font-size: 1.75rem;
        line-height: 1.08;
    }

    #nosotros p {
        text-align: left !important;
    }

    .nosotros-capacidad {
        min-width: 0;
    }

    .nosotros-capacidad span:last-child {
        overflow-wrap: break-word;
        word-break: normal;
    }

    /* GALERÍA */

    #galeriaNosotros {
        width: 100%;
        min-height: 360px !important;
    }

    #galeriaNosotros img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .nosotros-gallery-frame {
        right: -7px !important;
        bottom: -7px !important;
    }

    #galeriaNosotros .absolute.bottom-0.left-0 {
        max-width: calc(100% - 20px);
    }

    /* MISIÓN Y VISIÓN */

    main > section:nth-of-type(3) p {
        text-align: left !important;
    }

    main > section:nth-of-type(3) article {
        min-width: 0;
    }

    main > section:nth-of-type(3) article > p:last-of-type {
        text-align: left !important;
    }

    main > section:nth-of-type(3) article > span.absolute {
        right: 4px;
        font-size: 95px !important;
    }

    /* VALORES ARCOS */

    main > section:nth-of-type(4)
    > div > div:first-child p {
        text-align: left !important;
    }

    .arcos-letter {
        min-width: 0;
        padding-left: 0;
        padding-right: 0;
    }

    .arcos-letter > span {
        font-size: 1.65rem !important;
    }

    .valor-arcos {
        min-width: 0;
        padding: 24px 20px;
    }

    .valor-arcos p {
        text-align: left !important;
    }

    .valor-arcos > span.absolute {
        font-size: 80px;
    }

    /* CTA */

    main > section:last-of-type {
        padding-top: 56px;
        padding-bottom: 56px;
    }

    main > section:last-of-type h2 {
        font-size: 1.75rem;
        line-height: 1.1;
    }

    main > section:last-of-type a {
        width: 100%;
    }
}

/* ============================================
   MÓVIL MENOR A 640PX
============================================ */

@media (max-width: 639px) {
    #nosotros p,
    .valor-arcos p,
    main section article p {
        text-align: left !important;
        text-justify: auto !important;
    }

    .arcos-letter {
        padding-top: 18px;
        padding-bottom: 18px;
    }

    .arcos-letter > span {
        font-size: 1.55rem !important;
    }

    #galeriaNosotros {
        min-height: 360px !important;
    }
}

/* ============================================
   CELULARES PEQUEÑOS
============================================ */

@media (max-width: 374px) {
    main > section:first-of-type {
        min-height: 520px;
    }

    main > section:first-of-type > .relative.z-20 {
        padding-left: 16px;
        padding-right: 16px;
    }

    main > section:first-of-type h1 {
        font-size: 2.65rem;
    }

    .nosotros-tools {
        width: 285px;
        right: -75px;
        bottom: 22px;
        opacity: .17;
    }

    #galeriaNosotros {
        min-height: 320px !important;
    }

    .valor-arcos {
        padding: 22px 18px;
    }

    .arcos-letter > span {
        font-size: 1.4rem !important;
    }

    main > section:last-of-type h2 {
        font-size: 1.55rem;
    }
}

/* ============================================
   DESKTOP GRANDE
============================================ */

@media (min-width: 1536px) {
    .nosotros-tools {
        width: 46%;
        max-width: 650px;
        right: 3%;
    }
}

/* ============================================
   DISPOSITIVOS TÁCTILES
============================================ */

@media (hover: none) {
    .nosotros-capacidad:hover,
    .valor-arcos:hover {
        transform: none;
    }
}

/* ============================================
   REDUCIR MOVIMIENTO
============================================ */

@media (prefers-reduced-motion: reduce) {
    .nosotros-tools,
    .tools-grid,
    .tool-helmet,
    .tool-square,
    .tool-hammer,
    .tool-wrench,
    .tool-tape,
    .tape-line,
    .tool-pencil,
    .pencil-trace,
    .tool-plans,
    .tool-node,
    .nosotros-glow,
    .nosotros-line,
    .nosotros-subline,
    .nosotros-title-line,
    .nosotros-gallery-frame,
    .nosotros-gallery-shine,
    .nosotros-float-cta,
    .nosotros-cta-line {
        animation: none !important;
    }

    #galeriaNosotros .galeria-nosotros-imagen {
        transition: none !important;
    }
}

</style>



{{-- ============================================================
     JAVASCRIPT GALERÍA NOSOTROS
============================================================ --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ============================================================
       BLR ARCOS · NOSOTROS
       CONTENIDO SIEMPRE VISIBLE
       GALERÍA AUTOMÁTICA
    ============================================================ */

    /* ============================================================
       1. DESACTIVAR REVEAL ANTERIOR
    ============================================================ */

    document.querySelectorAll(
        '.blr-reveal, [data-aos]'
    ).forEach(function (elemento) {

        elemento.classList.remove(
            'blr-reveal',
            'from-left',
            'from-right',
            'zoom-soft'
        );

        elemento.classList.add('is-visible');

        elemento.style.removeProperty('--blr-delay');

    });

    /*
       Ya no utilizamos IntersectionObserver
       para ocultar textos, imágenes o tarjetas.

       Las secciones permanecen visibles
       al bajar y subir por la página.
    */


    /* ============================================================
       2. GALERÍA NOSOTROS
    ============================================================ */

    const galeria = document.getElementById(
        'galeriaNosotros'
    );

    if (!galeria) {
        return;
    }

    const imagenes = Array.from(
        galeria.querySelectorAll(
            '.galeria-nosotros-imagen'
        )
    );

    const dots = Array.from(
        galeria.querySelectorAll(
            '.galeria-nosotros-dot'
        )
    );

    const contador = document.getElementById(
        'galeriaNosotrosActual'
    );

    const progreso = document.getElementById(
        'galeriaNosotrosProgress'
    );

    if (!imagenes.length) {
        return;
    }


    /* ============================================================
       3. CONFIGURACIÓN
    ============================================================ */

    const tiempoCambio = 4500;

    let actual = 0;
    let intervalo = null;
    let galeriaVisible = true;
    let mouseEncima = false;

    let inicioCiclo = 0;
    let tiempoRestante = tiempoCambio;

    let animacionProgreso = null;


    /* ============================================================
       4. ACTUALIZAR IMAGEN
    ============================================================ */

    function mostrarImagen(index) {

        if (
            !Number.isInteger(index) ||
            index < 0 ||
            index >= imagenes.length
        ) {
            return;
        }

        imagenes.forEach(function (imagen, i) {

            const activa = i === index;

            imagen.classList.toggle(
                'opacity-100',
                activa
            );

            imagen.classList.toggle(
                'scale-100',
                activa
            );

            imagen.classList.toggle(
                'opacity-0',
                !activa
            );

            imagen.classList.toggle(
                'scale-105',
                !activa
            );

        });


        /* INDICADORES */

        dots.forEach(function (dot, i) {

            const activo = i === index;

            dot.classList.toggle(
                'w-6',
                activo
            );

            dot.classList.toggle(
                'bg-white',
                activo
            );

            dot.classList.toggle(
                'w-3',
                !activo
            );

            dot.classList.toggle(
                'bg-white/30',
                !activo
            );

        });


        /* CONTADOR */

        if (contador) {

            contador.textContent = String(
                index + 1
            ).padStart(2, '0');

        }

        actual = index;

    }


    /* ============================================================
       5. SIGUIENTE IMAGEN
    ============================================================ */

    function siguienteImagen() {

        const siguiente = (
            actual + 1
        ) % imagenes.length;

        mostrarImagen(siguiente);

    }


    /* ============================================================
       6. BARRA DE PROGRESO
    ============================================================ */

    function cancelarAnimacionProgreso() {

        if (animacionProgreso !== null) {

            cancelAnimationFrame(
                animacionProgreso
            );

            animacionProgreso = null;

        }

    }


    function reiniciarProgreso(duracion = tiempoCambio) {

        if (!progreso) {
            return;
        }

        cancelarAnimacionProgreso();

        progreso.style.transition = 'none';
        progreso.style.width = '0%';

        animacionProgreso = requestAnimationFrame(
            function () {

                animacionProgreso = requestAnimationFrame(
                    function () {

                        progreso.style.transition =
                            `width ${duracion}ms linear`;

                        progreso.style.width = '100%';

                        animacionProgreso = null;

                    }
                );

            }
        );

    }


    function pausarProgreso() {

        if (!progreso) {
            return;
        }

        cancelarAnimacionProgreso();

        const anchoActual =
            progreso.getBoundingClientRect().width;

        const padre = progreso.parentElement;

        if (!padre) {
            return;
        }

        const anchoTotal =
            padre.getBoundingClientRect().width;

        if (anchoTotal <= 0) {
            return;
        }

        const porcentaje = (
            anchoActual / anchoTotal
        ) * 100;

        progreso.style.transition = 'none';

        progreso.style.width =
            Math.min(100, Math.max(0, porcentaje)) + '%';

    }


    function continuarProgreso(duracion) {

        if (!progreso) {
            return;
        }

        cancelarAnimacionProgreso();

        progreso.style.transition = 'none';

        animacionProgreso = requestAnimationFrame(
            function () {

                progreso.style.transition =
                    `width ${duracion}ms linear`;

                progreso.style.width = '100%';

                animacionProgreso = null;

            }
        );

    }


    /* ============================================================
       7. DETENER GALERÍA
    ============================================================ */

    function detenerGaleria() {

        if (intervalo !== null) {

            clearTimeout(intervalo);

            intervalo = null;

            const transcurrido =
                performance.now() - inicioCiclo;

            tiempoRestante = Math.max(
                0,
                tiempoRestante - transcurrido
            );

        }

        pausarProgreso();

    }


    /* ============================================================
       8. INICIAR / REANUDAR GALERÍA
    ============================================================ */

    function iniciarGaleria(reiniciar = false) {

        if (
            !galeriaVisible ||
            mouseEncima ||
            document.hidden ||
            imagenes.length <= 1
        ) {
            return;
        }

        if (intervalo !== null) {
            clearTimeout(intervalo);
            intervalo = null;
        }

        if (reiniciar) {

            tiempoRestante = tiempoCambio;

            reiniciarProgreso(tiempoCambio);

        } else {

            continuarProgreso(tiempoRestante);

        }

        const duracion = tiempoRestante;

        inicioCiclo = performance.now();

        intervalo = setTimeout(function () {

            intervalo = null;

            siguienteImagen();

            tiempoRestante = tiempoCambio;

            iniciarGaleria(true);

        }, duracion);

    }


    /* ============================================================
       9. SELECCIONAR IMAGEN MANUALMENTE
    ============================================================ */

    dots.forEach(function (dot, i) {

        dot.addEventListener('click', function () {

            const atributo = this.getAttribute(
                'data-index'
            );

            const indice = atributo !== null
                ? Number(atributo)
                : i;

            if (
                !Number.isInteger(indice) ||
                indice < 0 ||
                indice >= imagenes.length
            ) {
                return;
            }

            detenerGaleria();

            mostrarImagen(indice);

            tiempoRestante = tiempoCambio;

            reiniciarProgreso(tiempoCambio);

            if (!mouseEncima) {
                iniciarGaleria(true);
            }

        });

    });


    /* ============================================================
       10. PAUSA CON MOUSE
    ============================================================ */

    if (
        window.matchMedia(
            '(hover: hover)'
        ).matches
    ) {

        galeria.addEventListener(
            'mouseenter',
            function () {

                mouseEncima = true;

                detenerGaleria();

            }
        );

        galeria.addEventListener(
            'mouseleave',
            function () {

                mouseEncima = false;

                iniciarGaleria();

            }
        );

    }


    /* ============================================================
       11. PAUSAR GALERÍA FUERA DE PANTALLA
    ============================================================ */

    if ('IntersectionObserver' in window) {

        const galeriaObserver =
            new IntersectionObserver(

                function (entries) {

                    entries.forEach(function (entry) {

                        galeriaVisible =
                            entry.isIntersecting;

                        if (galeriaVisible) {

                            iniciarGaleria();

                        } else {

                            detenerGaleria();

                        }

                    });

                },

                {
                    threshold: 0.15
                }

            );

        galeriaObserver.observe(galeria);

    }


    /* ============================================================
       12. PAUSAR SI LA PESTAÑA ESTÁ OCULTA
    ============================================================ */

    document.addEventListener(
        'visibilitychange',
        function () {

            if (document.hidden) {

                detenerGaleria();

            } else {

                iniciarGaleria();

            }

        }
    );


    /* ============================================================
       13. INICIALIZACIÓN
    ============================================================ */

    mostrarImagen(0);

    tiempoRestante = tiempoCambio;

    reiniciarProgreso(tiempoCambio);

    iniciarGaleria(true);

});
</script>


@endsection
