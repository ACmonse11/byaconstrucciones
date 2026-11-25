{{-- ============================================================
     HEADER BLR ARCOS
============================================================ --}}

<header
    id="mainHeader"
    class="
        fixed
        top-0
        left-0
        w-full
        z-50
        bg-black/85
        backdrop-blur-xl
        border-b
        border-white/10
        transition-[background-color,box-shadow,border-color]
        duration-300
    "
>

    {{-- ========================================================
        LÍNEA SUPERIOR
    ======================================================== --}}
    <div
        class="
            absolute
            top-0
            left-0
            w-full
            h-[2px]
            bg-[#15297C]
            pointer-events-none
        "
    >

        <div
            class="
                absolute
                top-0
                right-[12%]
                w-5
                h-full
                bg-yellow-400
            "
        ></div>

    </div>


    {{-- ========================================================
        CONTENEDOR PRINCIPAL
    ======================================================== --}}
    <div
        class="
            w-full
            max-w-[1440px]
            mx-auto
            px-4
            sm:px-6
            lg:px-8
            xl:px-10
        "
    >

        <div
            class="
                h-16
                sm:h-[72px]
                lg:h-20
                flex
                items-center
                justify-between
                gap-6
            "
        >


     {{-- =================================================
     LOGO BLR ARCOS
================================================= --}}
<a
    href="{{ route('inicio') }}"
    id="logoInicio"
    class="shrink-0 relative z-10 flex items-center"
    aria-label="Ir al inicio"
>
    <img
        src="{{ asset('images/logos/LOGO FINAL OFICIAL HORIZONTAL.webp') }}"
        alt="BLR ARCOS"
        width="180"
        height="40"
        class="block w-auto h-5 sm:h-6 md:h-7 lg:h-8 object-contain"
    >
</a>



            {{-- =================================================
                NAVEGACIÓN DESKTOP
            ================================================= --}}
            <nav
                class="
                    hidden
                    lg:flex
                    items-center
                    gap-7
                    xl:gap-9
                "
            >


                {{-- PROYECTOS --}}
                <a
                    href="{{ route('proyectos') }}"
                    class="
                        group
                        relative
                        text-white/70
                        hover:text-white
                        text-[10px]
                        xl:text-xs
                        font-semibold
                        uppercase
                        tracking-[0.12em]
                        py-2
                        transition-colors
                        duration-300
                    "
                >
                    Proyectos

                    <span
                        class="
                            absolute
                            left-0
                            bottom-0
                            w-0
                            h-px
                            bg-[#15297C]
                            group-hover:w-full
                            transition-[width]
                            duration-300
                        "
                    ></span>

                </a>


                {{-- SERVICIOS --}}
                <a
                    href="{{ route('servicios') }}"
                    class="
                        group
                        relative
                        text-white/70
                        hover:text-white
                        text-[10px]
                        xl:text-xs
                        font-semibold
                        uppercase
                        tracking-[0.12em]
                        py-2
                        transition-colors
                        duration-300
                    "
                >
                    Servicios

                    <span
                        class="
                            absolute
                            left-0
                            bottom-0
                            w-0
                            h-px
                            bg-[#15297C]
                            group-hover:w-full
                            transition-[width]
                            duration-300
                        "
                    ></span>

                </a>


                {{-- NOSOTROS --}}
                <a
                    href="{{ route('nosotros') }}"
                    class="
                        group
                        relative
                        text-white/70
                        hover:text-white
                        text-[10px]
                        xl:text-xs
                        font-semibold
                        uppercase
                        tracking-[0.12em]
                        py-2
                        transition-colors
                        duration-300
                    "
                >
                    Nosotros

                    <span
                        class="
                            absolute
                            left-0
                            bottom-0
                            w-0
                            h-px
                            bg-[#15297C]
                            group-hover:w-full
                            transition-[width]
                            duration-300
                        "
                    ></span>

                </a>


{{-- =================================================
     BLOG
================================================= --}}
<a
    href="{{ route('blog.index') }}"
    class="
        group
        relative
        text-white/70
        hover:text-white
        text-[10px]
        xl:text-xs
        font-semibold
        uppercase
        tracking-[0.12em]
        py-2
        transition-colors
        duration-300
    "
>
    Blog

    <span
        class="
            absolute
            left-0
            bottom-0
            w-0
            h-px
            bg-[#15297C]
            group-hover:w-full
            transition-[width]
            duration-300
        "
    ></span>
</a>



                {{-- CONTACTO --}}
                <a
                    href="{{ route('contacto') }}"
                    class="
                        group
                        relative
                        text-white/70
                        hover:text-white
                        text-[10px]
                        xl:text-xs
                        font-semibold
                        uppercase
                        tracking-[0.12em]
                        py-2
                        transition-colors
                        duration-300
                    "
                >
                    Contacto

                    <span
                        class="
                            absolute
                            left-0
                            bottom-0
                            w-0
                            h-px
                            bg-[#15297C]
                            group-hover:w-full
                            transition-[width]
                            duration-300
                        "
                    ></span>

                </a>

            </nav>



            {{-- =================================================
                CTA DESKTOP
            ================================================= --}}
            <a
                href="{{ route('contacto') }}"
                class="
                    hidden
                    lg:inline-flex
                    items-center
                    gap-3
                    border
                    border-white/20
                    text-white
                    px-5
                    py-3
                    text-[9px]
                    xl:text-[10px]
                    uppercase
                    tracking-[0.14em]
                    font-bold
                    hover:bg-white
                    hover:text-black
                    hover:border-white
                    transition-colors
                    duration-300
                "
            >

                Cotizar

                <span class="text-yellow-400">
                    →
                </span>

            </a>



            {{-- =================================================
                BOTÓN MENÚ MÓVIL
            ================================================= --}}
            <button
                id="menuBtn"
                type="button"
                aria-label="Abrir menú"
                aria-expanded="false"
                aria-controls="mobileMenu"
                class="
                    lg:hidden
                    flex
                    items-center
                    justify-center
                    w-10
                    h-10
                "
            >

                <div
                    class="
                        flex
                        flex-col
                        items-end
                        gap-[5px]
                    "
                >

                    <span
                        class="
                            menu-line
                            block
                            w-6
                            h-[1px]
                            bg-white
                            transition-transform
                            duration-300
                        "
                    ></span>

                    <span
                        class="
                            menu-line
                            block
                            w-6
                            h-[1px]
                             bg-white
                            transition-opacity
                            duration-300
                        "
                    ></span>

                    <span
                        class="
                            menu-line
                            block
                            w-6
                            h-[1px]
                            bg-white
                            transition-transform
                            duration-300
                        "
                    ></span>

                </div>

            </button>

        </div>

    </div>



    {{-- ========================================================
        MENÚ MÓVIL
    ======================================================== --}}
    <div
        id="mobileMenu"
        class="
            hidden
            lg:hidden
            bg-black
            border-t
            border-white/10
        "
    >

        <nav
            class="
                w-full
                max-w-[1440px]
                mx-auto
                px-4
                sm:px-6
                py-4
            "
        >


            {{-- PROYECTOS --}}
            <a
                href="{{ route('proyectos') }}"
                class="
                    mobile-menu-link
                    flex
                    items-center
                    justify-between
                    py-4
                    border-b
                    border-white/10
                    text-white
                    text-sm
                    uppercase
                    tracking-[0.08em]
                "
            >

                Proyectos

                <span class="text-[#7180FF]">
                    01
                </span>

            </a>


            {{-- SERVICIOS --}}
            <a
                href="{{ route('servicios') }}"
                class="
                    mobile-menu-link
                    flex
                    items-center
                    justify-between
                    py-4
                    border-b
                    border-white/10
                    text-white
                    text-sm
                    uppercase
                    tracking-[0.08em]
                "
            >

                Servicios

                <span class="text-[#7180FF]">
                    02
                </span>

            </a>


            {{-- NOSOTROS --}}
            <a
                href="{{ route('nosotros') }}"
                class="
                    mobile-menu-link
                    flex
                    items-center
                    justify-between
                    py-4
                    border-b
                    border-white/10
                    text-white
                    text-sm
                    uppercase
                    tracking-[0.08em]
                "
            >

                Nosotros

                <span class="text-[#7180FF]">
                    03
                </span>

            </a>


{{-- BLOG --}}
<a
    href="{{ route('blog.index') }}"
    class="
        mobile-menu-link
        flex
        items-center
        justify-between
        py-4
        border-b
        border-white/10
        text-white
        text-sm
        uppercase
        tracking-[0.08em]
    "
>
    Blog

    <span class="text-[#7180FF]">
        04
    </span>
</a>



            {{-- CONTACTO --}}
            <a
                href="{{ route('contacto') }}"
                class="
                    mobile-menu-link
                    flex
                    items-center
                    justify-between
                    py-4
                    border-b
                    border-white/10
                    text-white
                    text-sm
                    uppercase
                    tracking-[0.08em]
                "
            >

                Contacto

                <span class="text-[#7180FF]">
                    04
                </span>

            </a>


            {{-- COTIZAR --}}
            <a
                href="{{ route('contacto') }}"
                class="
                    mobile-menu-link
                    flex
                    items-center
                    justify-center
                    gap-3
                    mt-5
                    bg-white
                    text-black
                    px-5
                    py-4
                    text-[10px]
                    uppercase
                    tracking-[0.15em]
                    font-black
                    hover:bg-[#15297C]
                    hover:text-white
                    transition-colors
                    duration-300
                "
            >

                Solicitar cotización

                <span class="text-yellow-500">
                    →
                </span>

            </a>

        </nav>

    </div>

</header>



{{-- ============================================================
     ESTILOS HEADER
============================================================ --}}
<style>

    /* ========================================================
       HEADER NORMAL
       Mantener siempre visible
    ======================================================== */

    #mainHeader {
        opacity: 1 !important;
        visibility: visible !important;

        /* Evitamos efectos de renderizado al cambiar de página */
        transform: none !important;
        backface-visibility: visible;

        /* Solo permitimos transición del fondo y sombra */
        transition:
            background-color .3s ease,
            box-shadow .3s ease,
            border-color .3s ease !important;
    }


    /* ========================================================
       HEADER DESPUÉS DEL SCROLL
    ======================================================== */

    #mainHeader.header-scrolled {
        background: rgba(0, 0, 0, .96);

        box-shadow:
            0 8px 30px rgba(0, 0, 0, .18);
    }


    /* ========================================================
       OFFSET PARA ANCLAS
    ======================================================== */

    html {
        scroll-padding-top: 80px;
    }


    /* ========================================================
       LOGO
       Siempre visible
    ======================================================== */



    /* ========================================================
       HOVER DEL LOGO
       Sin escala para evitar parpadeos
    ======================================================== */

    #logoInicio:hover,
    #logoInicio:hover img {
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
    }


    /* ========================================================
       FOCUS
    ======================================================== */

    #logoInicio:focus-visible {
        outline: 1px solid #7180FF;
        outline-offset: 8px;
    }


    /* ========================================================
       ACCESIBILIDAD
    ======================================================== */

    @media (prefers-reduced-motion: reduce) {

        #mainHeader,
        #mainHeader *,
        #mobileMenu,
        #mobileMenu * {
            transition-duration: 0.01ms !important;
            animation-duration: 0.01ms !important;
        }

    }

</style>


{{-- ============================================================
     JAVASCRIPT HEADER
============================================================ --}}
<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {


        /* =====================================================
           ELEMENTOS
        ===================================================== */

        const header =
            document.getElementById(
                'mainHeader'
            );


        const menuBtn =
            document.getElementById(
                'menuBtn'
            );


        const mobileMenu =
            document.getElementById(
                'mobileMenu'
            );


        const menuLinks =
            document.querySelectorAll(
                '.mobile-menu-link'
            );


        /*
         * IMPORTANTE:
         *
         * Ahora coincide exactamente con:
         *
         * id="logoInicio"
         */


        const lines =
            menuBtn
                ? menuBtn.querySelectorAll(
                    '.menu-line'
                )
                : [];



        /* =====================================================
           MENÚ MÓVIL
        ===================================================== */

        function openMenu() {

            if (
                !mobileMenu ||
                !menuBtn
            ) {
                return;
            }


            mobileMenu.classList.remove(
                'hidden'
            );


            menuBtn.setAttribute(
                'aria-expanded',
                'true'
            );


            if (lines.length >= 3) {

                lines[0].classList.add(
                    'translate-y-[6px]',
                    'rotate-45'
                );


                lines[1].classList.add(
                    'opacity-0'
                );


                lines[2].classList.add(
                    '-translate-y-[6px]',
                    '-rotate-45'
                );

            }

        }



        function closeMenu() {

            if (
                !mobileMenu ||
                !menuBtn
            ) {
                return;
            }


            mobileMenu.classList.add(
                'hidden'
            );


            menuBtn.setAttribute(
                'aria-expanded',
                'false'
            );


            if (lines.length >= 3) {

                lines[0].classList.remove(
                    'translate-y-[6px]',
                    'rotate-45'
                );


                lines[1].classList.remove(
                    'opacity-0'
                );


                lines[2].classList.remove(
                    '-translate-y-[6px]',
                    '-rotate-45'
                );

            }

        }



        /* =====================================================
           BOTÓN MÓVIL
        ===================================================== */

        if (
            menuBtn &&
            mobileMenu
        ) {

            menuBtn.addEventListener(
                'click',
                function () {

                    const isOpen =
                        !mobileMenu.classList.contains(
                            'hidden'
                        );


                    if (isOpen) {

                        closeMenu();

                    } else {

                        openMenu();

                    }

                }
            );

        }



        /* =====================================================
           CERRAR MENÚ AL SELECCIONAR
        ===================================================== */

        menuLinks.forEach(
            function (link) {

                link.addEventListener(
                    'click',
                    closeMenu
                );

            }
        );



        /* =====================================================
           CERRAR MENÚ AL PASAR A DESKTOP
        ===================================================== */

        let resizeTimer = null;


        window.addEventListener(
            'resize',
            function () {

                /*
                 * Evitamos ejecutar lógica
                 * decenas de veces mientras
                 * cambia el tamaño.
                 */

                clearTimeout(
                    resizeTimer
                );


                resizeTimer =
                    setTimeout(
                        function () {

                            if (
                                window.innerWidth >=
                                1024
                            ) {

                                closeMenu();

                            }

                        },
                        100
                    );

            },
            {
                passive: true
            }
        );



        /* =====================================================
           HEADER DURANTE SCROLL
        ===================================================== */

        let headerScrolled = null;

        let scrollTicking = false;



        function updateHeader() {

            if (!header) {
                return;
            }


            const shouldBeScrolled =
                window.scrollY > 20;


            /*
             * Sólo modificamos el DOM
             * cuando realmente cambia
             * el estado.
             */

            if (
                shouldBeScrolled ===
                headerScrolled
            ) {

                scrollTicking = false;

                return;
            }


            headerScrolled =
                shouldBeScrolled;


            header.classList.toggle(
                'header-scrolled',
                shouldBeScrolled
            );


            scrollTicking = false;

        }



        function handleScroll() {

            if (scrollTicking) {
                return;
            }


            scrollTicking = true;


            requestAnimationFrame(
                updateHeader
            );

        }



        updateHeader();


        window.addEventListener(
            'scroll',
            handleScroll,
            {
                passive: true
            }
        );



        /* =====================================================
           LOGO BLR ARCOS
        ===================================================== */

    }
);

</script>
