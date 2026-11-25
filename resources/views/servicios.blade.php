@extends('layouts.app')

@section('title', 'Servicios | BLR & ARCOS')

@section('content')

<div id="blrServiciosPage">


{{-- ============================================================
     HERO SERVICIOS
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



    {{-- IMAGEN --}}

    <div class="absolute inset-0">



        <img

            src="{{ asset('images/servicios.webp') }}"

            alt="Servicios de construcción BLR & ARCOS"

            class="w-full h-full object-cover object-center"

        >



        <div class="absolute inset-0 bg-black/55"></div>



        <div

            class="absolute inset-0

                   bg-gradient-to-r

                   from-black/95

                   via-black/65

                   to-black/15"

        ></div>



    </div>





    {{-- ESCENA TÉCNICA ANIMADA: GRÚA, EXCAVADORA, PUENTE Y ESTRUCTURA --}}
    <div class="blr-site-scene absolute pointer-events-none select-none"
     style="right: 5%;"
     aria-hidden="true">
        <svg viewBox="0 0 780 440" class="w-full h-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="blrSceneGrid" width="32" height="32" patternUnits="userSpaceOnUse"><path d="M32 0H0V32" stroke="white" stroke-opacity=".085" stroke-width=".7"/></pattern>
                <linearGradient id="blrSceneSteel" x1="0" y1="0" x2="1" y2="1"><stop stop-color="#E5E7EB" stop-opacity=".85"/><stop offset="1" stop-color="#536BD7" stop-opacity=".65"/></linearGradient>
            </defs>
            <rect x="12" y="18" width="756" height="398" fill="url(#blrSceneGrid)" opacity=".65"/>
            <path d="M20 384H755" stroke="white" stroke-opacity=".30" stroke-width="1.5"/>
            <path d="M20 397H755" stroke="#536BD7" stroke-opacity=".55" stroke-dasharray="9 7"/>

            {{-- EDIFICIO ESTRUCTURAL EN MONTAJE --}}
            <g class="blr-building" stroke="url(#blrSceneSteel)" stroke-width="2.3">
                <path class="blr-draw" d="M505 375V180M563 375V180M621 375V180M679 375V180"/>
                <path class="blr-draw" d="M498 375H686M498 325H686M498 275H686M498 225H686M498 180H686"/>
                <path class="blr-draw" d="M505 375L563 325M563 325L505 275M563 275L621 225M621 225L563 180M621 375L679 325M679 325L621 275" stroke-opacity=".65"/>
                <path d="M498 180H686" stroke="#FACC15" stroke-width="3" stroke-dasharray="8 6" class="blr-site-dash"/>
            </g>

            {{-- GRÚA TORRE --}}
            <g class="blr-crane" stroke-linecap="round" stroke-linejoin="round">
                <path d="M435 375V71M422 375H448M422 71H448" stroke="white" stroke-opacity=".8" stroke-width="3"/>
                <path d="M425 365L445 341L425 317L445 293L425 269L445 245L425 221L445 197L425 173L445 149L425 125L445 101L425 77" stroke="#536BD7" stroke-width="1.7"/>
                <path d="M435 75H727L435 53L344 75L435 53M435 75L727 75M435 75L344 75" stroke="white" stroke-opacity=".9" stroke-width="2.5"/>
                <path d="M480 75L505 57L530 75L555 60L580 75L605 63L630 75L655 66L680 75L705 69" stroke="#536BD7" stroke-width="1.5"/>
                <path d="M344 75L370 62L396 75" stroke="#536BD7" stroke-width="1.5"/>
                <path d="M435 52V38M422 38H448" stroke="#FACC15" stroke-width="2.5"/>
                <g class="blr-hoist">
                    <path d="M594 75V145" stroke="#FACC15" stroke-width="2"/>
                    <path d="M588 145H600V153H588Z" fill="#FACC15" fill-opacity=".85" stroke="#FACC15"/>
                    <path d="M594 153Q604 164 594 170Q584 164 594 158" stroke="#FACC15" stroke-width="2"/>
                    <path d="M571 190H617L609 173H579Z" fill="#15297C" fill-opacity=".75" stroke="white" stroke-opacity=".75"/>
                    <path d="M579 173L594 170L609 173" stroke="#FACC15" stroke-width="1.5"/>
                </g>
            </g>

            {{-- PUENTE EN CONSTRUCCIÓN, CON TRAMO PENDIENTE --}}
            <g class="blr-bridge" stroke-linecap="round" stroke-linejoin="round">
                <path d="M45 287H198M285 287H407" stroke="white" stroke-width="5" stroke-opacity=".9"/>
                <path d="M45 299H198M285 299H407" stroke="#536BD7" stroke-width="2.5"/>
                <path d="M52 287L80 299L108 287L136 299L164 287L192 299M291 287L319 299L347 287L375 299L403 287" stroke="white" stroke-opacity=".65" stroke-width="1.5"/>
                <path d="M91 301V382M151 301V382M319 301V382M378 301V382" stroke="white" stroke-opacity=".65" stroke-width="4"/>
                <path d="M79 382H163M307 382H390" stroke="#536BD7" stroke-width="4"/>
                <path d="M198 287H285M198 299H285" stroke="#FACC15" stroke-width="1.5" stroke-dasharray="6 7" opacity=".7"/>
                <g class="blr-bridge-segment"><path d="M204 274H279V287H204Z" fill="#15297C" fill-opacity=".7" stroke="#FACC15" stroke-width="2"/><path d="M210 280H273" stroke="white" stroke-opacity=".55"/></g>
            </g>

            {{-- EXCAVADORA ARTICULADA --}}
            <g class="blr-excavator" stroke-linecap="round" stroke-linejoin="round">
                <path d="M76 374H204" stroke="white" stroke-opacity=".65" stroke-width="2"/>
                <rect x="86" y="354" width="105" height="22" rx="11" stroke="white" stroke-opacity=".8" stroke-width="2" fill="#111827" fill-opacity=".5"/>
                <circle cx="104" cy="365" r="5" fill="#536BD7"/><circle cx="174" cy="365" r="5" fill="#536BD7"/>
                <path d="M95 353L109 327H155L181 353Z" fill="#15297C" fill-opacity=".75" stroke="white" stroke-opacity=".85" stroke-width="2"/>
                <path d="M110 327L119 305H146L155 327" stroke="#FACC15" stroke-width="2"/>
                <g class="blr-excavator-arm">
                    <path d="M153 329L191 255L238 268" stroke="#FACC15" stroke-width="8"/>
                    <path d="M153 329L191 255L238 268" stroke="white" stroke-opacity=".5" stroke-width="1"/>
                    <path d="M190 255L208 284" stroke="#536BD7" stroke-width="3"/>
                    <path d="M238 268L251 286L241 307L224 299L220 288" fill="#15297C" fill-opacity=".8" stroke="white" stroke-width="2"/>
                    <circle cx="191" cy="255" r="4" fill="#fff"/>
                </g>
            </g>

            {{-- ELEMENTOS DE MEDICIÓN --}}
            <g stroke="#FACC15" stroke-opacity=".65" stroke-width="1">
                <path d="M45 318V329M407 318V329M45 324H407" stroke-dasharray="3 5"/>
                <path d="M39 319L51 329M401 319L413 329"/>
            </g>
            <g fill="white" fill-opacity=".56" font-family="Arial, sans-serif" font-size="9" letter-spacing="2">
                <text x="45" y="343">OBRA CIVIL / INFRAESTRUCTURA</text>
                <text x="508" y="402">MONTAJE ESTRUCTURAL</text>
            </g>
            <circle class="blr-site-beacon" cx="435" cy="38" r="4" fill="#FACC15"/>
        </svg>
    </div>

    {{-- CONTENIDO --}}

<div class="relative z-20 w-full max-w-[1500px] mx-auto px-6 sm:px-8 lg:px-10">

    <div class="max-w-3xl text-left">



            <div class="flex items-center gap-3 mb-5">



                <span class="w-10 h-[2px] bg-[#15297C]"></span>



                <p

                    class="text-yellow-400

                           text-[9px]

                           sm:text-[10px]

                           uppercase

                           tracking-[0.28em]

                           font-black"

                >

                    BLR & ARCOS

                </p>



            </div>





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

                Servicios

            </h1>





            <div class="flex gap-4 mt-6">



                <span class="w-[3px] bg-[#15297C] shrink-0"></span>



                <h2

                    class="text-white

                           text-lg

                           sm:text-xl

                           md:text-2xl

                           font-black

                           uppercase

                           leading-tight"

                >

                    Construcción integral



                    <span class="text-[#15297C]">

                        para grandes proyectos.

                    </span>



                </h2>



            </div>



        </div>



    </div>





    <div class="absolute bottom-0 left-0 w-full h-[3px] bg-[#15297C]">

        <div class="w-[3%] h-full bg-yellow-400"></div>

    </div>



</section>







{{-- ============================================================
     INTRODUCCIÓN
============================================================ --}}

<section



    class="bg-white py-16 sm:py-20 lg:py-24"

>



    <div class="max-w-7xl mx-auto px-6">



        <div

            class="grid

                   grid-cols-1

                   lg:grid-cols-[.7fr_1.3fr]

                   gap-10

                   lg:gap-16

                   items-start"

        >



            <div>



                <p

                    class="text-yellow-500

                           text-[9px]

                           uppercase

                           tracking-[0.3em]

                           font-black

                           mb-4"

                >

                    Lo que hacemos

                </p>



                <h2

                    class="text-black

                           text-3xl

                           sm:text-4xl

                           md:text-5xl

                           lg:text-6xl

                           font-black

                           uppercase

                           leading-[0.95]"

                >

                    Soluciones



                    <span class="block text-[#15297C]">

                        constructivas

                    </span>

                </h2>



            </div>





            <div class="lg:pt-2">



                <div class="w-full h-[3px] bg-[#15297C] mb-6"></div>



                <p

                    class="text-gray-600

                           text-sm

                           md:text-base

                           leading-7

                           max-w-3xl

                           text-justify"

                >

                    En <strong class="text-black">BLR & ARCOS</strong> desarrollamos

                    <strong class="text-black">servicios integrales de construcción</strong>

                    para proyectos residenciales, comerciales, industriales y de infraestructura.

                    Coordinamos <strong class="text-black">albañilería</strong>,

                    <strong class="text-black">acabados</strong>,

                    <strong class="text-black">terracerías</strong>,

                    <strong class="text-black">estructuras metálicas</strong> y

                    <strong class="text-black">obra civil</strong> mediante planeación,

                    <strong class="text-black">supervisión técnica</strong> y

                    <strong class="text-black">control de calidad</strong>, desde

                    <strong class="text-black">Cancún</strong> hacia

                    <strong class="text-black">todo México</strong>.

                </p>



            </div>



        </div>



    </div>



</section>







{{-- ============================================================
     SERVICIOS
============================================================ --}}

<section


    class="bg-[#111111] py-16 sm:py-20 lg:py-24"

>



    <div class="max-w-7xl mx-auto px-6">



        <div

            class="flex

                   flex-col

                   md:flex-row

                   md:items-end

                   md:justify-between

                   gap-6

                   mb-10

                   md:mb-14"

        >



            <div>



                <p

                    class="text-yellow-400

                           text-[9px]

                           uppercase

                           tracking-[0.3em]

                           font-black

                           mb-3"

                >

                    Especialidades

                </p>



                <h2

                    class="text-white

                           text-3xl

                           sm:text-4xl

                           md:text-5xl

                           font-black

                           uppercase

                           leading-tight"

                >

                    Nuestros

                    <span class="text-[#15297C]">servicios</span>

                </h2>



            </div>



            <p

                class="text-gray-500

                       text-xs

                       uppercase

                       tracking-[0.18em]"

            >

                Ingeniería · Ejecución · Supervisión

            </p>



        </div>








        <div

            class="grid

                   grid-cols-1

                   md:grid-cols-2

                   lg:grid-cols-3

                   gap-px

                   bg-white/10"

        >


          {{-- 01 OBRA CIVIL --}}

            <article

                class="service-card

                       group

                       relative

                       bg-[#181818]

                       p-8

                       lg:p-9

                       min-h-[380px]

                       overflow-hidden

                       transition-colors

                       duration-500

                       hover:bg-[#151515]"

            >



                <div class="absolute top-0 left-0 w-full h-[3px] bg-[#15297C]">

                    <div

                        class="w-0 h-full

                               bg-yellow-400

                               transition-all

                               duration-700

                               group-hover:w-[7%]"

                    ></div>

                </div>





                <div class="flex items-start justify-between gap-5">



                    <span class="text-[#15297C] text-4xl font-light">

                        01

                    </span>



                    <span

                        class="text-white/20

                               text-[9px]

                               uppercase

                               tracking-[0.18em]"

                    >

                        Infraestructura

                    </span>



                </div>





                <h3

                    class="mt-10

                           text-white

                           text-xl

                           md:text-2xl

                           font-black

                           uppercase

                           leading-tight

                           transition-colors

                           duration-300

                           group-hover:text-[#15297C]"

                >

                    Obra civil e infraestructura

                </h3>





                <p class="mt-5 text-gray-400 text-sm leading-6 text-justify">

                    Desarrollamos obra civil e infraestructura desde

                    cimentaciones, elementos de concreto y urbanización hasta

                    edificaciones y obras complementarias. Integramos planeación,

                    gestión de recursos, supervisión de obra y control técnico.

                </p>





                <div class="absolute bottom-8 left-8 lg:left-9 flex items-center gap-3">



                    <span

                        class="w-8

                               h-px

                               bg-[#15297C]

                               transition-all

                               duration-500

                               group-hover:w-14"

                    ></span>



                    <span

                        class="text-yellow-400

                               text-[8px]

                               uppercase

                               tracking-[0.18em]

                               font-black"

                    >

                        BLR & ARCOS

                    </span>



                </div>



            </article>


             {{-- 02 TERRACERÍAS --}}

            <article

                class="service-card

                       group

                       relative

                       bg-[#181818]

                       p-8

                       lg:p-9

                       min-h-[380px]

                       overflow-hidden

                       transition-colors

                       duration-500

                       hover:bg-[#151515]"

            >



                <div class="absolute top-0 left-0 w-full h-[3px] bg-[#15297C]">

                    <div

                        class="w-0 h-full

                               bg-yellow-400

                               transition-all

                               duration-700

                               group-hover:w-[7%]"

                    ></div>

                </div>





                <div class="flex items-start justify-between gap-5">



                    <span class="text-[#15297C] text-4xl font-light">

                        02

                    </span>



                    <span

                        class="text-white/20

                               text-[9px]

                               uppercase

                               tracking-[0.18em]"

                    >

                        Terreno

                    </span>



                </div>





                <h3

                    class="mt-10

                           text-white

                           text-xl

                           md:text-2xl

                           font-black

                           uppercase

                           leading-tight

                           transition-colors

                           duration-300

                           group-hover:text-[#15297C]"

                >

                    Terracerías y preparación de terrenos

                </h3>





                <p class="mt-5 text-gray-400 text-sm leading-6 text-justify">

                    Realizamos limpieza, despalme, cortes, excavaciones,

                    rellenos, nivelación y compactación por capas.

                    Controlamos cotas, pendientes, humedad y densidad para

                    conformar plataformas, vialidades y desplantes estables.

                </p>





                <div class="absolute bottom-8 left-8 lg:left-9 flex items-center gap-3">



                    <span

                        class="w-8

                               h-px

                               bg-[#15297C]

                               transition-all

                               duration-500

                               group-hover:w-14"

                    ></span>



                    <span

                        class="text-yellow-400

                               text-[8px]

                               uppercase

                               tracking-[0.18em]

                               font-black"

                    >

                        BLR & ARCOS

                    </span>



                </div>



            </article>

                        {{-- 03 ESTRUCTURA METÁLICA --}}

            <article

                class="service-card

                       group

                       relative

                       bg-[#181818]

                       p-8

                       lg:p-9

                       min-h-[380px]

                       overflow-hidden

                       transition-colors

                       duration-500

                       hover:bg-[#151515]"

            >



                <div class="absolute top-0 left-0 w-full h-[3px] bg-[#15297C]">

                    <div

                        class="w-0 h-full

                               bg-yellow-400

                               transition-all

                               duration-700

                               group-hover:w-[7%]"

                    ></div>

                </div>





                <div class="flex items-start justify-between gap-5">



                    <span class="text-[#15297C] text-4xl font-light">

                        03

                    </span>



                    <span

                        class="text-white/20

                               text-[9px]

                               uppercase

                               tracking-[0.18em]"

                    >

                        Estructura

                    </span>



                </div>





                <h3

                    class="mt-10

                           text-white

                           text-xl

                           md:text-2xl

                           font-black

                           uppercase

                           leading-tight

                           transition-colors

                           duration-300

                           group-hover:text-[#15297C]"

                >

                    Fabricación y montaje de estructura metálica

                </h3>





                <p class="mt-5 text-gray-400 text-sm leading-6 text-justify">

                    Ejecutamos fabricación y montaje para edificaciones,

                    cubiertas, refuerzos y elementos especiales. Coordinamos

                    habilitado, soldadura, conexiones, izaje, alineación,

                    protección anticorrosiva, supervisión técnica y control dimensional.

                </p>





                <div class="absolute bottom-8 left-8 lg:left-9 flex items-center gap-3">



                    <span

                        class="w-8

                               h-px

                               bg-[#15297C]

                               transition-all

                               duration-500

                               group-hover:w-14"

                    ></span>



                    <span

                        class="text-yellow-400

                               text-[8px]

                               uppercase

                               tracking-[0.18em]

                               font-black"

                    >

                        BLR & ARCOS

                    </span>



                </div>



            </article>




            {{-- 04 ALBAÑILERÍA --}}

            <article

                class="service-card

                       group

                       relative

                       bg-[#181818]

                       p-8

                       lg:p-9

                       min-h-[380px]

                       overflow-hidden

                       transition-colors

                       duration-500

                       hover:bg-[#151515]"

            >



                <div class="absolute top-0 left-0 w-full h-[3px] bg-[#15297C]">

                    <div

                        class="w-0 h-full

                               bg-yellow-400

                               transition-all

                               duration-700

                               group-hover:w-[7%]"

                    ></div>

                </div>





                <div class="flex items-start justify-between gap-5">



                    <span class="text-[#15297C] text-4xl font-light">

                        04

                    </span>



                    <span

                        class="text-white/20

                               text-[9px]

                               uppercase

                               tracking-[0.18em]"

                    >

                        Construcción

                    </span>



                </div>





                <h3

                    class="mt-10

                           text-white

                           text-xl

                           md:text-2xl

                           font-black

                           uppercase

                           leading-tight

                           transition-colors

                           duration-300

                           group-hover:text-[#15297C]"

                >

                    Albañilería general

                </h3>





                <p class="mt-5 text-gray-400 text-sm leading-6 text-justify">

                    Ejecutamos trabajos de albañilería general para edificación y

                    adecuación de espacios: levantamiento de muros, firmes, aplanados,

                    repellados, resanes y preparación de superficies.

                    Aplicamos procedimientos constructivos, control de niveles y

                    verificación de materiales.

                </p>





                <div class="absolute bottom-8 left-8 lg:left-9 flex items-center gap-3">



                    <span

                        class="w-8

                               h-px

                               bg-[#15297C]

                               transition-all

                               duration-500

                               group-hover:w-14"

                    ></span>



                    <span

                        class="text-yellow-400

                               text-[8px]

                               uppercase

                               tracking-[0.18em]

                               font-black"

                    >

                        BLR & ARCOS

                    </span>



                </div>



            </article>







            {{-- 05 ACABADOS --}}

            <article

                class="service-card

                       group

                       relative

                       bg-[#181818]

                       p-8

                       lg:p-9

                       min-h-[380px]

                       overflow-hidden

                       transition-colors

                       duration-500

                       hover:bg-[#151515]"

            >



                <div class="absolute top-0 left-0 w-full h-[3px] bg-[#15297C]">

                    <div

                        class="w-0 h-full

                               bg-yellow-400

                               transition-all

                               duration-700

                               group-hover:w-[7%]"

                    ></div>

                </div>





                <div class="flex items-start justify-between gap-5">



                    <span class="text-[#15297C] text-4xl font-light">

                        05

                    </span>



                    <span

                        class="text-white/20

                               text-[9px]

                               uppercase

                               tracking-[0.18em]"

                    >

                        Acabados

                    </span>



                </div>





                <h3

                    class="mt-10

                           text-white

                           text-xl

                           md:text-2xl

                           font-black

                           uppercase

                           leading-tight

                           transition-colors

                           duration-300

                           group-hover:text-[#15297C]"

                >

                    Acabados para construcción

                </h3>





                <p class="mt-5 text-gray-400 text-sm leading-6 text-justify">

                    Desarrollamos acabados en interiores y exteriores,

                    incluyendo recubrimientos, pisos, muros, plafones,

                    pintura y detalles arquitectónicos. Coordinamos muestras,

                    tolerancias, modulación y calidad de instalación para obtener

                    superficies uniformes y durables.

                </p>





                <div class="absolute bottom-8 left-8 lg:left-9 flex items-center gap-3">



                    <span

                        class="w-8

                               h-px

                               bg-[#15297C]

                               transition-all

                               duration-500

                               group-hover:w-14"

                    ></span>



                    <span

                        class="text-yellow-400

                               text-[8px]

                               uppercase

                               tracking-[0.18em]

                               font-black"

                    >

                        BLR & ARCOS

                    </span>



                </div>



            </article>

            {{-- 06 COBERTURA --}}

            <article

                class="service-card

                       group

                       relative

                       bg-[#15297C]

                       p-8

                       lg:p-9

                       min-h-[380px]

                       overflow-hidden"

            >



                <div

                    class="absolute

                           -right-20

                           -top-20

                           w-56

                           h-56

                           border

                           border-white/10

                           rotate-45"

                ></div>





                <p

                    class="text-yellow-400

                           text-[9px]

                           uppercase

                           tracking-[0.25em]

                           font-black"

                >

                    Cobertura nacional

                </p>





                <h3

                    class="mt-10

                           text-white

                           text-3xl

                           md:text-4xl

                           font-black

                           uppercase

                           leading-[0.95]"

                >

                    Cancún



                    <span class="block">

                        México

                    </span>

                </h3>





                <p class="mt-6 max-w-sm text-white/75 text-sm leading-6 text-justify">

                    Ejecutamos proyectos residenciales, comerciales,

                    industriales y de infraestructura con capacidad de operación

                    a nivel nacional.

                </p>





                <div class="absolute bottom-8 left-8 lg:left-9 flex items-center gap-3">



                    <span class="w-10 h-px bg-white/50"></span>



                    <span

                        class="text-white

                               text-[8px]

                               uppercase

                               tracking-[0.18em]

                               font-black"

                    >

                        BLR & ARCOS

                    </span>



                </div>



            </article>



        </div>



    </div>



</section>







{{-- ============================================================
     CAPACIDAD TÉCNICA
============================================================ --}}

<section



    class="bg-white py-16 sm:py-20 lg:py-24"

>



    <div class="max-w-7xl mx-auto px-6">



        <div

            class="grid

                   grid-cols-1

                   lg:grid-cols-[.75fr_1.25fr]

                   gap-10

                   lg:gap-16"

        >



            <div>



                <p

                    class="text-yellow-500

                           text-[9px]

                           uppercase

                           tracking-[0.3em]

                           font-black

                           mb-4"

                >

                    Capacidad técnica

                </p>



                <h2

                    class="text-black

                           text-3xl

                           sm:text-4xl

                           md:text-5xl

                           font-black

                           uppercase

                           leading-[0.95]"

                >

                    Ingeniería que



                    <span class="block text-[#15297C]">

                        respalda la obra

                    </span>

                </h2>



            </div>





            <div>



                <div class="w-full h-[3px] bg-[#15297C] mb-6"></div>



                <p class="text-gray-600 text-sm md:text-base leading-7 text-justify">

                    Integramos ingeniería civil, gestión integral de obra,

                    procedimientos constructivos, supervisión de obra y control

                    técnico para desarrollar proyectos de infraestructura con

                    calidad, precisión y cumplimiento.

                </p>





                <div

                    class="grid

                           grid-cols-1

                           sm:grid-cols-2

                           gap-4

                           mt-8

                           pt-8

                           border-t

                           border-black/10"

                >



                    <div class="flex items-center gap-3">

                        <span class="w-2 h-2 bg-[#15297C]"></span>

                        <span class="text-black text-xs uppercase font-bold">

                            Ingeniería civil

                        </span>

                    </div>



                    <div class="flex items-center gap-3">

                        <span class="w-2 h-2 bg-[#15297C]"></span>

                        <span class="text-black text-xs uppercase font-bold">

                            Control técnico

                        </span>

                    </div>



                    <div class="flex items-center gap-3">

                        <span class="w-2 h-2 bg-[#15297C]"></span>

                        <span class="text-black text-xs uppercase font-bold">

                            Supervisión de obra

                        </span>

                    </div>



                    <div class="flex items-center gap-3">

                        <span class="w-2 h-2 bg-[#15297C]"></span>

                        <span class="text-black text-xs uppercase font-bold">

                            Cobertura nacional

                        </span>

                    </div>



                </div>



            </div>



        </div>



    </div>



</section>







{{-- ============================================================
     CTA FINAL
============================================================ --}}

<section



    class="relative

           bg-black

           py-16

           sm:py-20

           lg:py-24

           overflow-hidden"

>



    <div

        class="absolute

               right-[-100px]

               top-[-100px]

               w-72

               h-72

               border

               border-[#15297C]/25

               rotate-45"

    ></div>





    <div class="relative z-10 max-w-7xl mx-auto px-6">



        <div

            class="grid

                   grid-cols-1

                   lg:grid-cols-[1.2fr\_.8fr]

                   gap-10

                   lg:gap-16

                   items-end"

        >



            <div>



                <p

                    class="text-yellow-400

                           text-[9px]

                           uppercase

                           tracking-[0.3em]

                           font-black

                           mb-5"

                >

                    Hablemos de tu proyecto

                </p>



                <h2

                    class="text-white

                           text-4xl

                           sm:text-5xl

                           lg:text-6xl

                           font-black

                           uppercase

                           leading-[0.9]"

                >

                    Construyamos



                    <span class="block text-[#15297C]">

                        juntos

                    </span>

                </h2>



            </div>





            <div>



                <p class="text-gray-400 text-sm leading-7 mb-7 text-justify">

                    Cuéntanos las características de tu proyecto y

                    analizaremos sus requerimientos técnicos y constructivos.

                </p>





                <a

                    href="{{ route('contacto') }}"

                    class="group

                           inline-flex

                           items-center

                           justify-between

                           gap-10

                           w-full

                           sm:w-auto

                           bg-white

                           text-black

                           px-7

                           py-5

                           text-[10px]

                           uppercase

                           tracking-[0.2em]

                           font-black

                           transition-all

                           duration-300

                           hover:bg-[#15297C]

                           hover:text-white"

                >

                    Solicitar cotización



                    <span

                        class="text-yellow-500

                               text-base

                               transition-transform

                               duration-300

                               group-hover:translate-x-1"

                    >

                        →

                    </span>

                </a>



            </div>



        </div>





        <div

            class="mt-14

                   pt-6

                   border-t

                   border-white/10

                   flex

                   flex-col

                   sm:flex-row

                   gap-3

                   sm:justify-between"

        >



            <p

                class="text-gray-600

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

                Ingeniería · Construcción · Infraestructura

            </p>



        </div>



    </div>



</section>







{{-- ============================================================
     EFECTOS DE SCROLL
============================================================ --}}

<style>
/* ============================================================
   BLR ARCOS · SERVICIOS
   ESTILOS AISLADOS DE ESTA VISTA
============================================================ */

#blrServiciosPage {
    width: 100%;
    max-width: 100%;
    overflow-x: clip;
}

#blrServiciosPage img,
#blrServiciosPage video,
#blrServiciosPage svg {
    max-width: 100%;
}


/* ============================================================
   ESCENA TÉCNICA DEL HERO
============================================================ */

#blrServiciosPage .blr-site-scene {
    position: absolute;
    top: 50%;
    right: 1%;

    width: 49%;
    max-width: 690px;

    z-index: 5;

    transform: translateY(-50%);
    opacity: .90;

    filter: drop-shadow(0 15px 30px rgba(0, 0, 0, .22));

    animation:
        blrSiteFloat
        9s
        ease-in-out
        infinite;

    pointer-events: none;
    user-select: none;

    isolation: isolate;
    contain: paint;
}

#blrServiciosPage .blr-site-scene svg {
    display: block;

    width: 100%;
    height: auto;

    overflow: visible;
}


/* ============================================================
   DIBUJO DEL EDIFICIO
============================================================ */

#blrServiciosPage .blr-draw {
    stroke-dasharray: 850;
    stroke-dashoffset: 850;

    animation:
        blrSiteDraw
        3.4s
        ease-out
        forwards;
}

#blrServiciosPage .blr-building .blr-draw:nth-child(2) {
    animation-delay: .35s;
}

#blrServiciosPage .blr-building .blr-draw:nth-child(3) {
    animation-delay: .7s;
}


/* ============================================================
   GRÚA
============================================================ */

#blrServiciosPage .blr-hoist {
    animation:
        blrSiteHoist
        7s
        ease-in-out
        infinite;
}


/* ============================================================
   EXCAVADORA
============================================================ */

#blrServiciosPage .blr-excavator-arm {
    transform-box: fill-box;
    transform-origin: 8% 88%;

    animation:
        blrSiteDig
        6.5s
        ease-in-out
        infinite;
}


/* ============================================================
   PUENTE
============================================================ */

#blrServiciosPage .blr-bridge-segment {
    animation:
        blrSiteSegment
        7s
        ease-in-out
        infinite;
}


/* ============================================================
   LÍNEAS TÉCNICAS
============================================================ */

#blrServiciosPage .blr-site-dash {
    animation:
        blrSiteDash
        9s
        linear
        infinite;
}


/* ============================================================
   BALIZA DE GRÚA
============================================================ */

#blrServiciosPage .blr-site-beacon {
    animation:
        blrSiteBeacon
        3s
        ease-in-out
        infinite;
}


/* ============================================================
   ANIMACIONES DE LA ESCENA
============================================================ */

@keyframes blrSiteFloat {

    0%,
    100% {
        transform: translateY(-50%);
    }

    50% {
        transform: translateY(calc(-50% - 5px));
    }
}


@keyframes blrSiteDraw {

    to {
        stroke-dashoffset: 0;
    }
}


@keyframes blrSiteHoist {

    0%,
    12%,
    100% {
        transform: translateY(0);
    }

    38%,
    63% {
        transform: translateY(24px);
    }

    80% {
        transform: translateY(4px);
    }
}


@keyframes blrSiteDig {

    0%,
    100% {
        transform: rotate(0deg);
    }

    35% {
        transform: rotate(-8deg);
    }

    70% {
        transform: rotate(5deg);
    }
}


@keyframes blrSiteSegment {

    0%,
    14%,
    100% {
        transform: translateY(-19px);
        opacity: .65;
    }

    40%,
    70% {
        transform: translateY(0);
        opacity: 1;
    }
}


@keyframes blrSiteDash {

    to {
        stroke-dashoffset: -126;
    }
}


@keyframes blrSiteBeacon {

    0%,
    100% {
        opacity: .3;
    }

    50% {
        opacity: 1;
    }
}


/* ============================================================
   PROTECCIÓN DEL CONTENIDO DEL HERO
============================================================ */

#blrServiciosPage [data-reveal-section="hero"] .relative.z-20 {
    position: relative;
    z-index: 20;
}


/* ============================================================
   TARJETAS DE SERVICIOS
============================================================ */

#blrServiciosPage .service-card {
    isolation: isolate;
}


/* ============================================================
   LAPTOP
   1024px — 1279px
============================================================ */

@media (min-width: 1024px) and (max-width: 1279px) {

    #blrServiciosPage [data-reveal-section="hero"] {
        min-height: 540px;
    }

    #blrServiciosPage .blr-site-scene {
        right: -2%;
        width: 52%;
        max-width: 620px;
    }

    #blrServiciosPage [data-reveal-section="hero"] > .relative.z-20 {
        padding-left: 32px;
        padding-right: 32px;
    }

    #blrServiciosPage [data-reveal-section="intro"] > div,
    #blrServiciosPage [data-reveal-section="services"] > div,
    #blrServiciosPage [data-reveal-section="technical"] > div,
    #blrServiciosPage [data-reveal-section="cta"] > div {
        padding-left: 32px;
        padding-right: 32px;
    }
}


/* ============================================================
   TABLET
   768px — 1023px
============================================================ */

@media (min-width: 768px) and (max-width: 1023px) {

    #blrServiciosPage [data-reveal-section="hero"] {
        min-height: 500px;
        padding-top: 80px;
    }

    #blrServiciosPage .blr-site-scene {
        right: -12%;
        width: 62%;
        max-width: 560px;

        opacity: .42;

        filter:
            drop-shadow(
                0 12px 25px
                rgba(0, 0, 0, .18)
            );
    }

    #blrServiciosPage [data-reveal-section="hero"] > .relative.z-20 {
        padding-left: 28px;
        padding-right: 28px;
    }

    #blrServiciosPage [data-reveal-section="hero"] h1 {
        font-size: clamp(4rem, 10vw, 5.5rem);
    }

    #blrServiciosPage [data-reveal-section="intro"] > div,
    #blrServiciosPage [data-reveal-section="services"] > div,
    #blrServiciosPage [data-reveal-section="technical"] > div,
    #blrServiciosPage [data-reveal-section="cta"] > div {
        padding-left: 28px;
        padding-right: 28px;
    }
}


/* ============================================================
   MÓVIL
   HASTA 767px
============================================================ */

@media (max-width: 767px) {

    /* --------------------------------------------------------
       HERO
    -------------------------------------------------------- */

    #blrServiciosPage [data-reveal-section="hero"] {
        min-height: 520px;
        padding-top: 80px;
    }

    #blrServiciosPage [data-reveal-section="hero"] > .relative.z-20 {
        padding-left: 20px;
        padding-right: 20px;
    }

    #blrServiciosPage [data-reveal-section="hero"] h1 {
        font-size: clamp(2.8rem, 14vw, 4.5rem);
        line-height: .9;

        overflow-wrap: anywhere;
    }

    #blrServiciosPage [data-reveal-section="hero"] h2 {
        font-size: 1rem;
        line-height: 1.35;

        max-width: 270px;
    }


    /* --------------------------------------------------------
       ESCENA TÉCNICA
    -------------------------------------------------------- */

    #blrServiciosPage .blr-site-scene {
        display: block;

        top: auto;
        bottom: 18px;
        right: -85px;

        width: 320px;
        max-width: none;

        opacity: .20;

        z-index: 5;

        filter: none;

        animation: none;

        transform: none;
    }


    /* --------------------------------------------------------
       CONTENEDORES
    -------------------------------------------------------- */

    #blrServiciosPage [data-reveal-section="intro"] > div,
    #blrServiciosPage [data-reveal-section="services"] > div,
    #blrServiciosPage [data-reveal-section="technical"] > div,
    #blrServiciosPage [data-reveal-section="cta"] > div {
        padding-left: 20px;
        padding-right: 20px;
    }


    /* --------------------------------------------------------
       INTRODUCCIÓN
    -------------------------------------------------------- */

    #blrServiciosPage [data-reveal-section="intro"] {
        padding-top: 55px;
        padding-bottom: 55px;
    }

    #blrServiciosPage [data-reveal-section="intro"] h2 {
        font-size: 2.25rem;
        line-height: .95;
    }

    #blrServiciosPage [data-reveal-section="intro"] p {
        text-align: left !important;
    }


    /* --------------------------------------------------------
       SERVICIOS
    -------------------------------------------------------- */

    #blrServiciosPage [data-reveal-section="services"] {
        padding-top: 55px;
        padding-bottom: 55px;
    }

    #blrServiciosPage [data-reveal-section="services"] > div > div:first-child {
        margin-bottom: 32px;
    }

    #blrServiciosPage [data-reveal-section="services"] h2 {
        font-size: 2.15rem;
        line-height: 1;
    }

    #blrServiciosPage .service-card {
        min-height: 0 !important;

        padding:
            28px
            24px
            82px;
    }

    #blrServiciosPage .service-card h3 {
        margin-top: 26px;

        font-size: 1.25rem;
        line-height: 1.15;
    }

    #blrServiciosPage .service-card p {
        text-align: left !important;
    }

    #blrServiciosPage .service-card > div:last-child {
        left: 24px;
        bottom: 26px;
    }


    /* --------------------------------------------------------
       CAPACIDAD TÉCNICA
    -------------------------------------------------------- */

    #blrServiciosPage [data-reveal-section="technical"] {
        padding-top: 55px;
        padding-bottom: 55px;
    }

    #blrServiciosPage [data-reveal-section="technical"] h2 {
        font-size: 2.15rem;
        line-height: .98;
    }

    #blrServiciosPage [data-reveal-section="technical"] p {
        text-align: left !important;
    }


    /* --------------------------------------------------------
       CTA
    -------------------------------------------------------- */

    #blrServiciosPage [data-reveal-section="cta"] {
        padding-top: 55px;
        padding-bottom: 55px;
    }

    #blrServiciosPage [data-reveal-section="cta"] h2 {
        font-size: 2.6rem;
        line-height: .92;
    }

    #blrServiciosPage [data-reveal-section="cta"] p {
        text-align: left !important;
    }
}


/* ============================================================
   MÓVILES PEQUEÑOS
   HASTA 420px
============================================================ */

@media (max-width: 420px) {

    #blrServiciosPage [data-reveal-section="hero"] {
        min-height: 500px;
    }

    #blrServiciosPage [data-reveal-section="hero"] h1 {
        font-size: clamp(2.55rem, 13vw, 3.7rem);
    }

    #blrServiciosPage [data-reveal-section="hero"] h2 {
        max-width: 245px;

        font-size: .92rem;
    }

    #blrServiciosPage .blr-site-scene {
        width: 285px;
        right: -100px;
        bottom: 22px;

        opacity: .17;
    }

    #blrServiciosPage .service-card {
        padding:
            25px
            20px
            78px;
    }

    #blrServiciosPage .service-card > div:last-child {
        left: 20px;
    }

    #blrServiciosPage [data-reveal-section="cta"] h2 {
        font-size: 2.25rem;
    }
}


/* ============================================================
   PANTALLAS MUY PEQUEÑAS
============================================================ */

@media (max-width: 360px) {

    #blrServiciosPage [data-reveal-section="hero"] > .relative.z-20,
    #blrServiciosPage [data-reveal-section="intro"] > div,
    #blrServiciosPage [data-reveal-section="services"] > div,
    #blrServiciosPage [data-reveal-section="technical"] > div,
    #blrServiciosPage [data-reveal-section="cta"] > div {
        padding-left: 16px;
        padding-right: 16px;
    }

    #blrServiciosPage [data-reveal-section="hero"] h1 {
        font-size: 2.6rem;
    }

    #blrServiciosPage .service-card {
        padding:
            24px
            18px
            76px;
    }

    #blrServiciosPage .service-card > div:last-child {
        left: 18px;
    }
}


/* ============================================================
   ACCESIBILIDAD · REDUCIR MOVIMIENTO

   Solo detiene las animaciones internas de Servicios.
   No toca header, logo, navegación ni footer.
============================================================ */

@media (prefers-reduced-motion: reduce) {

    #blrServiciosPage .blr-site-scene,
    #blrServiciosPage .blr-draw,
    #blrServiciosPage .blr-hoist,
    #blrServiciosPage .blr-excavator-arm,
    #blrServiciosPage .blr-bridge-segment,
    #blrServiciosPage .blr-site-dash,
    #blrServiciosPage .blr-site-beacon {
        animation: none !important;
    }

    #blrServiciosPage .blr-draw {
        stroke-dashoffset: 0;
    }
}

</style>

</div>

@endsection
