@extends('layouts.app')



@section('title', 'Proyectos | BLR & ARCOS')



@section('content')



{{-- ============================================================
     HERO
============================================================ --}}
<section
    data-reveal-section="hero"
    class="relative
          min-h-[520px]
sm:min-h-[520px]
md:min-h-[540px]
lg:min-h-[580px]
           flex
           items-center
           overflow-hidden
           bg-black
           pt-16
           sm:pt-20"
>
{{-- FONDO --}}
    <div class="absolute inset-0 bg-black"></div>
{{-- ============================================================
         VISUAL PROYECTOS · DEL PLANO A LA OBRA
    ============================================================ --}}
    <div
    class="project-vision absolute
           right-[2%]
           lg:right-[5%]
           xl:right-[8%]
           top-1/2
           block
           w-[52%]
           lg:w-[49%]
           xl:w-[47%]
           max-w-[690px]
           pointer-events-none
           select-none"
    aria-hidden="true"
>
        <div class="project-vision-glow"></div>

        <svg class="project-vision-svg w-full h-auto" viewBox="0 0 820 470" fill="none" xmlns="http://www.w3.org/2000/svg">
            {{-- Retícula de plano --}}
            <g class="pv-grid" opacity=".12">
                <path d="M75 75H770M75 125H770M75 175H770M75 225H770M75 275H770M75 325H770M75 375H770" stroke="white" stroke-dasharray="3 12"/>
                <path d="M120 48V405M190 48V405M260 48V405M330 48V405M400 48V405M470 48V405M540 48V405M610 48V405M680 48V405" stroke="white" stroke-dasharray="3 12"/>
            </g>

            {{-- Ejes / cotas --}}
            <g class="pv-dimensions" opacity=".38" stroke="white" stroke-width="1.2">
                <path d="M120 410H680" stroke-dasharray="6 8"/>
                <path d="M120 400V420M680 400V420"/>
                <path d="M95 105V360" stroke-dasharray="6 8"/>
                <path d="M85 105H105M85 360H105"/>
            </g>
            <g fill="white" opacity=".45" font-family="Arial, sans-serif" font-size="9" letter-spacing="2">
                <text x="350" y="433">PROYECTO / EJECUCIÓN</text>
                <text x="62" y="255" transform="rotate(-90 62 255)">CONTROL DE OBRA</text>
            </g>

            {{-- Plano base isométrico --}}
            <g class="pv-blueprint" stroke="#ffffff" stroke-opacity=".32" stroke-width="1.5">
                <path class="pv-draw pv-d1" d="M180 330L390 215L650 320L438 438Z"/>
                <path class="pv-draw pv-d2" d="M180 330L180 300L390 187L650 290L650 320"/>
                <path class="pv-draw pv-d3" d="M250 292L250 258M320 254L320 221M390 216L390 180M470 248L470 212M550 280L550 245"/>
            </g>

            {{-- Cimentación --}}
            <g class="pv-foundation">
                <path class="pv-draw pv-d2" d="M238 345L438 238L592 301L391 410Z" stroke="#5369D8" stroke-width="3"/>
                <path class="pv-draw pv-d3" d="M238 345L238 363L391 429L592 319L592 301" stroke="#5369D8" stroke-opacity=".72" stroke-width="2"/>
            </g>

            {{-- Columnas que se levantan --}}
            <g class="pv-columns" stroke="white" stroke-width="4" stroke-linecap="square">
                <path d="M278 344V210"/>
                <path d="M375 292V138"/>
                <path d="M475 337V184"/>
                <path d="M555 294V166"/>
            </g>

            {{-- Trabes --}}
            <g class="pv-beams" stroke="#ffffff" stroke-opacity=".86" stroke-width="3">
                <path d="M278 210L375 158L555 230L475 274Z"/>
                <path d="M278 255L375 203L555 275L475 319Z"/>
                <path d="M375 158V203M555 230V275M278 210V255M475 274V319"/>
            </g>

            {{-- Losas / niveles --}}
            <g class="pv-floors" fill="#15297C" fill-opacity=".14" stroke="#5369D8" stroke-width="2">
                <path d="M267 255L375 196L568 273L475 326Z"/>
                <path d="M267 210L375 151L568 228L475 281Z"/>
            </g>

            {{-- Núcleo estructural --}}
            <g class="pv-core" stroke="#ffffff" stroke-opacity=".5" stroke-width="1.7">
                <path d="M391 282V176L432 154V265Z"/>
                <path d="M432 154L468 168V249L432 265"/>
                <path d="M391 176L427 190L468 168"/>
            </g>

            {{-- Grúa mínima --}}
            <g class="pv-crane" stroke="white" stroke-opacity=".58" stroke-width="2">
                <path d="M650 115V314M650 115H765M650 115L690 83M690 83L765 115"/>
                <path d="M735 115V190"/>
                <path d="M727 190H743" stroke="#FACC15" stroke-width="2.5"/>
            </g>

            {{-- Escáner de progreso --}}
            <path class="pv-scan-line" d="M215 365L625 145" stroke="#FACC15" stroke-width="2" stroke-dasharray="8 12"/>
            <circle class="pv-scan-dot" cx="215" cy="365" r="5" fill="#FACC15"/>

            {{-- Marcadores --}}
            <g class="pv-markers">
                <circle cx="278" cy="210" r="5" fill="#FACC15"/>
                <circle cx="555" cy="230" r="4" fill="#5369D8"/>
                <path d="M278 210L215 176H155" stroke="white" stroke-opacity=".38"/>
                <path d="M555 230L625 205H748" stroke="white" stroke-opacity=".38"/>
                <g fill="white" font-family="Arial, sans-serif">
                    <text x="115" y="165" font-size="8" opacity=".62" letter-spacing="1.5">ESTRUCTURA</text>
                    <text x="632" y="195" font-size="8" opacity=".62" letter-spacing="1.5">EJECUCIÓN</text>
                </g>
            </g>
        </svg>

        {{-- Indicador de avance --}}
        <div class="pv-status absolute right-7 bottom-3 w-[220px]">
            <div class="flex items-center justify-between mb-2 text-[7px] uppercase tracking-[0.22em] text-white/40">
                <span>Desarrollo de obra</span>
                <span class="pv-percent text-yellow-400/80">00%</span>
            </div>
            <div class="h-px w-full bg-white/15 overflow-hidden">
                <div class="pv-progress h-full bg-yellow-400"></div>
            </div>
        </div>
    </div>

    {{-- CONTENIDO --}}
    <div

        class="relative

               z-10

               w-full

               max-w-[1440px]

               mx-auto

               px-4

               sm:px-6

               lg:px-8

               xl:px-10"

    >



        <div class="max-w-4xl">
{{-- ETIQUETA --}}
            <div

                class="flex

                       items-center

                       gap-3

                       sm:gap-4

                       mb-5"

            >



                <span

                    class="w-8

                           sm:w-12

                           h-[2px]

                           bg-[#15297C]"

                ></span>



                <p

                    class="text-yellow-400

                           text-[9px]

                           sm:text-[10px]

                           md:text-xs

                           uppercase

                           tracking-[0.25em]

                           font-black"

                >

                    BLR & ARCOS · CONSTRUCCIÓN Y OBRA CIVIL

                </p>



            </div>
{{-- TÍTULO PRINCIPAL --}}
            <h1

                class="text-white

                       text-4xl

                       sm:text-5xl

                       md:text-6xl

                       lg:text-7xl

                       xl:text-8xl

                       font-black

                       uppercase

                       leading-[0.9]"

            >

                Proyectos

            </h1>
{{-- SUBTÍTULO --}}
            <div

                class="mt-6

                       sm:mt-7

                       border-l-[3px]

                       border-[#15297C]

                       pl-4"

            >



                <p

                    class="text-white

                           text-base

                           sm:text-lg

                           md:text-xl

                           lg:text-2xl

                           font-black

                           uppercase

                           leading-tight"

                >

                    Experiencia construida



                    <span class="text-[#15297C]">

                        en cada obra.

                    </span>

                </p>



            </div>



        </div>



    </div>
{{-- LÍNEA INFERIOR --}}
    <div

        class="absolute

               bottom-0

               left-0

               w-full

               h-[3px]

               bg-[#15297C]"

    >

        <div class="w-[12%] h-full bg-yellow-400"></div>

    </div>



</section>







{{-- ============================================================*

     INTRO PORTAFOLIO

*============================================================ --}}

<section

    class="bg-white

           py-10

           sm:py-12

           md:py-14

           lg:py-16"

>



    <div

        class="w-full

               max-w-[1440px]

               mx-auto

               px-4

               sm:px-6

               lg:px-8

               xl:px-10"

    >



        <div

            class="flex

                   flex-col

                   md:flex-row

                   md:items-end

                   md:justify-between

                   gap-6

                   md:gap-10

                   pb-7

                   border-b

                   border-[#15297C]/20"

        >



            <div>



                <div

                    class="flex

                           items-center

                           gap-3

                           mb-3"

                >



                    <span

                        class="w-7

                               h-[2px]

                               bg-[#15297C]"

                    ></span>



                    <p

                        class="text-yellow-500

                               text-[9px]

                               sm:text-[10px]

                               uppercase

                               tracking-[0.25em]

                               font-black"

                    >

                        Portafolio de proyectos

                    </p>



                </div>
{{-- TÍTULO SECUNDARIO DISCRETO --}}
                <h2

                    class="text-black

                           text-lg

                           sm:text-xl

                           md:text-2xl

                           font-black

                           uppercase"

                >

                    Conoce nuestra experiencia en obra

                </h2>



            </div>



        </div>



    </div>



</section>







{{-- ============================================================*

     GRID PROYECTOS

*============================================================ --}}

<section

    class="bg-[#f5f5f5]

           py-12

           sm:py-14

           md:py-16

           lg:py-20

           xl:py-24"

>



    <div

        class="w-full

               max-w-[1440px]

               mx-auto

               px-4

               sm:px-6

               lg:px-8

               xl:px-10"

    >



        <div

            class="grid

                   grid-cols-1

                   md:grid-cols-2

                   xl:grid-cols-3

                   gap-5

                   sm:gap-6

                   lg:gap-7"

        >





            {{-- =====================================================*

                 PROYECTO 01

*            ===================================================== --}}

            <article

                class="group

                       bg-white

                       border

                       border-gray-200

                       overflow-hidden

                       transition-all

                       duration-300

                       hover:border-[#15297C]

                       hover:-translate-y-1

                       hover:shadow-xl"

            >



                <div

                    class="relative

                           aspect-[16/10]

                           overflow-hidden

                           bg-gray-200"

                >



                    <img

                        src="{{ asset('images/espacio_cancun/blr-espacio-cancun-elementos-constructivos.webp') }}"

                        alt="BLR Espacio Cancún"

                        class="w-full

                               h-full

                               object-cover

                               transition-transform

                               duration-700

                               group-hover:scale-105"

                    >



                    <div

                        class="absolute

                               inset-0

                               bg-gradient-to-t

                               from-black/50

                               via-transparent

                               to-transparent"

                    ></div>





                    <div

                        class="absolute

                               top-4

                               left-4

                               bg-[#15297C]

                               text-white

                               px-3

                               py-2

                               text-[9px]

                               uppercase

                               tracking-[0.18em]

                               font-black"

                    >

                        01

                    </div>



                </div>





                <div class="p-5 sm:p-6 lg:p-7">



                    <p

                        class="text-yellow-500

                               text-[9px]

                               sm:text-[10px]

                               uppercase

                               tracking-[0.2em]

                               font-black"

                    >

                        Cancún, Quintana Roo

                    </p>





                    <h3

                        class="text-black

                               text-lg

                               sm:text-xl

                               lg:text-2xl

                               font-black

                               uppercase

                               mt-3"

                    >

                        Espacio Cancún

                    </h3>





                    <div

                        class="w-10

                               h-[2px]

                               bg-[#15297C]

                               mt-4"

                    ></div>





                    <p

                        class="text-gray-600

                               text-xs

                               sm:text-sm

                               leading-6

                               mt-4"

                    >

                        Proyecto de construcción y obra civil en Cancún, con ejecución y coordinacíon de trabajos especializados conforme a los requerimientos técnicos de la obra.

                    </p>





                    <a

                         href="{{ route('proyectos.show', 'espacio-cancun') }}"

                        class="inline-flex

                               items-center

                               gap-3

                               mt-6

                               text-[#15297C]

                               text-[10px]

                               sm:text-xs

                               uppercase

                               tracking-[0.15em]

                               font-black

                               hover:text-yellow-500

                               transition-colors

                               duration-300"

                    >

                        Ver proyecto

                        <span

                            class="transition-transform

                                   duration-300

                                   group-hover:translate-x-1"

                        >

                            →

                        </span>

                    </a>



                </div>



            </article>







            {{-- =====================================================*

                 PROYECTO 02

*            ===================================================== --}}

            <article

                class="group

                       bg-white

                       border

                       border-gray-200

                       overflow-hidden

                       transition-all

                       duration-300

                       hover:border-[#15297C]

                       hover:-translate-y-1

                       hover:shadow-xl"

            >



                <div

                    class="relative

                           aspect-[16/10]

                           overflow-hidden

                           bg-gray-200"

                >



                    <img

                        src="{{ asset('images/shark_tower/blr-shark-tower-vista-general-obra.webp') }}"

                        alt="BLR Shark Tower"

                        class="w-full

                               h-full

                               object-cover

                               transition-transform

                               duration-700

                               group-hover:scale-105"

                    >



                    <div

                        class="absolute

                               inset-0

                               bg-gradient-to-t

                               from-black/50

                               via-transparent

                               to-transparent"

                    ></div>





                    <div

                        class="absolute

                               top-4

                               left-4

                               bg-[#15297C]

                               text-white

                               px-3

                               py-2

                               text-[9px]

                               uppercase

                               tracking-[0.18em]

                               font-black"

                    >

                        02

                    </div>



                </div>





                <div class="p-5 sm:p-6 lg:p-7">



                    <p

                        class="text-yellow-500

                               text-[9px]

                               sm:text-[10px]

                               uppercase

                               tracking-[0.2em]

                               font-black"

                    >

                        Cancún, Quintana Roo

                    </p>





                    <h3

                        class="text-black

                               text-lg

                               sm:text-xl

                               lg:text-2xl

                               font-black

                               uppercase

                               mt-3"

                    >

                         Shark Tower

                    </h3>





                    <div

                        class="w-10

                               h-[2px]

                               bg-[#15297C]

                               mt-4"

                    ></div>





                    <p

                        class="text-gray-600

                               text-xs

                               sm:text-sm

                               leading-6

                               mt-4"

                    >

                       Participación en proyecto de edificación vertical en Cancún, mediante trabajos de construcción y ejecución especializada para desarrollo de gran escala.

                    </p>





                    <a

                        href="{{ route('proyectos.show', 'shark-tower') }}"

                        class="inline-flex

                               items-center

                               gap-3

                               mt-6

                               text-[#15297C]

                               text-[10px]

                               sm:text-xs

                               uppercase

                               tracking-[0.15em]

                               font-black

                               hover:text-yellow-500

                               transition-colors

                               duration-300"

                    >

                        Ver proyecto

                        <span

                            class="transition-transform

                                   duration-300

                                   group-hover:translate-x-1"

                        >

                            →

                        </span>

                    </a>



                </div>



            </article>







            {{-- =====================================================*

                 PROYECTO 03

*            ===================================================== --}}

            <article

                class="group

                       bg-white

                       border

                       border-gray-200

                       overflow-hidden

                       transition-all

                       duration-300

                       hover:border-[#15297C]

                       hover:-translate-y-1

                       hover:shadow-xl"

            >



                <div

                    class="relative

                           aspect-[16/10]

                           overflow-hidden

                           bg-gray-200"

                >



                    <img

                        src="{{ asset('images/tren_maya_morelos/blr-tren-maya-p-morelos-trabajos-en-proceso.webp') }}"

                        alt="BLR Tren Maya Puerto Morelos"

                        class="w-full

                               h-full

                               object-cover

                               transition-transform

                               duration-700

                               group-hover:scale-105"

                    >



                    <div

                        class="absolute

                               inset-0

                               bg-gradient-to-t

                               from-black/50

                               via-transparent

                               to-transparent"

                    ></div>





                    <div

                        class="absolute

                               top-4

                               left-4

                               bg-[#15297C]

                               text-white

                               px-3

                               py-2

                               text-[9px]

                               uppercase

                               tracking-[0.18em]

                               font-black"

                    >

                        03

                    </div>



                </div>





                <div class="p-5 sm:p-6 lg:p-7">



                    <p

                        class="text-yellow-500

                               text-[9px]

                               sm:text-[10px]

                               uppercase

                               tracking-[0.2em]

                               font-black"

                    >

                        Puerto Morelos, Quintana Roo

                    </p>





                    <h3

                        class="text-black

                               text-lg

                               sm:text-xl

                               lg:text-2xl

                               font-black

                               uppercase

                               mt-3"

                    >

                        Tren Maya P. Morelos

                    </h3>





                    <div

                        class="w-10

                               h-[2px]

                               bg-[#15297C]

                               mt-4"

                    ></div>





                    <p

                        class="text-gray-600

                               text-xs

                               sm:text-sm

                               leading-6

                               mt-4"

                    >

                        Ejecución de estructuras de cimentación y obra civil, incluyendo trabajos especializados para infrasestructura ferroviaria en Puerto Morelos, Quintana Roo.

                    </p>





                    <a

                        href="{{ route('proyectos.show', 'tren-maya-morelos') }}"

                        class="inline-flex

                               items-center

                               gap-3

                               mt-6

                               text-[#15297C]

                               text-[10px]

                               sm:text-xs

                               uppercase

                               tracking-[0.15em]

                               font-black

                               hover:text-yellow-500

                               transition-colors

                               duration-300"

                    >

                        Ver proyecto

                        <span

                            class="transition-transform

                                   duration-300

                                   group-hover:translate-x-1"

                        >

                            →

                        </span>

                    </a>



                </div>



            </article>







            {{-- =====================================================*

                 PROYECTO 04

*            ===================================================== --}}

            <article

                class="group

                       bg-white

                       border

                       border-gray-200

                       overflow-hidden

                       transition-all

                       duration-300

                       hover:border-[#15297C]

                       hover:-translate-y-1

                       hover:shadow-xl"

            >



                <div

                    class="relative

                           aspect-[16/10]

                           overflow-hidden

                           bg-gray-200"

                >



                    <img

                        src="{{ asset('images/tren_maya_xpujil/blr-tren-maya-xpujil-area-de-trabajo.webp') }}"

                        alt="BLR Tren Maya Xpujil"

                        class="w-full

                               h-full

                               object-cover

                               transition-transform

                               duration-700

                               group-hover:scale-105"

                    >



                    <div

                        class="absolute

                               inset-0

                               bg-gradient-to-t

                               from-black/50

                               via-transparent

                               to-transparent"

                    ></div>





                    <div

                        class="absolute

                               top-4

                               left-4

                               bg-[#15297C]

                               text-white

                               px-3

                               py-2

                               text-[9px]

                               uppercase

                               tracking-[0.18em]

                               font-black"

                    >

                        04

                    </div>



                </div>





                <div class="p-5 sm:p-6 lg:p-7">



                    <p

                        class="text-yellow-500

                               text-[9px]

                               sm:text-[10px]

                               uppercase

                               tracking-[0.2em]

                               font-black"

                    >

                        Xpujil, Campeche

                    </p>





                    <h3

                        class="text-black

                               text-lg

                               sm:text-xl

                               lg:text-2xl

                               font-black

                               uppercase

                               mt-3"

                    >

                        Tren Maya Xpujil

                    </h3>





                    <div

                        class="w-10

                               h-[2px]

                               bg-[#15297C]

                               mt-4"

                    ></div>





                    <p

                        class="text-gray-600

                               text-xs

                               sm:text-sm

                               leading-6

                               mt-4"

                    >

                       Trabajos de obra civil e infraestructura con ejecucuión de cimentaciones, pilas, trabes y losas para el desarrollo de infraestructura ferroviaria.

                    </p>





                    <a

                        href="{{ route('proyectos.show', 'tren-maya-xpujil') }}"

                        class="inline-flex

                               items-center

                               gap-3

                               mt-6

                               text-[#15297C]

                               text-[10px]

                               sm:text-xs

                               uppercase

                               tracking-[0.15em]

                               font-black

                               hover:text-yellow-500

                               transition-colors

                               duration-300"

                    >

                        Ver proyecto

                        <span

                            class="transition-transform

                                   duration-300

                                   group-hover:translate-x-1"

                        >

                            →

                        </span>

                    </a>



                </div>



            </article>







            {{-- =====================================================*

                 PROYECTO 05

*            ===================================================== --}}

            <article

                class="group

                       bg-white

                       border

                       border-gray-200

                       overflow-hidden

                       transition-all

                       duration-300

                       hover:border-[#15297C]

                       hover:-translate-y-1

                       hover:shadow-xl

                       md:col-span-2

                       xl:col-span-1"

            >



                <div

                    class="relative

                           aspect-[16/10]

                           overflow-hidden

                           bg-gray-200"

                >



                    <img

                        src="{{ asset('images/vellmary_cancun/armado-acero-cimbra-obra-exterior.webp') }}"

                        alt="BLR Vellmary Cancún"

                        class="w-full

                               h-full

                               object-cover

                               transition-transform

                               duration-700

                               group-hover:scale-105"

                    >



                    <div

                        class="absolute

                               inset-0

                               bg-gradient-to-t

                               from-black/50

                               via-transparent

                               to-transparent"

                    ></div>





                    <div

                        class="absolute

                               top-4

                               left-4

                               bg-[#15297C]

                               text-white

                               px-3

                               py-2

                               text-[9px]

                               uppercase

                               tracking-[0.18em]

                               font-black"

                    >

                        05

                    </div>



                </div>





                <div class="p-5 sm:p-6 lg:p-7">



                    <p

                        class="text-yellow-500

                               text-[9px]

                               sm:text-[10px]

                               uppercase

                               tracking-[0.2em]

                               font-black"

                    >

                        Cancún, Quintana Roo

                    </p>





                    <h3

                        class="text-black

                               text-lg

                               sm:text-xl

                               lg:text-2xl

                               font-black

                               uppercase

                               mt-3"

                    >

                        Vellmary P. Cancún

                    </h3>





                    <div

                        class="w-10

                               h-[2px]

                               bg-[#15297C]

                               mt-4"

                    ></div>





                    <p

                        class="text-gray-600

                               text-xs

                               sm:text-sm

                               leading-6

                               mt-4"

                    >

                       Ejecución de obra civil y trabajos de construcción en Cancún, incluyendo cimbra de acero y concreto para elementos estructurales del proyecto.

                    </p>





                    <a

                        href="{{ route('proyectos.show', 'vellmary-cancun') }}"

                        class="inline-flex

                               items-center

                               gap-3

                               mt-6

                               text-[#15297C]

                               text-[10px]

                               sm:text-xs

                               uppercase

                               tracking-[0.15em]

                               font-black

                               hover:text-yellow-500

                               transition-colors

                               duration-300"

                    >

                        Ver proyecto

                        <span

                            class="transition-transform

                                   duration-300

                                   group-hover:translate-x-1"

                        >

                            →

                        </span>

                    </a>



                </div>



            </article>



        </div>



    </div>



</section>







{{-- ============================================================*

     CTA FINAL

*============================================================ --}}

<section

    class="relative

           overflow-hidden

           bg-black

           py-14

           sm:py-16

           md:py-20

           lg:py-24"

>
{{-- DECORACIÓN --}}
    <div

        class="hidden

               md:block

               absolute

               -right-20

               -bottom-32

               w-[350px]

               h-[350px]

               border

               border-[#15297C]/30

               rotate-12"

    ></div>





    <div

        class="relative

               z-10

               w-full

               max-w-[1440px]

               mx-auto

               px-4

               sm:px-6

               lg:px-8

               xl:px-10"

    >



        <div

            class="flex

                   flex-col

                   lg:flex-row

                   lg:items-center

                   lg:justify-between

                   gap-8

                   lg:gap-12"

        >



            <div class="max-w-3xl">



                <div

                    class="flex

                           items-center

                           gap-3

                           mb-4"

                >



                    <span class="w-8 h-[2px] bg-[#15297C]"></span>



                    <p

                        class="text-yellow-400

                               text-[9px]

                               sm:text-[10px]

                               uppercase

                               tracking-[0.22em]

                               font-black"

                    >

                        Hablemos de tu proyecto

                    </p>



                </div>
{{-- TÍTULO DEL CTA MODERADO --}}
                <h2

                    class="text-white

                           text-xl

                           sm:text-2xl

                           md:text-3xl

                           lg:text-4xl

                           font-black

                           uppercase

                           leading-tight"

                >

                    Construimos soluciones para



                    <span class="text-[#15297C]">

                        grandes proyectos

                    </span>

                </h2>





                <p

                    class="mt-5

                           max-w-xl

                           text-gray-400

                           text-xs

                           sm:text-sm

                           md:text-base

                           leading-6"

                >

                    Conoce nuestras capacidades y descubre cómo

                    podemos participar en tu próximo proyecto.

                </p>



            </div>





            <a

                href="#contacto"

                class="inline-flex

                       w-full

                       sm:w-auto

                       shrink-0

                       items-center

                       justify-center

                       gap-3

                       border

                       border-yellow-400

                       text-yellow-400

                       px-6

                       sm:px-8

                       py-4

                       text-[10px]

                       sm:text-xs

                       uppercase

                       tracking-[0.18em]

                       font-black

                       hover:bg-yellow-400

                       hover:text-black

                       transition-all

                       duration-300"

            >

                Cotizar proyecto

                <span>→</span>

            </a>



        </div>



    </div>





    <div

        class="absolute

               bottom-0

               left-0

               w-full

               h-[3px]

               bg-[#15297C]"

    >

        <div class="w-[10%] h-full bg-yellow-400"></div>

    </div>



</section>





{{-- ============================================================
     ANIMACIÓN HERO PROYECTOS · PLANO → OBRA
============================================================ --}}
<style>
/* ============================================================
   BLR ARCOS · PROYECTOS
   HERO TÉCNICO + RESPONSIVE + EFECTOS DE SCROLL
============================================================ */


/* ============================================================
   HERO · VISUAL PLANO → OBRA
============================================================ */

.project-vision {
    transform: translateY(-50%);
    opacity: .9;

    filter:
        drop-shadow(
            0 24px 45px rgba(0,0,0,.32)
        );

    z-index: 1;
}


.project-vision-glow {
    position: absolute;

    inset: 12% 8%;

    background:
        radial-gradient(
            circle,
            rgba(21,41,124,.24),
            transparent 68%
        );

    filter: blur(34px);

    pointer-events: none;
}


.project-vision-svg {
    position: relative;

    z-index: 2;

    width: 100%;
    height: auto;

    overflow: visible;
}


/* ============================================================
   RETÍCULA
============================================================ */

.pv-grid {
    animation:
        pvGrid
        8s
        ease-in-out
        infinite;
}


/* ============================================================
   TRAZADO DEL PLANO
============================================================ */

.pv-draw {
    stroke-dasharray: 1100;
    stroke-dashoffset: 1100;

    animation:
        pvDraw
        9s
        cubic-bezier(.16,1,.3,1)
        infinite;
}


.pv-d2 {
    animation-delay: .45s;
}


.pv-d3 {
    animation-delay: .9s;
}


/* ============================================================
   COLUMNAS
============================================================ */

.pv-columns path {
    transform-box: fill-box;
    transform-origin: center bottom;

    animation:
        pvRise
        9s
        cubic-bezier(.16,1,.3,1)
        infinite;
}


.pv-columns path:nth-child(2) {
    animation-delay: .25s;
}


.pv-columns path:nth-child(3) {
    animation-delay: .5s;
}


.pv-columns path:nth-child(4) {
    animation-delay: .75s;
}


/* ============================================================
   TRABES / LOSAS / NÚCLEO
============================================================ */

.pv-beams {
    animation:
        pvRevealBeams
        9s
        ease-in-out
        infinite;
}


.pv-floors {
    animation:
        pvRevealFloors
        9s
        ease-in-out
        infinite;
}


.pv-core {
    animation:
        pvRevealCore
        9s
        ease-in-out
        infinite;
}


/* ============================================================
   GRÚA
============================================================ */

.pv-crane {
    transform-box: fill-box;
    transform-origin: 15% 90%;

    animation:
        pvCrane
        6s
        ease-in-out
        infinite;
}


/* ============================================================
   ESCÁNER
============================================================ */

.pv-scan-line {
    animation:
        pvDash
        4s
        linear
        infinite;
}


.pv-scan-dot {
    offset-path:
        path('M215 365L625 145');

    animation:
        pvScan
        5s
        ease-in-out
        infinite;
}


/* ============================================================
   MARCADORES
============================================================ */

.pv-markers {
    animation:
        pvMarkers
        9s
        ease-in-out
        infinite;
}


/* ============================================================
   BARRA DE PROGRESO
============================================================ */

.pv-progress {
    width: 0;

    animation:
        pvProgress
        9s
        ease-in-out
        infinite;
}


.pv-percent::after {
    content: ' ';
}


/* ============================================================
   ANIMACIONES DEL HERO
============================================================ */

@keyframes pvDraw {

    0%,
    8% {
        stroke-dashoffset: 1100;
        opacity: .15;
    }

    34%,
    78% {
        stroke-dashoffset: 0;
        opacity: 1;
    }

    92%,
    100% {
        stroke-dashoffset: 0;
        opacity: .22;
    }
}


@keyframes pvRise {

    0%,
    24% {
        transform: scaleY(0);
        opacity: 0;
    }

    42%,
    78% {
        transform: scaleY(1);
        opacity: 1;
    }

    92%,
    100% {
        transform: scaleY(1);
        opacity: .2;
    }
}


@keyframes pvRevealBeams {

    0%,
    38% {
        opacity: 0;
        transform: translateY(8px);
    }

    52%,
    80% {
        opacity: 1;
        transform: translateY(0);
    }

    92%,
    100% {
        opacity: .15;
    }
}


@keyframes pvRevealFloors {

    0%,
    48% {
        opacity: 0;
    }

    60%,
    80% {
        opacity: 1;
    }

    92%,
    100% {
        opacity: .12;
    }
}


@keyframes pvRevealCore {

    0%,
    55% {
        opacity: 0;
    }

    68%,
    80% {
        opacity: 1;
    }

    92%,
    100% {
        opacity: .12;
    }
}


@keyframes pvMarkers {

    0%,
    58% {
        opacity: 0;
    }

    72%,
    82% {
        opacity: 1;
    }

    94%,
    100% {
        opacity: 0;
    }
}


@keyframes pvGrid {

    0%,
    100% {
        opacity: .06;
    }

    50% {
        opacity: .16;
    }
}


@keyframes pvCrane {

    0%,
    100% {
        transform: rotate(0deg);
    }

    50% {
        transform: rotate(.8deg);
    }
}


@keyframes pvDash {

    to {
        stroke-dashoffset: -80;
    }
}


@keyframes pvScan {

    0% {
        offset-distance: 0%;
        opacity: 0;
    }

    12% {
        opacity: 1;
    }

    88% {
        opacity: 1;
    }

    100% {
        offset-distance: 100%;
        opacity: 0;
    }
}


@keyframes pvProgress {

    0%,
    10% {
        width: 0;
    }

    25% {
        width: 22%;
    }

    43% {
        width: 48%;
    }

    62% {
        width: 74%;
    }

    80% {
        width: 100%;
    }

    92%,
    100% {
        width: 100%;
        opacity: .25;
    }
}


/* ============================================================
   HERO · FIGURA RESPONSIVE
============================================================ */


/* ============================================================
   MÓVIL PEQUEÑO · 320PX → 374PX
============================================================ */

@media (max-width: 374px) {

    .project-vision {
        display: block !important;

        width: 320px;
        max-width: none;

        right: -135px;
        top: 58%;

        opacity: .18;

        transform:
            translateY(-50%);

        filter: none;
    }


    .project-vision-glow {
        inset: 15% 10%;

        opacity: .35;

        filter:
            blur(20px);
    }


    .pv-status {
        display: none;
    }

}


/* ============================================================
   MÓVIL · 375PX → 639PX
============================================================ */

@media (min-width: 375px) and (max-width: 639px) {

    .project-vision {
        display: block !important;

        width: 360px;
        max-width: none;

        right: -140px;
        top: 57%;

        opacity: .21;

        transform:
            translateY(-50%);

        filter: none;
    }


    .project-vision-glow {
        inset: 15% 10%;

        opacity: .42;

        filter:
            blur(24px);
    }


    .pv-status {
        display: none;
    }

}


/* ============================================================
   TABLET PEQUEÑA · 640PX → 767PX
============================================================ */

@media (min-width: 640px) and (max-width: 767px) {

    .project-vision {
        display: block !important;

        width: 440px;
        max-width: none;

        right: -100px;
        top: 53%;

        opacity: .22;

        transform:
            translateY(-50%);

        filter: none;
    }


    .project-vision-glow {
        opacity: .4;
    }


    .pv-status {
        display: none;
    }

}


/* ============================================================
   TABLET · 768PX → 1023PX
============================================================ */

@media (min-width: 768px) and (max-width: 1023px) {

    .project-vision {
        display: block !important;

        width: 500px;
        max-width: none;

        right: -110px;
        top: 52%;

        opacity: .25;

        transform:
            translateY(-50%);

        filter: none;
    }


    .project-vision-glow {
        opacity: .45;
    }


    .pv-status {
        display: none;
    }

}


/* ============================================================
   LAPTOP · 1024PX → 1279PX
============================================================ */

@media (min-width: 1024px) and (max-width: 1279px) {

    .project-vision {
        display: block;

        width: 50%;

        right: -5%;
        top: 50%;

        opacity: .74;

        transform:
            translateY(-50%);
    }

}


/* ============================================================
   DESKTOP · 1280PX+
============================================================ */

@media (min-width: 1280px) {

    .project-vision {
        display: block;

        opacity: .9;

        top: 50%;

        transform:
            translateY(-50%);
    }

}


/* ============================================================
   SISTEMA DE REVEAL · TODA LA PÁGINA
============================================================ */

.project-reveal {
    --project-x: 0px;
    --project-y: 34px;
    --project-scale: .985;

    opacity: 0;

    transform:
        translate3d(
            var(--project-x),
            var(--project-y),
            0
        )
        scale(
            var(--project-scale)
        );

    transition:
        opacity .75s
            cubic-bezier(.22,.61,.36,1),

        transform .9s
            cubic-bezier(.16,1,.3,1);

    transition-delay:
        var(
            --project-delay,
            0ms
        );

    will-change:
        opacity,
        transform;
}


/* ============================================================
   REVEAL · VISIBLE
============================================================ */

.project-reveal.is-visible {
    opacity: 1;

    transform:
        translate3d(0,0,0)
        scale(1);
}


/* ============================================================
   REVEAL · IZQUIERDA
============================================================ */

.project-reveal.project-left {
    --project-x: -45px;
    --project-y: 0px;
}


/* ============================================================
   REVEAL · DERECHA
============================================================ */

.project-reveal.project-right {
    --project-x: 45px;
    --project-y: 0px;
}


/* ============================================================
   REVEAL · ABAJO → ARRIBA
============================================================ */

.project-reveal.project-up {
    --project-x: 0px;
    --project-y: 38px;
}


/* ============================================================
   REVEAL · ESCALA
============================================================ */

.project-reveal.project-scale {
    --project-x: 0px;
    --project-y: 20px;
    --project-scale: .96;
}


/* ============================================================
   EFECTO AL REGRESAR HACIA ARRIBA
============================================================ */

body.projects-scroll-up
.project-reveal:not(.is-visible) {
    --project-y: -26px;
}


body.projects-scroll-up
.project-reveal.project-left:not(.is-visible) {
    --project-x: -32px;
    --project-y: 0px;
}


body.projects-scroll-up
.project-reveal.project-right:not(.is-visible) {
    --project-x: 32px;
    --project-y: 0px;
}


/* ============================================================
   REVEAL · MÓVIL
============================================================ */

@media (max-width: 767px) {

    .project-reveal {
        --project-x: 0px;
        --project-y: 24px;
        --project-scale: .985;

        transition:
            opacity .65s ease,

            transform .78s
                cubic-bezier(.16,1,.3,1);
    }


    /*
       En celular las entradas laterales
       se convierten en entradas verticales.
       Evita movimiento horizontal excesivo.
    */

    .project-reveal.project-left,
    .project-reveal.project-right {
        --project-x: 0px;
        --project-y: 24px;
    }


    .project-reveal.project-up {
        --project-x: 0px;
        --project-y: 26px;
    }


    .project-reveal.project-scale {
        --project-x: 0px;
        --project-y: 18px;
        --project-scale: .97;
    }


    body.projects-scroll-up
    .project-reveal:not(.is-visible) {
        --project-x: 0px;
        --project-y: -18px;
    }

}


/* ============================================================
   REVEAL · TABLET
============================================================ */

@media (min-width: 768px) and (max-width: 1023px) {

    .project-reveal {
        --project-y: 28px;

        transition:
            opacity .72s ease,

            transform .85s
                cubic-bezier(.16,1,.3,1);
    }


    .project-reveal.project-left {
        --project-x: -30px;
        --project-y: 0px;
    }


    .project-reveal.project-right {
        --project-x: 30px;
        --project-y: 0px;
    }


    .project-reveal.project-up {
        --project-y: 30px;
    }


    .project-reveal.project-scale {
        --project-y: 18px;
        --project-scale: .97;
    }

}


/* ============================================================
   REVEAL · LAPTOP
============================================================ */

@media (min-width: 1024px) and (max-width: 1439px) {

    .project-reveal {
        --project-y: 34px;
    }


    .project-reveal.project-left {
        --project-x: -42px;
        --project-y: 0px;
    }


    .project-reveal.project-right {
        --project-x: 42px;
        --project-y: 0px;
    }


    .project-reveal.project-scale {
        --project-y: 20px;
        --project-scale: .965;
    }

}


/* ============================================================
   REVEAL · DESKTOP GRANDE
============================================================ */

@media (min-width: 1440px) {

    .project-reveal {
        --project-y: 38px;

        transition:
            opacity .8s
                cubic-bezier(.22,.61,.36,1),

            transform .95s
                cubic-bezier(.16,1,.3,1);

        transition-delay:
            var(
                --project-delay,
                0ms
            );
    }


    .project-reveal.project-left {
        --project-x: -52px;
        --project-y: 0px;
    }


    .project-reveal.project-right {
        --project-x: 52px;
        --project-y: 0px;
    }


    .project-reveal.project-up {
        --project-y: 42px;
    }


    .project-reveal.project-scale {
        --project-y: 24px;
        --project-scale: .955;
    }

}


/* ============================================================
   TARJETAS · MEJORA DE HOVER
============================================================ */

@media (hover: hover) and (pointer: fine) {

    article.group {
        will-change: transform;
    }


    article.group:hover img {
        transform:
            scale(1.05);
    }

}


/* ============================================================
   DISPOSITIVOS TÁCTILES
============================================================ */

@media (hover: none) and (pointer: coarse) {

    /*
       En móvil no dependemos del hover.
    */

    article.group:hover {
        transform: none;
        box-shadow: none;
    }


    article.group img {
        transform: none !important;
    }

}


/* ============================================================
   OPTIMIZACIÓN RESPONSIVE
============================================================ */

html,
body {
    max-width: 100%;
    overflow-x: hidden;
}


img,
svg {
    max-width: 100%;
}


/* ============================================================
   ACCESIBILIDAD · REDUCIR MOVIMIENTO
============================================================ */

@media (prefers-reduced-motion: reduce) {

    .pv-grid,
    .pv-draw,
    .pv-columns path,
    .pv-beams,
    .pv-floors,
    .pv-core,
    .pv-crane,
    .pv-scan-line,
    .pv-scan-dot,
    .pv-markers,
    .pv-progress {
        animation: none !important;
    }


    .pv-draw {
        stroke-dashoffset: 0;
    }


    .pv-progress {
        width: 100%;
        opacity: 1;
    }


    .project-reveal,
    .project-reveal.is-visible {
        opacity: 1 !important;

        transform: none !important;

        transition: none !important;
    }

}
/* Desactivar entrada/salida del contenido, sin tocar animación técnica del hero */
.project-reveal,
.project-reveal.is-visible,
body.projects-scroll-up .project-reveal,
body.projects-scroll-up .project-reveal:not(.is-visible) {
    opacity: 1 !important;
    transform: none !important;
    transition: none !important;
    transition-delay: 0ms !important;
    will-change: auto !important;
}

@media (max-width: 767px) {
    .project-vision {
        width: 85% !important;
        max-width: 440px;
        right: -12% !important;
        top: 62% !important;
        opacity: 0.35;
    }

    [data-reveal-section="hero"] > .relative.z-10 {
        padding-bottom: 100px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {

    /* ============================================================
       UTILIDADES
    ============================================================ */

    const q = (
        selector,
        context = document
    ) => context.querySelector(selector);


    const qa = (
        selector,
        context = document
    ) => [
        ...context.querySelectorAll(selector)
    ];


    /* ============================================================
       DETECTAR TIPO DE DISPOSITIVO
    ============================================================ */

    const getDevice = () => {

        const width =
            window.innerWidth;


        if (width < 768) {
            return 'mobile';
        }


        if (width < 1024) {
            return 'tablet';
        }


        if (width < 1440) {
            return 'laptop';
        }


        return 'desktop';

    };


    let currentDevice =
        getDevice();


    document
        .documentElement
        .dataset
        .device =
            currentDevice;


    /* ============================================================
       HERO · PORCENTAJE DE AVANCE
    ============================================================ */

    const percent =
        q('.pv-percent');


    const reducedMotion =
        window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;


    if (percent) {

        if (reducedMotion) {

            percent.textContent =
                '100%';

        } else {

            const start =
                performance.now();


            const duration =
                9000;


            const tick = now => {

                const progress =
                    (
                        (now - start) %
                        duration
                    ) /
                    duration;


                let value;


                if (progress < .10) {

                    value = 0;

                }

                else if (
                    progress < .80
                ) {

                    value =
                        Math.round(
                            (
                                (
                                    progress -
                                    .10
                                ) /
                                .70
                            ) *
                            100
                        );

                }

                else {

                    value = 100;

                }


                percent.textContent =
                    String(value)
                        .padStart(
                            2,
                            '0'
                        ) +
                    '%';


                requestAnimationFrame(
                    tick
                );

            };


            requestAnimationFrame(
                tick
            );

        }

    }


    /* ============================================================
       ELEMENTOS A ANIMAR
    ============================================================ */

    const revealGroups = [

        /*
         * HERO · contenido
         */

        {
            selector:
                '[data-reveal-section="hero"] .max-w-4xl',

            effect:
                'project-left',

            delay:
                0
        },


        /*
         * INTRO PORTAFOLIO
         */

        {
            selector:
                'section.bg-white h2',

            effect:
                'project-up',

            delay:
                0
        },


        {
            selector:
                'section.bg-white h2'
                + ' + *',

            effect:
                'project-up',

            delay:
                80
        },


        /*
         * TARJETAS DE PROYECTOS
         */

        {
            selector:
                'article.group',

            effect:
                'project-scale',

            delay:
                100
        },


        /*
         * CTA · CONTENIDO
         */

        {
            selector:
                'section.bg-black:last-of-type .max-w-3xl',

            effect:
                'project-left',

            delay:
                0
        },


        /*
         * CTA · BOTÓN
         */

        {
            selector:
                'section.bg-black:last-of-type a',

            effect:
                'project-right',

            delay:
                120
        }

    ];


    /* ============================================================
       APLICAR CLASES
    ============================================================ */

    revealGroups.forEach(
        group => {

            const elements =
                qa(
                    group.selector
                );


            elements.forEach(
                (
                    element,
                    index
                ) => {

                    /*
                     * Evitamos duplicados.
                     */

                    if (
                        !element
                            .classList
                            .contains(
                                'project-reveal'
                            )
                    ) {

                        element
                            .classList
                            .add(
                                'project-reveal',
                                group.effect
                            );

                    }


                    /*
                     * Delay progresivo.
                     */

                    const delay =
                        Math.min(
                            index *
                            group.delay,
                            350
                        );


                    element
                        .style
                        .setProperty(
                            '--project-delay',
                            `${delay}ms`
                        );

                }
            );

        }
    );


    /* ============================================================
       INTRO PORTAFOLIO
       ANIMAMOS EL BLOQUE COMPLETO
    ============================================================ */

    const introSection =
        q(
            'section.bg-white'
        );


    if (introSection) {

        const introBlock =
            q(
                '.max-w-\\[1440px\\] > div',
                introSection
            );


        if (
            introBlock &&
            !introBlock
                .classList
                .contains(
                    'project-reveal'
                )
        ) {

            introBlock
                .classList
                .add(
                    'project-reveal',
                    'project-up'
                );


            introBlock
                .style
                .setProperty(
                    '--project-delay',
                    '0ms'
                );

        }

    }


    /* ============================================================
       TARJETAS · ENTRADA ESCALONADA
    ============================================================ */

    const projectCards =
        qa(
            'article.group'
        );


    projectCards.forEach(
        (
            card,
            index
        ) => {

            let multiplier;


            /*
             * Diferente velocidad
             * dependiendo del dispositivo.
             */

            switch (
                getDevice()
            ) {

                case 'mobile':

                    multiplier =
                        70;

                    break;


                case 'tablet':

                    multiplier =
                        85;

                    break;


                case 'laptop':

                    multiplier =
                        100;

                    break;


                default:

                    multiplier =
                        110;

                    break;

            }


            const delay =
                Math.min(
                    index *
                    multiplier,
                    330
                );


            card
                .style
                .setProperty(
                    '--project-delay',
                    `${delay}ms`
                );

        }
    );


    /* ============================================================
       INTERSECTION OBSERVER
    ============================================================ */

    const revealElements =
        qa(
            '.project-reveal'
        );


    const getObserverSettings =
        () => {

            const device =
                getDevice();


            /*
             * MÓVIL
             */

            if (
                device ===
                'mobile'
            ) {

                return {

                    threshold:
                        .08,

                    rootMargin:
                        '0px 0px -4% 0px'

                };

            }


            /*
             * TABLET
             */

            if (
                device ===
                'tablet'
            ) {

                return {

                    threshold:
                        .10,

                    rootMargin:
                        '0px 0px -5% 0px'

                };

            }


            /*
             * LAPTOP / DESKTOP
             */

            return {

                threshold:
                    .14,

                rootMargin:
                    '0px 0px -7% 0px'

            };

        };


    if (
        'IntersectionObserver'
        in window
    ) {

        const settings =
            getObserverSettings();


        const observer =
            new IntersectionObserver(
                entries => {

                    entries.forEach(
                        entry => {

                            if (
                                entry
                                    .isIntersecting
                            ) {

                                entry
                                    .target
                                    .classList
                                    .add(
                                        'is-visible'
                                    );

                            }

                            else {

                                /*
                                 * Al salir completamente
                                 * se prepara para repetir
                                 * la animación.
                                 */

                                entry
                                    .target
                                    .classList
                                    .remove(
                                        'is-visible'
                                    );

                            }

                        }
                    );

                },
                settings
            );


        revealElements.forEach(
            element => {

                observer.observe(
                    element
                );

            }
        );

    }

    else {

        /*
         * Compatibilidad para
         * navegadores antiguos.
         */

        revealElements.forEach(
            element => {

                element
                    .classList
                    .add(
                        'is-visible'
                    );

            }
        );

    }


    /* ============================================================
       DIRECCIÓN DEL SCROLL
    ============================================================ */

    let lastScrollY =
        window.scrollY;


    let ticking =
        false;


    const detectScrollDirection =
        () => {

            const currentY =
                window.scrollY;


            if (
                Math.abs(
                    currentY -
                    lastScrollY
                ) > 6
            ) {

                const goingUp =
                    currentY <
                    lastScrollY;


                document
                    .body
                    .classList
                    .toggle(
                        'projects-scroll-up',
                        goingUp
                    );


                lastScrollY =
                    currentY;

            }


            ticking =
                false;

        };


    window.addEventListener(
        'scroll',
        () => {

            if (!ticking) {

                requestAnimationFrame(
                    detectScrollDirection
                );


                ticking =
                    true;

            }

        },
        {
            passive: true
        }
    );


    /* ============================================================
       RESIZE / ROTACIÓN
    ============================================================ */

    let resizeTimer;


    window.addEventListener(
        'resize',
        () => {
            clearTimeout(
                resizeTimer
            );
            resizeTimer =
                setTimeout(
                    () => {

                        const newDevice =
                            getDevice();

                        if (
                            newDevice !==
                            currentDevice
                        ) {
                            currentDevice =
                                newDevice;

                            document
                                .documentElement
                                .dataset
                                .device =
                                    newDevice;
                        }
                    },
                    180
                );
        },
        {
            passive: true
        }
    );
    /* ============================================================
       ORIENTATION CHANGE
    ============================================================ */
    window.addEventListener(
        'orientationchange',
        () => {
            setTimeout(
                () => {
                    currentDevice =
                        getDevice();


                    document
                        .documentElement
                        .dataset
                        .device =
                            currentDevice;
                },
                250
            );

        }
    );

});
</script>
@endsection
