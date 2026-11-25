@extends('layouts.app')



@section('title', 'Contacto | BLR & ARCOS')



@section('content')



<main class="overflow-hidden bg-white">

{{-- ============================================================*

*     HERO CONTACTO*

*============================================================ --}}
<section
    class="relative
       min-h-[400px]
       sm:min-h-[460px]
       md:min-h-[520px]
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
         ESCENA HERO · BITÁCORA DE OBRA / NUEVO PROYECTO
         Casco + libreta + lápiz + planos técnicos
    ============================================================ --}}
    <div class="contact-site-desk absolute pointer-events-none select-none" aria-hidden="true">
        <svg viewBox="0 0 760 470" class="w-full h-auto overflow-visible" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="blrNotebook" x1="330" y1="110" x2="570" y2="390" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#15297C" stop-opacity=".34"/>
                    <stop offset="1" stop-color="#15297C" stop-opacity=".08"/>
                </linearGradient>
                <filter id="blrGlow" x="-50%" y="-50%" width="200%" height="200%">
                    <feGaussianBlur stdDeviation="4" result="blur"/>
                    <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                </filter>
            </defs>

            {{-- retícula técnica --}}
            <g class="contact-grid" stroke="#ffffff" stroke-opacity=".055" stroke-width="1">
                <path d="M20 70H735M20 120H735M20 170H735M20 220H735M20 270H735M20 320H735M20 370H735M20 420H735"/>
                <path d="M70 35V445M120 35V445M170 35V445M220 35V445M270 35V445M320 35V445M370 35V445M420 35V445M470 35V445M520 35V445M570 35V445M620 35V445M670 35V445M720 35V445"/>
            </g>

            {{-- planos enrollados detrás --}}
            <g class="contact-rolls" transform="translate(75 270) rotate(-13)">
                <rect x="0" y="0" width="315" height="78" rx="39" stroke="#15297C" stroke-opacity=".55" stroke-width="2"/>
                <ellipse cx="315" cy="39" rx="24" ry="39" stroke="#FACC15" stroke-opacity=".85" stroke-width="2"/>
                <path d="M25 20H278M25 39H250M25 58H285" stroke="#fff" stroke-opacity=".16"/>
                <circle cx="315" cy="39" r="7" fill="#FACC15" fill-opacity=".75"/>
            </g>

            {{-- libreta técnica --}}
            <g class="contact-notebook">
                <path d="M315 94L596 121L563 401L282 374Z" fill="url(#blrNotebook)" stroke="#536BD7" stroke-width="2.4"/>
                <path d="M337 120L567 142L540 368L309 346Z" fill="#050505" fill-opacity=".74" stroke="#fff" stroke-opacity=".18"/>
                <path d="M326 106L312 112M365 110L351 117M404 114L390 121M443 118L429 125M482 122L468 129M521 126L507 133M560 130L546 137" stroke="#FACC15" stroke-width="4" stroke-linecap="round"/>
                <text x="338" y="170" fill="#FACC15" font-size="11" font-family="Arial, sans-serif" font-weight="700" letter-spacing="2">NUEVO PROYECTO</text>
                <path class="contact-write-line l1" d="M337 193L504 209" stroke="#fff" stroke-opacity=".72" stroke-width="2" stroke-linecap="round"/>
                <path class="contact-write-line l2" d="M333 216L470 229" stroke="#fff" stroke-opacity=".35" stroke-width="2" stroke-linecap="round"/>
                <path class="contact-write-line l3" d="M329 239L514 257" stroke="#fff" stroke-opacity=".35" stroke-width="2" stroke-linecap="round"/>
                <path class="contact-write-line l4" d="M325 262L455 274" stroke="#fff" stroke-opacity=".35" stroke-width="2" stroke-linecap="round"/>

                {{-- croquis de estructura/puente en la hoja --}}
                <g class="contact-sketch" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M328 319L521 337" stroke="#536BD7" stroke-width="2.2"/>
                    <path d="M347 311L347 330M393 315L393 334M439 319L439 338M485 323L485 342" stroke="#fff" stroke-opacity=".5" stroke-width="2"/>
                    <path d="M337 307C363 285 389 286 416 313C444 288 473 291 501 326" stroke="#FACC15" stroke-opacity=".8" stroke-width="2"/>
                </g>
                <g class="contact-check" transform="translate(505 176)">
                    <circle cx="0" cy="0" r="19" stroke="#FACC15" stroke-width="2"/>
                    <path d="M-8 0L-2 7L10 -8" stroke="#FACC15" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
            </g>

            {{-- casco de seguridad --}}
            <g class="contact-helmet" transform="translate(60 82)">
                <path d="M39 122C42 65 77 27 130 20C182 13 228 47 241 98" stroke="#fff" stroke-width="3" stroke-linecap="round"/>
                <path d="M130 20V96" stroke="#536BD7" stroke-width="3"/>
                <path d="M70 108C76 65 97 40 130 32C166 40 190 66 200 105" stroke="#536BD7" stroke-opacity=".8" stroke-width="2"/>
                <path d="M24 122H255C267 122 273 129 267 138C263 144 254 147 242 147H43C27 147 17 141 17 132C17 126 20 123 24 122Z" stroke="#FACC15" stroke-width="3"/>
                <path d="M52 148C70 166 101 174 135 174C171 174 205 165 228 147" stroke="#fff" stroke-opacity=".22" stroke-width="2"/>
                <path d="M97 55L97 107M164 50L164 105" stroke="#fff" stroke-opacity=".16"/>
            </g>

            {{-- lápiz técnico --}}
            <g class="contact-pencil" transform="translate(580 112) rotate(18)">
                <rect x="0" y="0" width="20" height="235" rx="8" fill="#15297C" stroke="#536BD7" stroke-width="2"/>
                <path d="M0 214L10 253L20 214" fill="#FACC15" fill-opacity=".9" stroke="#FACC15" stroke-width="1.5"/>
                <path d="M7 246L10 257L13 246" fill="#fff"/>
                <path d="M2 28H18" stroke="#FACC15" stroke-width="3"/>
            </g>

            {{-- escuadra --}}
            <g class="contact-square" transform="translate(555 320) rotate(7)" stroke="#fff" stroke-opacity=".25" stroke-width="2">
                <path d="M0 90L132 90L0 0V90Z"/>
                <path d="M22 70H84L22 29V70Z"/>
                <path d="M14 83V75M32 83V78M50 83V75M68 83V78M86 83V75M104 83V78"/>
            </g>

            {{-- línea de conexión / recepción --}}
            <g class="contact-signal">
                <path class="contact-signal-path" d="M40 405H190C226 405 229 389 257 389H436C468 389 472 414 503 414H688" stroke="#FACC15" stroke-width="2" stroke-linecap="round"/>
                <circle class="contact-signal-dot" cx="40" cy="405" r="5" fill="#FACC15" filter="url(#blrGlow)"/>
                <text x="565" y="401" fill="#fff" fill-opacity=".55" font-size="9" font-family="Arial, sans-serif" letter-spacing="1.8">INICIO DE PROYECTO</text>
            </g>

            {{-- cotas --}}
            <g stroke="#fff" stroke-opacity=".16" stroke-width="1">
                <path d="M288 73H593M288 66V80M593 66V80"/>
                <path d="M620 121V397M613 121H627M613 397H627"/>
            </g>
            <text x="420" y="66" fill="#fff" fill-opacity=".3" font-size="9" font-family="Arial, sans-serif" letter-spacing="1">BITÁCORA / 01</text>
        </svg>
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



            {{-- MICRO TEXTO --}}
            <div

                class="flex

                       items-center

                       gap-3

                       mb-5"

                data-aos="fade-right"

                data-aos-duration="900"

            >



                <span

                    class="w-10

                           sm:w-12

                           h-[2px]

                           bg-[#15297C]"

                ></span>



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





            {{-- ÚNICO TÍTULO GRANDE --}}
            <h1

                class="text-white

                       text-5xl

                       sm:text-6xl

                       md:text-7xl

                       lg:text-8xl

                       xl:text-[100px]

                       font-black

                       uppercase

                       tracking-[-0.04em]

                       leading-[0.9]"

                data-aos="fade-up"

                data-aos-duration="1100"

            >

                Contacto

            </h1>





            {{-- SUBTÍTULO --}}
            <div

                class="flex

                       items-stretch

                       gap-4

                       mt-6"

                data-aos="fade-up"

                data-aos-duration="1000"

                data-aos-delay="150"

            >



                <span

                    class="w-[3px]

                           bg-[#15297C]

                           shrink-0"

                ></span>



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

                    Hablemos de tu



                    <span class="text-[#15297C]">

                        próximo proyecto.

                    </span>

                </p>



            </div>





            <p

                class="mt-6

                       max-w-xl

                       text-gray-400

                       text-xs

                       sm:text-sm

                       md:text-base

                       leading-6

                       md:leading-7"

                        style="text-align: justify;"

                data-aos="fade-up"

                data-aos-duration="1000"

                data-aos-delay="300"

            >

                Cuéntanos las necesidades de tu proyecto y nuestro

                equipo podrá conocer sus características para brindarte

                la atención adecuada.

            </p>



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

        <div class="contact-line w-[5%] h-full bg-yellow-400"></div>

    </div>



</section>







{{-- ============================================================*

*     INTRO CONTACTO*

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

                   border-gray-200"

            data-aos="fade-up"

            data-aos-duration="900"

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

                        Contáctanos

                    </p>



                </div>





                <h2

                    class="text-black

                           text-xl

                           sm:text-2xl

                           md:text-3xl

                           font-black

                           uppercase"

                >

                    Comencemos una conversación

                </h2>



            </div>





            <p

                class="w-full

                       md:max-w-md

                       text-gray-600

                       text-xs

                       sm:text-sm

                       leading-6"

                        style="text-align: justify;"

            >

                Comparte con nosotros la información básica de tu proyecto.

                Nos pondremos en contacto para conocer sus alcances,

                ubicación y requerimientos.

            </p>



        </div>



    </div>



</section>







{{-- ============================================================*

*     FORMULARIO + INFORMACIÓN*

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

                   lg:grid-cols-[0.8fr_1.2fr]

                   gap-7

                   lg:gap-10

                   xl:gap-14

                   items-start"

        >





            {{-- =====================================================*

*                 INFORMACIÓN DE CONTACTO*
*            ===================================================== --}}
            <div

                data-aos="fade-right"

                data-aos-duration="1000"

            >



                <div

                    class="bg-[#15297C]

                           p-7

                           sm:p-8

                           lg:p-10

                           transition-all

                           duration-500

                           hover:-translate-y-2

                           hover:shadow-2xl"

                >



                    <p

                        class="text-yellow-400

                               text-[9px]

                               sm:text-[10px]

                               uppercase

                               tracking-[0.22em]

                               font-black"

                    >

                        Atención directa

                    </p>





                    <h2

                        class="text-white

                               text-xl

                               sm:text-2xl

                               md:text-3xl

                               font-black

                               uppercase

                               mt-3"

                    >

                        Estamos listos para conocer tu proyecto

                    </h2>





                    <p

                        class="text-white/70

                               text-sm

                               leading-7

                               mt-6"

                                style="text-align: justify;"

                    >

                        BLR & ARCOS desarrolla proyectos de ingeniería,

                        infraestructura y construcción con capacidad

                        operativa para distintos alcances y necesidades.

                    </p>





                    {{-- DATOS --}}
                    <div

                        class="mt-9

                               border-t

                               border-white/15"

                    >




{{-- UBICACIÓN --}}
<a
    href="https://maps.app.goo.gl/6YD9i943eGp11kaZ6"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Ver ubicación en Google Maps"
    class="group
           block
           py-6
           border-b
           border-white/15
           transition-all
           duration-300
           hover:pl-3"
>

    <p
        class="text-yellow-400
               text-[8px]
               uppercase
               tracking-[0.2em]
               font-black"
    >
        Ubicación
    </p>

    <p
        class="text-white
               text-sm
               sm:text-base
               font-bold
               mt-2
               flex
               items-center
               gap-2
               transition-colors
               duration-300
               group-hover:text-yellow-400"
    >
        Cancún, Quintana Roo

        <span
            class="text-yellow-400
                   transition-transform
                   duration-300
                   group-hover:translate-x-1"
        >
            ↗
        </span>
    </p>

</a>






                        {{-- COBERTURA --}}
                        <div

                            class="group

                                   py-6

                                   border-b

                                   border-white/15

                                   transition-all

                                   duration-300

                                   hover:pl-3"

                        >



                            <p

                                class="text-yellow-400

                                       text-[8px]

                                       uppercase

                                       tracking-[0.2em]

                                       font-black"

                            >

                                Cobertura

                            </p>



                            <p

                                class="text-white

                                       text-sm

                                       sm:text-base

                                       font-bold

                                       mt-2"

                            >

                                Proyectos a nivel nacional

                            </p>



                        </div>





                        {{-- CORREO --}}
                        <div

                            class="group

                                   py-6

                                   border-b

                                   border-white/15

                                   transition-all

                                   duration-300

                                   hover:pl-3"

                        >



                            <p

                                class="text-yellow-400

                                       text-[8px]

                                       uppercase

                                       tracking-[0.2em]

                                       font-black"

                            >

                                Correo

                            </p>



                            <a

                                href="mailto:cotizaciones.proyectos@byaconstrucciones.com"

                                class="inline-block

                                       text-white

                                       text-sm

                                       sm:text-base

                                       font-bold

                                       mt-2

                                       hover:text-yellow-400

                                       transition-colors

                                       duration-300"

                            >

                                cotizaciones.proyectos@byaconstrucciones.com

                            </a>



                        </div>





                        {{-- TELÉFONO --}}
                        <div

                            class="group

                                   pt-6

                                   transition-all

                                   duration-300

                                   hover:pl-3"

                        >



                            <p

                                class="text-yellow-400

                                       text-[8px]

                                       uppercase

                                       tracking-[0.2em]

                                       font-black"

                            >

                                Teléfono

                            </p>



                            <a

                                href="tel:+529981636092"

                                class="inline-block

                                       text-white

                                       text-sm

                                       sm:text-base

                                       font-bold

                                       mt-2

                                       hover:text-yellow-400

                                       transition-colors

                                       duration-300"

                            >

                                +52 (998) 1636092

                            </a>



                        </div>



                    </div>



                </div>



            </div>







            {{-- =====================================================*

*                 FORMULARIO*

*            ===================================================== --}}
            <div

                class="bg-white

                       border

                       border-gray-200

                       p-6

                       sm:p-8

                       lg:p-10

                       xl:p-12

                       transition-all

                       duration-500

                       hover:shadow-xl"

                data-aos="fade-left"

                data-aos-duration="1000"

            >



                <div

                    class="mb-8"

                    data-aos="fade-up"

                    data-aos-delay="100"

                >



                    <p

                        class="text-yellow-500

                               text-[9px]

                               sm:text-[10px]

                               uppercase

                               tracking-[0.22em]

                               font-black"

                    >

                        Solicitud de contacto

                    </p>





                    <h2

                        class="text-black

                               text-xl

                               sm:text-2xl

                               md:text-3xl

                               font-black

                               uppercase

                               mt-3"

                    >

                        Cuéntanos sobre tu proyecto

                    </h2>




                </div>

{{-- MENSAJE DE ÉXITO --}}
@if(session('success'))
    <div role="status"
         class="mb-6 border-l-4 border-green-600 bg-green-50 p-5 text-sm text-green-800">
        {{ session('success') }}
    </div>
@endif

{{-- MENSAJE DE ERROR --}}
@if(session('error'))
    <div role="alert"
         class="mb-6 border-l-4 border-red-600 bg-red-50 p-5 text-sm text-red-800">
        {{ session('error') }}
    </div>
@endif

{{-- ERRORES DE VALIDACIÓN --}}
@if($errors->any())
    <div role="alert"
         class="mb-6 border-l-4 border-red-600 bg-red-50 p-5 text-sm text-red-800">
        <p class="font-bold mb-2">
            Revisa la información del formulario.
        </p>

        <ul class="list-disc pl-5">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



                <form
    action="{{ route('contacto.enviar') }}"
    method="POST"
    class="space-y-6"
>
    @csrf





                    {{-- NOMBRE / EMPRESA --}}
                    <div

                        class="grid

                               grid-cols-1

                               md:grid-cols-2

                               gap-5"

                        data-aos="fade-up"

                        data-aos-delay="150"

                    >



                        <div>



                            <label

                                for="nombre"

                                class="block

                                       text-black

                                       text-[10px]

                                       uppercase

                                       tracking-[0.15em]

                                       font-black

                                       mb-2"

                            >

                                Nombre \*

                            </label>



                            <input

                                type="text"
                                id="nombre"
                                name="nombre"
                                value="{{ old('nombre') }}"
                                required
                                placeholder="Nombre completo"
                                class="w-full

                                       h-12

                                       border

                                       border-gray-300

                                       bg-white

                                       px-4

                                       text-sm

                                       text-black

                                       placeholder:text-gray-400

                                       outline-none

                                       transition-all

                                       duration-300

                                       focus:border-[#15297C]

                                       focus:ring-2

                                       focus:ring-[#15297C]/20

                                       focus:-translate-y-[2px]

                                       focus:shadow-md"

                            >



                        </div>





                        <div>



                            <label

                                for="empresa"

                                class="block

                                       text-black

                                       text-[10px]

                                       uppercase

                                       tracking-[0.15em]

                                       font-black

                                       mb-2"

                            >

                                Empresa

                            </label>



                            <input

                                type="text"
                                id="empresa"
                                name="empresa"
                                value="{{ old('empresa') }}"
                                placeholder="Nombre de la empresa"
                                class="w-full

                                       h-12

                                       border

                                       border-gray-300

                                       bg-white

                                       px-4

                                       text-sm

                                       text-black

                                       placeholder:text-gray-400

                                       outline-none

                                       transition-all

                                       duration-300

                                       focus:border-[#15297C]

                                       focus:ring-2

                                       focus:ring-[#15297C]/20

                                       focus:-translate-y-[2px]

                                       focus:shadow-md"

                            >



                        </div>



                    </div>







                    {{-- EMAIL / TELÉFONO --}}
                    <div

                        class="grid

                               grid-cols-1

                               md:grid-cols-2

                               gap-5"

                        data-aos="fade-up"

                        data-aos-delay="200"

                    >



                        <div>



                            <label

                                for="email"

                                class="block

                                       text-black

                                       text-[10px]

                                       uppercase

                                       tracking-[0.15em]

                                       font-black

                                       mb-2"

                            >

                                Correo electrónico \*

                            </label>



                            <input

                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                placeholder="correo@empresa.com"
                                class="w-full

                                       h-12

                                       border

                                       border-gray-300

                                       bg-white

                                       px-4

                                       text-sm

                                       text-black

                                       placeholder:text-gray-400

                                       outline-none

                                       transition-all

                                       duration-300

                                       focus:border-[#15297C]

                                       focus:ring-2

                                       focus:ring-[#15297C]/20

                                       focus:-translate-y-[2px]

                                       focus:shadow-md"

                            >



                        </div>





                        <div>



                            <label

                                for="telefono"

                                class="block

                                       text-black

                                       text-[10px]

                                       uppercase

                                       tracking-[0.15em]

                                       font-black

                                       mb-2"

                            >

                                Teléfono \*

                            </label>



                            <input

                                type="tel"

                                id="telefono"

                                name="telefono"
                                value="{{ old('telefono') }}"

                                required

                                placeholder="+52 998 000 0000"

                                class="w-full

                                       h-12

                                       border

                                       border-gray-300

                                       bg-white

                                       px-4

                                       text-sm

                                       text-black

                                       placeholder:text-gray-400

                                       outline-none

                                       transition-all

                                       duration-300

                                       focus:border-[#15297C]

                                       focus:ring-2

                                       focus:ring-[#15297C]/20

                                       focus:-translate-y-[2px]

                                       focus:shadow-md"

                            >



                        </div>



                    </div>







                    {{-- TIPO PROYECTO --}}
                    <div

                        data-aos="fade-up"

                        data-aos-delay="250"

                    >



                        <label

                            for="tipo_proyecto"

                            class="block

                                   text-black

                                   text-[10px]

                                   uppercase

                                   tracking-[0.15em]

                                   font-black

                                   mb-2"

                        >

                            Tipo de proyecto

                        </label>



                        <select

                            id="tipo_proyecto"

                            name="tipo_proyecto"

                            class="w-full

                                   h-12

                                   border

                                   border-gray-300

                                   bg-white

                                   px-4

                                   text-sm

                                   text-gray-700

                                   outline-none

                                   transition-all

                                   duration-300

                                   focus:border-[#15297C]

                                   focus:ring-2

                                   focus:ring-[#15297C]/20

                                   focus:-translate-y-[2px]

                                   focus:shadow-md"

                        >
                          <option value="">Selecciona una opción</option>
<option value="obra-civil" @selected(old('tipo_proyecto') === 'obra-civil')>Obra civil</option>
<option value="edificacion" @selected(old('tipo_proyecto') === 'edificacion')>Edificación</option>
<option value="infraestructura" @selected(old('tipo_proyecto') === 'infraestructura')>Infraestructura</option>
<option value="estructuras" @selected(old('tipo_proyecto') === 'estructuras')>Estructuras</option>
<option value="cimentaciones" @selected(old('tipo_proyecto') === 'cimentaciones')>Cimentaciones</option>
<option value="supervision" @selected(old('tipo_proyecto') === 'supervision')>Supervisión de obra</option>
<option value="otro" @selected(old('tipo_proyecto') === 'otro')>Otro</option>



                        </select>



                    </div>







                    {{-- UBICACIÓN --}}
                    <div

                        data-aos="fade-up"

                        data-aos-delay="300"

                    >



                        <label

                            for="ubicacion"

                            class="block

                                   text-black

                                   text-[10px]

                                   uppercase

                                   tracking-[0.15em]

                                   font-black

                                   mb-2"

                        >

                            Ubicación del proyecto

                        </label>



                        <input

                            type="text"

                            id="ubicacion"

                            name="ubicacion"
                            value="{{ old('ubicacion') }}"

                            placeholder="Ciudad, Estado"

                            class="w-full

                                   h-12

                                   border

                                   border-gray-300

                                   bg-white

                                   px-4

                                   text-sm

                                   text-black

                                   placeholder:text-gray-400

                                   outline-none

                                   transition-all

                                   duration-300

                                   focus:border-[#15297C]

                                   focus:ring-2

                                   focus:ring-[#15297C]/20

                                   focus:-translate-y-[2px]

                                   focus:shadow-md"

                        >



                    </div>







                    {{-- MENSAJE --}}
                    <div

                        data-aos="fade-up"

                        data-aos-delay="350"

                    >



                        <label

                            for="mensaje"

                            class="block

                                   text-black

                                   text-[10px]

                                   uppercase

                                   tracking-[0.15em]

                                   font-black

                                   mb-2"

                        >

                            Cuéntanos sobre tu proyecto \*

                        </label>



                        <textarea

                            id="mensaje"

                            name="mensaje"

                            required

                            rows="6"

                            placeholder="Describe brevemente el proyecto, alcance o servicio que necesitas..."

                            class="w-full

                                   border

                                   border-gray-300

                                   bg-white

                                   px-4

                                   py-4

                                   text-sm

                                   text-black

                                   placeholder:text-gray-400

                                   resize-none

                                   outline-none

                                   transition-all

                                   duration-300

                                   focus:border-[#15297C]

                                   focus:ring-2

                                   focus:ring-[#15297C]/20

                                   focus:-translate-y-[2px]

                                   focus:shadow-md"

                        >{{ old('mensaje') }}</textarea>



                    </div>







                    {{-- BOTÓN --}}
                    <div

                        class="flex

                               flex-col

                               sm:flex-row

                               sm:items-center

                               sm:justify-between

                               gap-5

                               pt-2"

                        data-aos="fade-up"

                        data-aos-delay="400"

                    >



                        <p

                            class="text-gray-500

                                   text-[10px]

                                   leading-5

                                   max-w-sm"

                                    style="text-align: justify;"

                        >

                            Al enviar este formulario aceptas ser contactado

                            respecto a tu solicitud.

                        </p>





                        <button

                            type="submit"

                            class="group

                                   relative

                                   overflow-hidden

                                   inline-flex

                                   w-full

                                   sm:w-auto

                                   items-center

                                   justify-center

                                   gap-5

                                   bg-[#15297C]

                                   text-white

                                   px-7

                                   sm:px-9

                                   py-4

                                   text-[10px]

                                   sm:text-xs

                                   uppercase

                                   tracking-[0.17em]

                                   font-black

                                   transition-all

                                   duration-500

                                   hover:-translate-y-1

                                   hover:shadow-xl"

                        >



                            <span

                                class="absolute

                                       inset-0

                                       bg-black

                                       translate-y-full

                                       group-hover:translate-y-0

                                       transition-transform

                                       duration-500"

                            ></span>





                            <span class="relative z-10">

                                Enviar solicitud

                            </span>





                            <span

                                class="relative

                                       z-10

                                       text-yellow-400

                                       transition-transform

                                       duration-500

                                       group-hover:translate-x-2"

                            >

                                →

                            </span>



                        </button>



                    </div>



                </form>



            </div>



        </div>



    </div>



</section>







{{-- ============================================================*

*     PASOS*

*============================================================ --}}
<section

    class="bg-white

           py-12

           sm:py-14

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

            class="grid

                   grid-cols-1

                   md:grid-cols-3

                   border

                   border-gray-200"

        >



            {{-- 01 --}}
            <div

                class="group

                       p-6

                       sm:p-7

                       border-b

                       md:border-b-0

                       md:border-r

                       border-gray-200

                       transition-all

                       duration-500

                       hover:bg-[#15297C]

                       hover:-translate-y-1"

                data-aos="fade-up"

                data-aos-duration="800"

            >



                <p

                    class="text-yellow-500

                           text-[9px]

                           tracking-[0.2em]

                           uppercase

                           font-black

                           group-hover:text-yellow-300"

                >

                    01

                </p>



                <h3

                    class="text-black

                           text-sm

                           sm:text-base

                           font-black

                           uppercase

                           mt-2

                           transition-colors

                           duration-300

                           group-hover:text-white"

                >

                    Cuéntanos tu proyecto

                </h3>



                <p

                    class="text-gray-500

                           text-xs

                           leading-6

                           mt-3

                           transition-colors

                           duration-300

                           group-hover:text-white/70"

                            style="text-align: justify;"

                >

                    Comparte la información básica de tu obra

                    y sus principales necesidades.

                </p>



            </div>





            {{-- 02 --}}
            <div

                class="group

                       p-6

                       sm:p-7

                       border-b

                       md:border-b-0

                       md:border-r

                       border-gray-200

                       transition-all

                       duration-500

                       hover:bg-[#15297C]

                       hover:-translate-y-1"

                data-aos="fade-up"

                data-aos-duration="800"

                data-aos-delay="120"

            >



                <p

                    class="text-yellow-500

                           text-[9px]

                           tracking-[0.2em]

                           uppercase

                           font-black

                           group-hover:text-yellow-300"

                >

                    02

                </p>



                <h3

                    class="text-black

                           text-sm

                           sm:text-base

                           font-black

                           uppercase

                           mt-2

                           transition-colors

                           duration-300

                           group-hover:text-white"

                >

                    Revisamos los alcances

                </h3>



                <p

                    class="text-gray-500

                           text-xs

                           leading-6

                           mt-3

                           transition-colors

                           duration-300

                           group-hover:text-white/70"

                            style="text-align: justify;"

                >

                    Analizamos la información para identificar

                    las necesidades generales del proyecto.

                </p>



            </div>





            {{-- 03 --}}
            <div

                class="group

                       p-6

                       sm:p-7

                       transition-all

                       duration-500

                       hover:bg-[#15297C]

                       hover:-translate-y-1"

                data-aos="fade-up"

                data-aos-duration="800"

                data-aos-delay="240"

            >



                <p

                    class="text-yellow-500

                           text-[9px]

                           tracking-[0.2em]

                           uppercase

                           font-black

                           group-hover:text-yellow-300"

                >

                    03

                </p>



                <h3

                    class="text-black

                           text-sm

                           sm:text-base

                           font-black

                           uppercase

                           mt-2

                           transition-colors

                           duration-300

                           group-hover:text-white"

                >

                    Nos ponemos en contacto

                </h3>



                <p

                    class="text-gray-500

                           text-xs

                           leading-6

                           mt-3

                           transition-colors

                           duration-300

                           group-hover:text-white/70"

                            style="text-align: justify;"

                >

                    Nuestro equipo podrá continuar contigo

                    para conocer más detalles del proyecto.

                </p>



            </div>



        </div>



    </div>



</section>







{{-- ============================================================*

*     CTA FINAL*

*============================================================ --}}
<section

    class="relative

           bg-black

           py-14

           sm:py-16

           md:py-20

           lg:py-24

           overflow-hidden"

>



    {{-- DECORACIÓN --}}
    <div

        class="contact-float-delayed

               hidden

               md:block

               absolute

               -right-24

               -bottom-36

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

                   gap-8"

            data-aos="fade-up"

            data-aos-duration="1000"

        >



            <div class="max-w-3xl">



                <div

                    class="flex

                           items-center

                           gap-3

                           mb-4"

                >



                    <span

                        class="w-8

                               h-[2px]

                               bg-[#15297C]"

                    ></span>



                    <p

                        class="text-yellow-400

                               text-[9px]

                               sm:text-[10px]

                               uppercase

                               tracking-[0.22em]

                               font-black"

                    >

                        BLR & ARCOS

                    </p>



                </div>





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

                    Ingeniería para proyectos que



                    <span class="text-[#15297C]">

                        exigen soluciones

                    </span>

                </h2>



            </div>





            <a

                href="{{ route('proyectos') }}"

                class="group

                       relative

                       overflow-hidden

                       inline-flex

                       w-full

                       sm:w-auto

                       shrink-0

                       items-center

                       justify-center

                       gap-4

                       border

                       border-yellow-400

                       text-yellow-400

                       px-7

                       py-4

                       text-[10px]

                       sm:text-xs

                       uppercase

                       tracking-[0.17em]

                       font-black

                       transition-all

                       duration-500

                       hover:-translate-y-1"

            >



                <span

                    class="absolute

                           inset-0

                           bg-yellow-400

                           translate-y-full

                           group-hover:translate-y-0

                           transition-transform

                           duration-500"

                ></span>



                <span

                    class="relative

                           z-10

                           group-hover:text-black

                           transition-colors"

                >

                    Ver proyectos

                </span>



                <span

                    class="relative

                           z-10

                           transition-transform

                           duration-300

                           group-hover:translate-x-2

                           group-hover:text-black"

                >

                    →

                </span>



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

        <div class="contact-line w-[8%] h-full bg-yellow-400"></div>

    </div>



</section>





</main>







{{-- ============================================================*

*     EFECTOS EXTRA*

*============================================================ --}}
<style>
/* AOS: contenido visible sin animación de scroll */
main [data-aos],
main [data-aos].aos-init,
main [data-aos].aos-animate {
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
    transition: none !important;
    animation: none !important;
}

/* ============================================================
   BLR ARCOS · CONTACTO
   STYLE COMPLETO · RESPONSIVE + ANIMACIONES
============================================================ */


/* ============================================================
   PROTECCIÓN GENERAL
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


/* ============================================================
   HERO · ESCENA CONTACTO
============================================================ */

.contact-site-desk {
    display: block;
    position: absolute;

    right: 3%;
    top: 58%;

    width: 42%;
    max-width: 610px;

    z-index: 1;

    opacity: 1;

    transform: translateY(-50%);

    pointer-events: none;

    animation:
        siteDeskFloat
        8s
        ease-in-out
        infinite;
}

.contact-site-desk svg {
    display: block;
    width: 100%;
    height: auto;
    overflow: visible;
}


/* ============================================================
   LÍNEA HERO
============================================================ */

@keyframes contactLine {

    0%,
    100% {
        width: 5%;
    }

    50% {
        width: 14%;
    }
}

.contact-line {
    animation:
        contactLine
        5s
        ease-in-out
        infinite;
}


/* ============================================================
   MOVIMIENTO GENERAL ESCENA
============================================================ */

@keyframes siteDeskFloat {

    0%,
    100% {
        transform:
            translateY(-50%)
            translateY(0);
    }

    50% {
        transform:
            translateY(-50%)
            translateY(-5px);
    }
}


/* ============================================================
   CASCO
============================================================ */

@keyframes helmetEnter {

    0%,
    10% {
        opacity: .45;

        transform:
            translate(60px,82px)
            translateY(10px);
    }

    22%,
    100% {
        opacity: 1;

        transform:
            translate(60px,82px)
            translateY(0);
    }
}

.contact-helmet {
    animation:
        helmetEnter
        8s
        ease-in-out
        infinite;

    transform-origin: center;
}


/* ============================================================
   LIBRETA
============================================================ */

@keyframes notebookBreathe {

    0%,
    100% {
        opacity: .94;
        transform: translateY(0);
    }

    50% {
        opacity: 1;
        transform: translateY(-3px);
    }
}

.contact-notebook {
    animation:
        notebookBreathe
        6s
        ease-in-out
        infinite;

    transform-origin: center;
}


/* ============================================================
   ESCRITURA
============================================================ */

.contact-write-line {
    stroke-dasharray: 210;
    stroke-dashoffset: 210;

    animation:
        writeNote
        8s
        ease-in-out
        infinite;
}

.contact-write-line.l2 {
    animation-delay: .25s;
}

.contact-write-line.l3 {
    animation-delay: .5s;
}

.contact-write-line.l4 {
    animation-delay: .75s;
}

@keyframes writeNote {

    0%,
    12% {
        stroke-dashoffset: 210;
        opacity: .15;
    }

    35%,
    82% {
        stroke-dashoffset: 0;
        opacity: 1;
    }

    100% {
        stroke-dashoffset: 0;
        opacity: .35;
    }
}


/* ============================================================
   LÁPIZ
============================================================ */

@keyframes pencilWrite {

    0%,
    14%,
    100% {
        transform:
            translate(580px,112px)
            rotate(18deg)
            translate(0,0);
    }

    25% {
        transform:
            translate(580px,112px)
            rotate(18deg)
            translate(-10px,12px);
    }

    38% {
        transform:
            translate(580px,112px)
            rotate(18deg)
            translate(-3px,22px);
    }

    52%,
    82% {
        transform:
            translate(580px,112px)
            rotate(18deg)
            translate(0,0);
    }
}

.contact-pencil {
    animation:
        pencilWrite
        8s
        ease-in-out
        infinite;

    transform-origin: 10px 250px;
}


/* ============================================================
   CHECK
============================================================ */

@keyframes checkPulse {

    0%,
    42% {
        opacity: .25;

        transform:
            translate(505px,176px)
            scale(.75);
    }

    52%,
    82% {
        opacity: 1;

        transform:
            translate(505px,176px)
            scale(1);
    }

    100% {
        opacity: .5;

        transform:
            translate(505px,176px)
            scale(.9);
    }
}

.contact-check {
    animation:
        checkPulse
        8s
        ease-in-out
        infinite;

    transform-origin: 505px 176px;
}


/* ============================================================
   SEÑAL
============================================================ */

.contact-signal-path {
    stroke-dasharray: 18 12;

    animation:
        signalDash
        2.6s
        linear
        infinite;
}

@keyframes signalDash {

    to {
        stroke-dashoffset: -60;
    }
}

@keyframes signalDot {

    0% {
        transform: translateX(0);
        opacity: .4;
    }

    100% {
        transform: translateX(648px);
        opacity: 1;
    }
}

.contact-signal-dot {
    animation:
        signalDot
        5.5s
        ease-in-out
        infinite;
}


/* ============================================================
   PLANOS
============================================================ */

@keyframes rollsFloat {

    0%,
    100% {
        transform:
            translate(75px,270px)
            rotate(-13deg);
    }

    50% {
        transform:
            translate(75px,270px)
            rotate(-11deg);
    }
}

.contact-rolls {
    animation:
        rollsFloat
        7s
        ease-in-out
        infinite;

    transform-origin: center;
}


/* ============================================================
   ESCUADRA
============================================================ */

@keyframes squareShift {

    0%,
    100% {
        transform:
            translate(555px,320px)
            rotate(7deg);
    }

    50% {
        transform:
            translate(555px,320px)
            rotate(9deg);
    }
}

.contact-square {
    animation:
        squareShift
        9s
        ease-in-out
        infinite;
}


/* ============================================================
   FORMULARIO
============================================================ */

form {
    width: 100%;
    min-width: 0;
}

form > div {
    min-width: 0;
}

form input,
form select,
form textarea {
    max-width: 100%;

    transition:
        border-color .3s ease,
        box-shadow .3s ease,
        transform .3s ease,
        background-color .3s ease;
}

form input:focus,
form select:focus,
form textarea:focus {
    transform: translateY(-2px);
}


/* ============================================================
   EFECTO TARJETA INFORMACIÓN
============================================================ */

.contact-info-effect {
    transition:
        transform .55s cubic-bezier(.16,1,.3,1),
        box-shadow .55s ease;
}

@media (hover: hover) and (pointer: fine) {

    .contact-info-effect:hover {
        transform: translateY(-6px);

        box-shadow:
            0 24px 55px
            rgba(0,0,0,.14);
    }
}


/* ============================================================
   PASOS
============================================================ */

.contact-step-effect {
    position: relative;
    overflow: hidden;
}

.contact-step-effect::before {
    content: "";

    position: absolute;

    left: 0;
    bottom: 0;

    width: 0;
    height: 3px;

    background: #FACC15;

    transition:
        width
        .45s
        cubic-bezier(.16,1,.3,1);
}

@media (hover: hover) and (pointer: fine) {

    .contact-step-effect:hover::before {
        width: 100%;
    }
}


/* ============================================================
   LAPTOP · 1024 - 1199
============================================================ */

@media (min-width: 1024px) and (max-width: 1199px) {

    .contact-site-desk {
        width: 46%;
        max-width: 570px;

        right: -2%;
        top: 56%;

        opacity: .82;
    }

}


/* ============================================================
   TABLET · 768 - 1023
============================================================ */

@media (min-width: 768px) and (max-width: 1023px) {

    .contact-site-desk {
        display: block !important;

        width: 500px;
        max-width: none;

        right: -120px;
        top: 54%;

        z-index: 1;

        opacity: .22;
    }

    .contact-site-desk svg {
        width: 100%;
    }



    /* FORMULARIO */

    form input,
    form select {
        min-height: 48px;
    }

    form textarea {
        min-height: 150px;
    }

}


/* ============================================================
   MÓVIL · HASTA 767
============================================================ */

@media (max-width: 767px) {

    /* ========================================================
       HERO
    ======================================================== */

    main > section:first-of-type {
        min-height: 520px;
        padding-top: 80px;
    }


    /*
       La escena se convierte en gráfico de fondo.
       No invade el contenido.
    */

    .contact-site-desk {
        display: block !important;

        width: 320px;
        max-width: none;

        right: -85px;

        top: auto;
        bottom: 18px;

        z-index: 1;

        opacity: .18;

        transform: none;

        filter: none;

        /*
           Quitamos únicamente el movimiento
           del contenedor completo.

           Las animaciones internas continúan.
        */
        animation: none;
    }

    .contact-site-desk svg {
        width: 100%;
        height: auto;
    }


    /* TEXTO DEL HERO */

    main >
    section:first-of-type >
    .relative.z-10 {
        position: relative;
        z-index: 10;
    }

    main >
    section:first-of-type h1 {
        font-size:
            clamp(
                2.7rem,
                14vw,
                4.4rem
            );

        line-height: .9;

        overflow-wrap: normal;
        word-break: normal;
    }

    main >
    section:first-of-type p {
        text-align: left !important;
    }



    /* ========================================================
       INTRO
    ======================================================== */

    main >
    section:nth-of-type(2) p {
        text-align: left !important;
    }


    /* ========================================================
       INFORMACIÓN + FORMULARIO
    ======================================================== */

    main >
    section:nth-of-type(3) {
        padding-top: 48px;
        padding-bottom: 48px;
    }

    main >
    section:nth-of-type(3)
    .bg-\[\#15297C\] {
        padding: 28px 24px;
    }

    main >
    section:nth-of-type(3) p {
        text-align: left !important;
    }


    /* CORREO / TELÉFONO */

    main >
    section:nth-of-type(3) a {
        max-width: 100%;

        overflow-wrap: anywhere;
        word-break: normal;
    }


    /* FORMULARIO */

    form input,
    form select,
    form textarea {
        width: 100%;
        max-width: 100%;

        /*
           Evita zoom automático en iPhone.
        */
        font-size: 16px;
    }

    form input,
    form select {
        min-height: 50px;
    }

    form textarea {
        min-height: 160px;
        resize: vertical;
    }

    form button[type="submit"] {
        width: 100%;
        min-height: 52px;
    }


    /* ========================================================
       PASOS
    ======================================================== */

    main >
    section:nth-of-type(4) {
        padding-top: 48px;
        padding-bottom: 48px;
    }

    main >
    section:nth-of-type(4) p {
        text-align: left !important;
    }


    /* ========================================================
       CTA
    ======================================================== */

    main >
    section:last-of-type {
        padding-top: 56px;
        padding-bottom: 56px;
    }

    main >
    section:last-of-type h2 {
        font-size: 1.75rem;
        line-height: 1.1;
    }

    main >
    section:last-of-type a {
        width: 100%;
        min-height: 52px;
    }

}


/* ============================================================
   CELULAR · HASTA 639
============================================================ */

@media (max-width: 639px) {

    main >
    section:nth-of-type(2) {
        padding-top: 40px;
        padding-bottom: 40px;
    }

    main >
    section:nth-of-type(3) {
        padding-top: 42px;
        padding-bottom: 42px;
    }

    main >
    section:nth-of-type(4) {
        padding-top: 42px;
        padding-bottom: 42px;
    }


    /*
       Evitamos espacios enormes entre palabras
       causados por text-align: justify.
    */

    main p {
        text-align: left !important;
        text-justify: auto !important;
    }

}


/* ============================================================
   CELULARES PEQUEÑOS
============================================================ */

@media (max-width: 374px) {

    main >
    section:first-of-type {
        min-height: 520px;
    }

    .contact-site-desk {
        width: 285px;

        right: -75px;
        bottom: 20px;

        opacity: .16;
    }

    main >
    section:first-of-type h1 {
        font-size: 2.6rem;
    }

    main >
    section:nth-of-type(3)
    .bg-\[\#15297C\] {
        padding: 24px 20px;
    }

    main >
    section:nth-of-type(3)
    .bg-white {
        padding-left: 20px;
        padding-right: 20px;
    }

    main >
    section:last-of-type h2 {
        font-size: 1.55rem;
    }

}





/* ============================================================
   DISPOSITIVOS TÁCTILES
============================================================ */

@media (hover: none) and (pointer: coarse) {

    /*
       No dejamos efectos hover "pegados"
       después de tocar.
    */

    main >
    section:nth-of-type(3)
    .hover\:-translate-y-2:hover,

    main >
    section:nth-of-type(4)
    .hover\:-translate-y-1:hover,

    main >
    section:last-of-type
    .hover\:-translate-y-1:hover {

        transform: none;
    }

    .contact-info-effect:hover {
        transform: none;
    }

}


/* ============================================================
   ACCESIBILIDAD
============================================================ */

@media (prefers-reduced-motion: reduce) {

    .contact-site-desk,
    .contact-helmet,
    .contact-notebook,
    .contact-pencil,
    .contact-check,
    .contact-signal-path,
    .contact-signal-dot,
    .contact-rolls,
    .contact-square,
    .contact-line,
    .contact-write-line {

        animation: none !important;
    }

    .contact-write-line {
        stroke-dashoffset: 0;
    }

}

/* MOVER ILUSTRACIÓN HACIA LA IZQUIERDA */
.contact-site-desk {
    transform: translateX(-100px);
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    /* BLR ARCOS · CONTACTO · Sin revelado al hacer scroll */
    const main = document.querySelector('main');
    if (!main) return;

    // El contenido no debe desaparecer al subir o bajar.
    main.querySelectorAll('.contact-reveal').forEach(function (el) {
        el.classList.remove('contact-reveal', 'reveal-left', 'reveal-right',
            'reveal-up', 'reveal-scale', 'reveal-soft');
        el.classList.add('is-visible');
        el.style.removeProperty('--contact-delay');
    });
    document.body.classList.remove('contact-scroll-up');

    // Conservar efectos hover en la tarjeta de información.
    const tarjetaInfo = main.querySelector('section:nth-of-type(3) .grid > div:first-child > div');
    if (tarjetaInfo) tarjetaInfo.classList.add('contact-info-effect');

    // Conservar el subrayado hover de los tres pasos.
    main.querySelectorAll('section:nth-of-type(4) > div > .grid > div')
        .forEach(function (tarjeta) {
            tarjeta.classList.add('contact-step-effect');
        });
});
</script>

@endsection
