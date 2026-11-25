@extends('layouts.app')



@section('title', $proyecto['nombre'] . ' | BLR & ARCOS')



@section('content')





{{-- ============================================================

     HERO PROYECTO / PORTAFOLIO BLR ARCOS

============================================================ --}}

<section class="blr-project-hero relative w-full bg-white overflow-hidden">



    <div class="relative w-full

                h-[560px]

                sm:h-[610px]

                lg:h-[650px]

                xl:h-[680px]

                2xl:h-[700px]

                overflow-hidden">





        {{-- =====================================================

             FOTOGRAFÍA GRANDE / FONDO COMPLETO

        ====================================================== --}}

        <div class="absolute inset-0 bg-gray-200">



            @if(count($imagenes) > 0)



                <img

                    src="{{ asset($imagenPortada) }}"

    alt="{{ $proyecto['nombre'] }}"

    class="blr-project-photo

           absolute inset-0

           w-full h-full

           object-cover

           object-[center_45%]"

                >



            @else



                <div class="absolute inset-0 bg-gray-200"></div>



            @endif



        </div>







        {{-- =====================================================

             OSCURECIMIENTO MUY SUTIL DEL LADO DERECHO

        ====================================================== --}}

        <div class="absolute inset-0

                    bg-gradient-to-l

                    from-black/25

                    via-transparent

                    to-transparent

                    pointer-events-none">

        </div>







        {{-- =====================================================

             PANEL BLANCO IZQUIERDO

             Entra encima de la fotografía

        ====================================================== --}}

        <div class="blr-project-panel

                    absolute

                    z-10

                    inset-y-0

                    left-0

                    w-full

                    lg:w-[42%]

                    pointer-events-none">





            {{-- Líneas técnicas --}}

            <div class="absolute inset-0 overflow-hidden">



                <span class="absolute

                             top-0

                             left-[11%]

                             w-px

                             h-full

                             bg-[#15297C]/[0.07]">

                </span>





                <span class="absolute

                             top-0

                             left-[27%]

                             w-px

                             h-full

                             bg-[#15297C]/[0.045]">

                </span>





                <span class="absolute

                             -left-[130px]

                             top-[120px]

                             w-[600px]

                             h-px

                             bg-[#15297C]/[0.055]

                             rotate-[31deg]">

                </span>





                <span class="absolute

                             -left-[80px]

                             top-[245px]

                             w-[570px]

                             h-px

                             bg-[#15297C]/[0.035]

                             rotate-[31deg]">

                </span>



            </div>



        </div>







        {{-- =====================================================

             SEGUNDO VELO PARA CONSEGUIR EL EFECTO DE LA REFERENCIA

        ====================================================== --}}

        <div class="hidden lg:block

                    absolute

                    z-[11]

                    top-0

                    bottom-0

                    left-[30%]

                    w-[18%]

                    blr-project-fade

                    pointer-events-none">

        </div>







        {{-- =====================================================

             LÍNEA DIAGONAL MUY SUTIL

        ====================================================== --}}

        <div class="hidden lg:block

                    absolute

                    z-[12]

                    top-[-8%]

                    left-[37.5%]

                    w-px

                    h-[116%]

                    bg-white/70

                    rotate-[21deg]

                    pointer-events-none">

        </div>







        {{-- =====================================================

             CONTENIDO

        ====================================================== --}}

        <div class="relative

                    z-20

                    w-full

                    max-w-[1440px]

                    mx-auto

                    h-full

                    px-5

                    sm:px-8

                    lg:px-10

                    xl:px-12">





            <div class="h-full

                        flex

                        items-center">





                <div class="w-full

                            max-w-[570px]

                            lg:max-w-[600px]

                            -mt-2">





                    {{-- TODOS LOS PROYECTOS --}}

                    <a

                        href="{{ url('/proyectos') }}"

                        class="blr-project-back

                               inline-flex

                               items-center

                               gap-4

                               text-gray-400

                               hover:text-[#15297C]

                               transition-colors

                               duration-300

                               mb-14"

                    >



                        <span class="text-[#15297C]

                                     text-sm

                                     transition-transform

                                     duration-300">



                            ←



                        </span>





                        <span class="text-[9px]

                                     sm:text-[10px]

                                     uppercase

                                     tracking-[0.24em]

                                     font-black">



                            Todos los proyectos



                        </span>



                    </a>







                    {{-- =================================================

                         CATEGORÍA

                         YA NO MOSTRAMOS EL NÚMERO

                    ================================================== --}}

                    <div class="flex

                                items-center

                                gap-4

                                mb-7">



                        <span class="w-12

                                     h-[2px]

                                     bg-[#15297C]">

                        </span>





                        <span class="text-gray-400

                                     text-[9px]

                                     sm:text-[10px]

                                     uppercase

                                     tracking-[0.22em]

                                     font-black">



                            {{ $proyecto['categoria'] }}



                        </span>



                    </div>







                    {{-- =================================================

                         NOMBRE DEL PROYECTO

                    ================================================== --}}

                    <h1 class="blr-project-name

                               text-black

                               text-[47px]

                               sm:text-[60px]

                               md:text-[68px]

                               lg:text-[72px]

                               xl:text-[78px]

                               2xl:text-[82px]

                               font-black

                               uppercase

                               leading-[0.84]

                               tracking-[-0.045em]">



                        {{ $proyecto['nombre'] }}



                    </h1>







                    {{-- =================================================

                         DETALLE AZUL + DORADO

                    ================================================== --}}

                    <div class="flex

                                items-center

                                mt-9

                                mb-8">



                        <span class="w-[68px]

                                     h-[3px]

                                     bg-[#15297C]">

                        </span>



                        <span class="w-[22px]

                                     h-[3px]

                                     bg-yellow-400">

                        </span>



                    </div>







                    {{-- =================================================

                         UBICACIÓN

                    ================================================== --}}

                    <div class="flex

                                items-start

                                gap-4">





                        {{-- ICONO --}}

                        <div class="shrink-0 mt-[1px]">



                            <svg

                                viewBox="0 0 24 24"

                                fill="none"

                                xmlns="http\://www.w3.org/2000/svg"

                                class="w-[30px]

                                       h-[30px]

                                       text-[#15297C]"

                            >



                                <path

                                    d="M12 21C12 21 19 14.6 19 8.8C19 4.9 15.9 2 12 2C8.1 2 5 4.9 5 8.8C5 14.6 12 21 12 21Z"

                                    stroke="currentColor"

                                    stroke-width="1.7"

                                />



                                <circle

                                    cx="12"

                                    cy="9"

                                    r="2.3"

                                    stroke="currentColor"

                                    stroke-width="1.7"

                                />



                            </svg>



                        </div>







                        <div>



                            <p class="text-gray-400

                                      text-[8px]

                                      sm:text-[9px]

                                      uppercase

                                      tracking-[0.25em]

                                      font-black

                                      mb-[5px]">



                                Ubicación



                            </p>





                            <p class="text-black

                                      text-xs

                                      sm:text-sm

                                      uppercase

                                      tracking-[0.025em]

                                      font-black">



                                {{ $proyecto['ubicacion'] }}



                            </p>



                        </div>



                    </div>



                </div>



            </div>



        </div>







        {{-- =====================================================

             PORTAFOLIO / PARTE DERECHA

        ====================================================== --}}

        <div class="hidden

                    lg:block

                    absolute

                    z-20

                    right-[7%]

                    bottom-[10%]">





            <div class="w-8

                        h-[2px]

                        bg-yellow-400

                        mb-4">

            </div>





            <p class="text-white/70

                      text-[8px]

                      uppercase

                      tracking-[0.28em]

                      font-black

                      mb-2">



                Portafolio de obra



            </p>





            <p class="text-white

                      text-base

                      xl:text-lg

                      uppercase

                      tracking-[-0.01em]

                      font-black">



                {{ $proyecto['nombre'] }}



            </p>



        </div>



    </div>



</section>







{{-- ============================================================

     INFORMACIÓN DEL PROYECTO

============================================================ --}}



<section class="bg-white py-12 sm:py-16 lg:py-20">



    <div class="w-full max-w-[1440px] mx-auto

                px-4 sm:px-6 lg:px-8 xl:px-10">



        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">





            {{-- COLUMNA IZQUIERDA --}}

            <div class="lg:col-span-4">



                <div class="flex items-center gap-3 mb-3">



                    <span class="w-7 h-[2px] bg-[#15297C]"></span>



                    <p class="text-yellow-500

                              text-[9px] sm:text-[10px]

                              uppercase tracking-[0.25em]

                              font-black">



                        BLR & ARCOS



                    </p>



                </div>





                <h2 class="text-black

                           text-2xl sm:text-3xl lg:text-4xl

                           font-black uppercase">



                    El proyecto



                </h2>



            </div>





            {{-- COLUMNA DERECHA --}}

            <div class="lg:col-span-8">



                <p class="text-gray-600

                          text-sm sm:text-base

                          leading-7 sm:leading-8

                          text-justify">



                    {{ $proyecto['descripcion'] }}



                </p>





                {{-- DATOS --}}

                <div class="grid grid-cols-1 sm:grid-cols-2

                            gap-5 mt-10

                            pt-8 border-t border-gray-200">





                    <div>



                        <p class="text-gray-400

                                  text-[9px]

                                  uppercase

                                  tracking-[0.2em]

                                  font-black">



                            Ubicación



                        </p>



                        <p class="text-black

                                  text-sm

                                  font-black

                                  uppercase

                                  mt-2">



                            {{ $proyecto['ubicacion'] }}



                        </p>



                    </div>





                    <div>



                        <p class="text-gray-400

                                  text-[9px]

                                  uppercase

                                  tracking-[0.2em]

                                  font-black">



                            Tipo de proyecto



                        </p>



                        <p class="text-black

                                  text-sm

                                  font-black

                                  uppercase

                                  mt-2">



                            {{ $proyecto['categoria'] }}



                        </p>



                    </div>



                </div>



            </div>



        </div>



    </div>



</section>







{{-- ============================================================

     GALERÍA

============================================================ --}}



<section class="bg-[#f5f5f5] py-14 sm:py-16 lg:py-24">



    <div class="w-full max-w-[1440px] mx-auto

                px-4 sm:px-6 lg:px-8 xl:px-10">





        {{-- ENCABEZADO --}}

        <div class="flex flex-col md:flex-row

                    md:items-end md:justify-between

                    gap-6

                    mb-10 sm:mb-12">





            <div>



                <div class="flex items-center gap-3 mb-3">



                    <span class="w-7 h-[2px] bg-[#15297C]"></span>



                    <p class="text-yellow-500

                              text-[9px] sm:text-[10px]

                              uppercase tracking-[0.25em]

                              font-black">



                        Evidencia fotográfica



                    </p>



                </div>





                <h2 class="text-black

                           text-2xl sm:text-3xl lg:text-4xl

                           font-black uppercase">



                    Galería del proyecto



                </h2>



            </div>





            @if(count($imagenes) > 0)



                <p class="text-gray-500

                          text-[10px] sm:text-xs

                          uppercase tracking-[0.15em]">



                    {{ count($imagenes) }}



                    {{ count($imagenes) === 1 ? 'fotografía' : 'fotografías' }}



                </p>



            @endif



        </div>







        {{-- FOTOGRAFÍAS --}}

        @if(count($imagenes) > 0)



            <div class="grid

                        grid-cols-1

                        sm:grid-cols-2

                        lg:grid-cols-3

                        gap-4 sm:gap-5">





                @foreach($imagenes as $index => $imagen)



                    <button

                        type="button"



                        onclick="abrirGaleria({{ $index }})"



                        class="group

                               relative

                               block

                               w-full

                               aspect-[4/3]

                               overflow-hidden

                               bg-gray-200

                               cursor-pointer

                               text-left"

                    >



                        <img

                            src="{{ asset($imagen) }}"



                            alt="{{ $proyecto['nombre'] }} - Fotografía {{ $index + 1 }}"



                            loading="lazy"



                            class="w-full

                                   h-full

                                   object-cover

                                   transition-transform

                                   duration-700

                                   group-hover:scale-105"

                        >





                        {{-- OVERLAY --}}

                        <div class="absolute inset-0

                                    bg-black/0

                                    group-hover:bg-black/30

                                    transition-all

                                    duration-500">

                        </div>





                        {{-- NÚMERO --}}

                        <div class="absolute

                                    bottom-4

                                    left-4

                                    bg-black/80

                                    text-white

                                    px-3

                                    py-2

                                    text-[9px]

                                    tracking-[0.15em]

                                    font-black">



                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}



                        </div>





                        {{-- VER --}}

                        <div class="absolute

                                    bottom-4

                                    right-4

                                    bg-[#15297C]

                                    text-white

                                    px-4

                                    py-2

                                    text-[9px]

                                    uppercase

                                    tracking-[0.15em]

                                    font-black

                                    opacity-0

                                    translate-y-2

                                    group-hover:opacity-100

                                    group-hover:translate-y-0

                                    transition-all

                                    duration-300">



                            Ver imagen



                        </div>



                    </button>



                @endforeach



            </div>





        @else





            {{-- SIN FOTOS --}}

            <div class="bg-white

                        border border-gray-200

                        py-16 px-6

                        text-center">



                <p class="text-gray-400

                          text-xs

                          uppercase

                          tracking-[0.18em]

                          font-black">



                    Próximamente agregaremos fotografías de este proyecto.



                </p>



            </div>



        @endif



    </div>



</section>







{{-- ============================================================

     LIGHTBOX / IMAGEN GRANDE

============================================================ --}}



@if(count($imagenes) > 0)



<div

    id="galeriaLightbox"



    class="fixed

           inset-0

           z-[9999]

           hidden

           bg-black/95

           items-center

           justify-center"

>





    {{-- CERRAR --}}

    <button

        type="button"

        onclick="cerrarGaleria()"



        class="absolute

               top-5

               right-5

               sm:top-8

               sm:right-8

               z-20

               w-11

               h-11

               border

               border-white/30

               text-white

               hover:bg-white

               hover:text-black

               transition-all

               duration-300

               text-xl"

    >



        ×



    </button>







    {{-- ANTERIOR --}}

    <button

        type="button"

        onclick="imagenAnterior()"



        class="absolute

               left-3

               sm:left-6

               lg:left-10

               z-20

               w-11

               h-11

               sm:w-12

               sm:h-12

               border

               border-white/30

               text-white

               hover:bg-white

               hover:text-black

               transition-all

               duration-300"

    >



        ←



    </button>







    {{-- IMAGEN --}}

    <div class="w-full h-full

                flex flex-col

                items-center

                justify-center

                px-16 sm:px-20

                py-20">



        <img

            id="imagenLightbox"



            src=""



            alt="{{ $proyecto['nombre'] }}"



            class="max-w-full

                   max-h-[80vh]

                   object-contain"

        >





        {{-- CONTADOR --}}

        <div

            id="contadorGaleria"



            class="text-white/70

                   text-[10px]

                   sm:text-xs

                   tracking-[0.2em]

                   font-black

                   mt-5"

        >

        </div>



    </div>







    {{-- SIGUIENTE --}}

    <button

        type="button"

        onclick="imagenSiguiente()"



        class="absolute

               right-3

               sm:right-6

               lg:right-10

               z-20

               w-11

               h-11

               sm:w-12

               sm:h-12

               border

               border-white/30

               text-white

               hover:bg-white

               hover:text-black

               transition-all

               duration-300"

    >



        →



    </button>



</div>







<script>
/* BLR ARCOS - GALERÍA SIN ANIMACIONES DE APARICIÓN */
const imagenesGaleria = @json(collect($imagenes)->map(fn($imagen) => asset($imagen))->values());
let imagenActual = 0;

function abrirGaleria(index) {
    if (!imagenesGaleria.length) return;
    imagenActual = Math.max(0, Math.min(index, imagenesGaleria.length - 1));
    const lightbox = document.getElementById('galeriaLightbox');
    if (!lightbox) return;
    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
    document.body.style.overflow = 'hidden';
    actualizarGaleria();
}
function cerrarGaleria() {
    const lightbox = document.getElementById('galeriaLightbox');
    if (!lightbox) return;
    lightbox.classList.add('hidden');
    lightbox.classList.remove('flex');
    document.body.style.overflow = '';
}
function actualizarGaleria() {
    if (!imagenesGaleria.length) return;
    const imagen = document.getElementById('imagenLightbox');
    const contador = document.getElementById('contadorGaleria');
    if (imagen) imagen.src = imagenesGaleria[imagenActual];
    if (contador) contador.textContent = `${imagenActual + 1} / ${imagenesGaleria.length}`;
}
function imagenSiguiente() {
    if (!imagenesGaleria.length) return;
    imagenActual = (imagenActual + 1) % imagenesGaleria.length;
    actualizarGaleria();
}
function imagenAnterior() {
    if (!imagenesGaleria.length) return;
    imagenActual = (imagenActual - 1 + imagenesGaleria.length) % imagenesGaleria.length;
    actualizarGaleria();
}

document.addEventListener('DOMContentLoaded', () => {
    // Sin animaciones de entrada o desplazamiento.
    document.querySelectorAll('.blr-gallery-item').forEach(el => el.classList.remove('blr-detail-reveal'));
    document.addEventListener('keydown', event => {
        const lightbox = document.getElementById('galeriaLightbox');
        if (!lightbox || lightbox.classList.contains('hidden')) return;
        if (event.key === 'Escape') cerrarGaleria();
        if (event.key === 'ArrowRight') imagenSiguiente();
        if (event.key === 'ArrowLeft') imagenAnterior();
    });
    const lightbox = document.getElementById('galeriaLightbox');
    lightbox?.addEventListener('click', event => {
        if (event.target === lightbox) cerrarGaleria();
    });
    const image = document.getElementById('imagenLightbox');
    let startX = 0, startY = 0;
    image?.addEventListener('touchstart', event => {
        if (!event.touches.length) return;
        startX = event.touches[0].clientX;
        startY = event.touches[0].clientY;
    }, {passive:true});
    image?.addEventListener('touchend', event => {
        if (!event.changedTouches.length) return;
        const dx = event.changedTouches[0].clientX - startX;
        const dy = event.changedTouches[0].clientY - startY;
        if (Math.abs(dx) < 50 || Math.abs(dx) <= Math.abs(dy)) return;
        if (dx < 0) imagenSiguiente(); else imagenAnterior();
    }, {passive:true});
});
</script>



@endif







{{-- ============================================================

     CTA

============================================================ --}}



<section class="relative bg-black py-14 sm:py-16 lg:py-20 overflow-hidden">



    <div class="relative z-10

                w-full max-w-[1440px] mx-auto

                px-4 sm:px-6 lg:px-8 xl:px-10">



        <div class="flex flex-col

                    lg:flex-row

                    lg:items-center

                    lg:justify-between

                    gap-8">





            <div>



                <p class="text-yellow-400

                          text-[9px] sm:text-[10px]

                          uppercase

                          tracking-[0.22em]

                          font-black

                          mb-4">



                    BLR & ARCOS



                </p>





                <h2 class="text-white

                           text-2xl sm:text-3xl lg:text-4xl

                           font-black uppercase">



                    ¿Tienes un proyecto en puerta?



                </h2>



            </div>





            <a

                href="{{ url('/contacto') }}"



                class="inline-flex

                       w-full sm:w-auto

                       items-center

                       justify-center

                       gap-3

                       border

                       border-yellow-400

                       text-yellow-400

                       px-7

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



                Contáctanos



                <span>→</span>



            </a>



        </div>



    </div>



</section>



{{-- ============================================================

     ESTILOS HERO

============================================================ --}}

<style>

/* ============================================================

   BLR ARCOS · DETALLE DE PROYECTO

   RESPONSIVE COMPLETO

============================================================ */





/* ============================================================

   BASE

============================================================ */



html,

body {

    width: 100%;

    max-width: 100%;

    overflow-x: hidden;

}



main {

    width: 100%;

    max-width: 100%;

    overflow-x: clip;

}



img,

svg {

    max-width: 100%;

}





/* ============================================================

   HERO

============================================================ */



.blr-project-hero {

    width: 100%;

    overflow: hidden;

    isolation: isolate;

}





/* ============================================================

   FOTOGRAFÍA

============================================================ */



.blr-project-photo {

    position: absolute;



    inset: 0;



    width: 100%;

    height: 100%;



    object-fit: cover;



    /*

     * Desktop:

     * damos mayor presencia a la parte derecha

     * porque el panel ocupa el lado izquierdo.

     */

    object-position: 70% center;



    transform: none !important;



    transition:

        none;

}





/* ============================================================

   PANEL BLANCO

============================================================ */



.blr-project-panel {

    background:

        linear-gradient(

            105deg,



            rgba(255,255,255,1) 0%,

            rgba(255,255,255,1) 56%,



            rgba(255,255,255,.97) 66%,

            rgba(255,255,255,.88) 74%,

            rgba(255,255,255,.68) 83%,

            rgba(255,255,255,.34) 92%,

            rgba(255,255,255,0) 100%

        );

}





/* ============================================================

   SEGUNDA TRANSICIÓN

============================================================ */



.blr-project-fade {

    background:

        linear-gradient(

            105deg,



            rgba(255,255,255,.94) 0%,

            rgba(255,255,255,.82) 24%,

            rgba(255,255,255,.60) 47%,

            rgba(255,255,255,.32) 69%,

            rgba(255,255,255,.10) 86%,

            rgba(255,255,255,0) 100%

        );



    transform:

        skewX(-12deg);

}





/* ============================================================

   TÍTULO

============================================================ */



.blr-project-name {

    max-width: 600px;



    text-wrap: balance;



    overflow-wrap: normal;



    word-break: normal;

}





/* ============================================================

   REGRESAR

============================================================ */



.blr-project-back {

    transition:

        color .3s ease;

}



.blr-project-back span:first-child {

    transition:

        transform .3s ease;

}



@media (hover:hover) and (pointer:fine) {



    .blr-project-back:hover span:first-child {

        transform:

            translateX(-4px);

    }



}





/* ============================================================

   REVEAL RESPONSIVE

============================================================ */



.blr-detail-reveal {

    --blr-detail-x: 0px;

    --blr-detail-y: 28px;

    --blr-detail-scale: 1;

    --blr-detail-delay: 0ms;



    opacity: 0;



    transform:

        translate3d(

            var(--blr-detail-x),

            var(--blr-detail-y),

            0

        )

        scale(

            var(--blr-detail-scale)

        );



    transition:

        opacity

        .7s

        cubic-bezier(.22,.61,.36,1)

        var(--blr-detail-delay),



        transform

        .85s

        cubic-bezier(.16,1,.3,1)

        var(--blr-detail-delay);



    will-change:

        opacity,

        transform;

}





.blr-detail-reveal.from-left {

    --blr-detail-x: -38px;

    --blr-detail-y: 0px;

}





.blr-detail-reveal.from-right {

    --blr-detail-x: 38px;

    --blr-detail-y: 0px;

}





.blr-detail-reveal.from-up {

    --blr-detail-x: 0px;

    --blr-detail-y: 28px;

}





.blr-detail-reveal.zoom-soft {

    --blr-detail-x: 0px;

    --blr-detail-y: 20px;

    --blr-detail-scale: .98;

}





.blr-detail-reveal.is-visible {

    opacity: 1;



    transform:

        translate3d(0,0,0)

        scale(1);

}





/* ============================================================

   INFORMACIÓN DEL PROYECTO

============================================================ */



.blr-project-hero + section p {

    overflow-wrap: break-word;

}





/* ============================================================

   GALERÍA

============================================================ */



.blr-gallery-item {

    transform:

        translateZ(0);



    transition:

        transform .45s

        cubic-bezier(.16,1,.3,1),

        box-shadow .45s ease;

}





@media (hover:hover) and (pointer:fine) {



    .blr-gallery-item:hover {

        transform:

            translateY(-4px);



        box-shadow:

            0 18px 38px

            rgba(0,0,0,.12);

    }



}





/* ============================================================

   LIGHTBOX

============================================================ */



#galeriaLightbox {

    overscroll-behavior:

        contain;



    touch-action:

        pan-y;

}





#imagenLightbox {

    user-select:

        none;



    -webkit-user-drag:

        none;

}





/* ============================================================

   LAPTOP

   1024 - 1279

============================================================ */



@media

(min-width:1024px)

and

(max-width:1279px) {



    .blr-project-panel {

        width:

            46% !important;

    }





    .blr-project-name {

        max-width:

            520px;

    }





    .blr-project-photo {

        object-position:

            72% center;

    }



}





/* ============================================================

   TABLET

   768 - 1023

============================================================ */



@media

(min-width:768px)

and

(max-width:1023px) {



    /* ========================================================

       HERO

    ======================================================== */



    .blr-project-hero >

    .relative.w-full {

        height:

            610px !important;

    }





    .blr-project-panel {

        width:

            72% !important;



        background:

            linear-gradient(

                90deg,



                rgba(255,255,255,1) 0%,

                rgba(255,255,255,.99) 62%,

                rgba(255,255,255,.91) 76%,

                rgba(255,255,255,.58) 90%,

                rgba(255,255,255,0) 100%

            );

    }





    .blr-project-photo {

        object-position:

            68% center;

    }





    .blr-project-name {

        max-width:

            500px;



        font-size:

            clamp(

                3.4rem,

                8vw,

                4.25rem

            ) !important;



        line-height:

            .86;

    }





    /*

     * Evitamos que el contenido quede

     * excesivamente pegado al centro.

     */



    .blr-project-hero

    .h-full.flex.items-center {

        align-items:

            center;

    }





    .blr-project-back {

        margin-bottom:

            42px !important;

    }





    /* ========================================================

       INFORMACIÓN

    ======================================================== */



    .blr-project-hero + section {

        padding-top:

            58px;



        padding-bottom:

            58px;

    }





    /* ========================================================

       GALERÍA

    ======================================================== */



    .blr-project-hero

    + section

    + section {

        padding-top:

            60px;



        padding-bottom:

            60px;

    }





    /* ========================================================

       REVEALS

    ======================================================== */



    .blr-detail-reveal.from-left {

        --blr-detail-x: -28px;

    }



    .blr-detail-reveal.from-right {

        --blr-detail-x: 28px;

    }



}





/* ============================================================

   MÓVIL

   HASTA 767

============================================================ */



@media (max-width:767px) {



    /* ========================================================

       HERO

    ======================================================== */



    /* ========================================================

   HERO MÓVIL · FOTO CON MAYOR PROTAGONISMO

======================================================== */



.blr-project-photo {

    width: 100%;

    height: 100%;



    object-fit: cover;



    /*

     * Mostramos más de la parte útil

     * de la fotografía.

     */

    object-position: 58% center !important;

}





/*

 * El panel sigue ocupando todo el hero,

 * pero el blanco desaparece antes.

 */

.blr-project-panel {

    width: 100% !important;



    background:

        linear-gradient(

            90deg,



            rgba(255,255,255,1) 0%,

            rgba(255,255,255,1) 30%,



            rgba(255,255,255,.97) 40%,

            rgba(255,255,255,.90) 48%,

            rgba(255,255,255,.72) 56%,

            rgba(255,255,255,.45) 64%,

            rgba(255,255,255,.18) 71%,



            rgba(255,255,255,0) 78%

        );

}





    /*

     * Contenedor principal.

     */



    .blr-project-hero

    .relative.z-20 {

        padding-left:

            20px !important;



        padding-right:

            20px !important;

    }





    /*

     * En celular el contenido deja de depender

     * del centrado vertical rígido.

     */



    .blr-project-hero

    .h-full.flex.items-center {

        align-items:

            flex-start !important;



        padding-top:

            88px;



        padding-bottom:

            42px;

    }





    .blr-project-hero

    .h-full.flex.items-center

    > div {

        width:

            100%;



        max-width:

            88%;

    }





    /* ========================================================

       REGRESAR

    ======================================================== */



    .blr-project-back {

        margin-bottom:

            35px !important;



        gap:

            12px !important;

    }





    /* ========================================================

       CATEGORÍA

    ======================================================== */



    .blr-project-back

    + div {

        margin-bottom:

            22px !important;

    }





    /* ========================================================

       NOMBRE

    ======================================================== */



    .blr-project-name {

        max-width:

            92%;



        font-size:

            clamp(

                2.65rem,

                12.5vw,

                3.75rem

            ) !important;



        line-height:

            .86 !important;



        letter-spacing:

            -.045em;

    }





    /* ========================================================

       LÍNEA AZUL + DORADA

    ======================================================== */



    .blr-project-name

    + div {

        margin-top:

            26px !important;



        margin-bottom:

            24px !important;

    }





    /* ========================================================

       UBICACIÓN

    ======================================================== */



    .blr-project-name

    + div

    + div {

        max-width:

            290px;

    }





    /* ========================================================

       INFORMACIÓN DEL PROYECTO

    ======================================================== */



    .blr-project-hero

    + section {

        padding-top:

            48px !important;



        padding-bottom:

            48px !important;

    }





    .blr-project-hero

    + section

    > div {

        padding-left:

            20px !important;



        padding-right:

            20px !important;

    }





    /*

     * En móvil no justificamos texto.

     * Evita huecos grandes entre palabras.

     */



    .blr-project-hero

    + section p {

        text-align:

            left !important;

    }





    .blr-project-hero

    + section h2 {

        font-size:

            1.75rem;



        line-height:

            1.05;

    }





    /* ========================================================

       DATOS

    ======================================================== */



    .blr-project-hero

    + section

    .grid.grid-cols-1.sm\:grid-cols-2 {

        margin-top:

            30px !important;



        padding-top:

            25px !important;

    }





    /* ========================================================

       GALERÍA

    ======================================================== */



    .blr-project-hero

    + section

    + section {

        padding-top:

            50px !important;



        padding-bottom:

            50px !important;

    }





    .blr-project-hero

    + section

    + section

    > div {

        padding-left:

            20px !important;



        padding-right:

            20px !important;

    }





    .blr-project-hero

    + section

    + section h2 {

        font-size:

            1.75rem;



        line-height:

            1.05;

    }





    /*

     * Galería:

     * una foto por fila en móvil.

     */



    .blr-project-hero

    + section

    + section

    button.group {

        width:

            100%;

    }





    /*

     * En touch mostramos siempre

     * la numeración pero no necesitamos

     * depender de hover para "Ver imagen".

     */



    .blr-project-hero

    + section

    + section

    button.group

    .absolute.bottom-4.right-4 {

        opacity:

            1 !important;



        transform:

            none !important;



        padding:

            7px 10px;

    }





    /* ========================================================

       LIGHTBOX

    ======================================================== */



    #galeriaLightbox {

        padding:

            0;

    }





    #galeriaLightbox

    > div {

        padding-left:

            52px !important;



        padding-right:

            52px !important;



        padding-top:

            75px !important;



        padding-bottom:

            70px !important;

    }





    #imagenLightbox {

        max-width:

            100%;



        max-height:

            72vh;

    }





    #galeriaLightbox

    button {

        flex-shrink:

            0;

    }





    /* ========================================================

       CTA

    ======================================================== */



    main >

    section:last-of-type {

        padding-top:

            52px !important;



        padding-bottom:

            52px !important;

    }





    main >

    section:last-of-type

    > div {

        padding-left:

            20px !important;



        padding-right:

            20px !important;

    }





    main >

    section:last-of-type h2 {

        font-size:

            1.75rem;



        line-height:

            1.08;

    }





    main >

    section:last-of-type a {

        width:

            100%;

    }





    /* ========================================================

       REVEALS

    ======================================================== */



    .blr-detail-reveal {

        --blr-detail-x: 0px;

        --blr-detail-y: 20px;

        --blr-detail-scale: .99;



        transition:

            opacity

            .6s

            ease

            var(--blr-detail-delay),



            transform

            .72s

            cubic-bezier(.16,1,.3,1)

            var(--blr-detail-delay);

    }





    /*

     * Nada de entradas laterales grandes

     * en una pantalla pequeña.

     */



    .blr-detail-reveal.from-left,

    .blr-detail-reveal.from-right {

        --blr-detail-x:

            0px;



        --blr-detail-y:

            20px;

    }





    .blr-detail-reveal.zoom-soft {

        --blr-detail-y:

            15px;



        --blr-detail-scale:

            .985;

    }



}





/* ============================================================

   CELULARES PEQUEÑOS

============================================================ */



@media (max-width:374px) {



    .blr-project-hero >

    .relative.w-full {

        height:

            540px !important;



        min-height:

            540px;

    }





    .blr-project-hero

    .relative.z-20 {

        padding-left:

            16px !important;



        padding-right:

            16px !important;

    }





    .blr-project-hero

    .h-full.flex.items-center {

        padding-top:

            80px;

    }





    .blr-project-hero

    .h-full.flex.items-center

    > div {

        max-width:

            92%;

    }





    .blr-project-back {

        margin-bottom:

            30px !important;

    }





    .blr-project-name {

        font-size:

            2.5rem !important;



        max-width:

            95%;

    }





    .blr-project-hero

    + section

    > div,



    .blr-project-hero

    + section

    + section

    > div,



    main >

    section:last-of-type

    > div {

        padding-left:

            16px !important;



        padding-right:

            16px !important;

    }





    #galeriaLightbox

    > div {

        padding-left:

            45px !important;



        padding-right:

            45px !important;

    }



}





/* ============================================================

   DESKTOP GRANDE

============================================================ */



@media (min-width:1440px) {



    .blr-project-panel {

        width:

            42% !important;

    }





    .blr-project-photo {

        object-position:

            70% 45%;

    }





    .blr-detail-reveal.from-left {

        --blr-detail-x:

            -48px;

    }





    .blr-detail-reveal.from-right {

        --blr-detail-x:

            48px;

    }



}





/* ============================================================

   TOUCH

============================================================ */



@media (hover:none) and (pointer:coarse) {



    /*

     * Eliminamos efectos hover que pueden

     * quedarse pegados en celular/tablet.

     */



    .group:hover img {

        transform:

            none !important;

    }





    .blr-gallery-item:hover {

        transform:

            none;

    }



}





/* ============================================================

   REDUCED MOTION

============================================================ */



@media (prefers-reduced-motion:reduce) {



    .blr-project-photo {

        transform:

            none !important;



        transition:

            none !important;

    }





    .blr-detail-reveal,

    .blr-detail-reveal.from-left,

    .blr-detail-reveal.from-right,

    .blr-detail-reveal.from-up,

    .blr-detail-reveal.zoom-soft {



        opacity:

            1 !important;



        transform:

            none !important;



        transition:

            none !important;

    }





    .group img {

        transition:

            none !important;

    }



}


/* La información y la fotografía se muestran siempre, sin efectos de aparición. */
.blr-project-hero .blr-project-photo,
.blr-project-hero .relative.z-20 .h-full.flex > div > *,
.blr-project-hero > .relative.w-full > .absolute.z-20:last-child,
.blr-detail-reveal,
.blr-detail-reveal.from-left,
.blr-detail-reveal.from-right,
.blr-detail-reveal.from-up,
.blr-detail-reveal.zoom-soft {
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
    animation: none !important;
    transition: none !important;
}
.blr-project-photo { opacity: 1 !important; }
</style>





@endsection
