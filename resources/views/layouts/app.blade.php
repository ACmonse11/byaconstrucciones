
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    {{-- FAVICON BLR & ARCOS --}}
    <link
        rel="icon"
        type="image/webp"
        href="{{ asset('images/logos/ISOTIPO BLR.webp') }}"
    >

    <title>@yield('title', 'BLR & ARCOS')</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <style>
        html,
        body {
            background: #111111;
        }
    </style>
</head>

<body class="bg-[#111111] text-white antialiased">

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')


    {{-- =====================================================
         REDES SOCIALES FLOTANTES
         FACEBOOK + WHATSAPP
    ===================================================== --}}

    <div class="blr-floating-social">

        {{-- FACEBOOK --}}
        <a
            href="https://www.facebook.com/people/BLR-ARCOS/61595457830621/"
            target="_blank"
            rel="noopener noreferrer"
            class="facebook-float"
            aria-label="Visitar Facebook de BLR & ARCOS"
            title="Facebook BLR & ARCOS"
        >

            <svg
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
            >
                <path
                    fill="currentColor"
                    d="M22 12a10 10 0 1 0-11.56
                       9.88v-6.99H7.9V12h2.54V9.8
                       c0-2.5 1.49-3.89 3.77-3.89
                       1.09 0 2.23.19 2.23.19v2.46
                       h-1.26c-1.24 0-1.63.77-1.63
                       1.56V12h2.77l-.44 2.89h-2.33
                       v6.99A10 10 0 0 0 22 12z"
                />
            </svg>

            <span class="social-tooltip">
                Síguenos en Facebook
            </span>

        </a>


        {{-- WHATSAPP --}}
        <a
            href="https://wa.me/52XXXXXXXXXX?text=Hola%2C%20me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n"
            target="_blank"
            rel="noopener noreferrer"
            class="whatsapp-float"
            aria-label="Contactar por WhatsApp"
            title="WhatsApp BLR & ARCOS"
        >

            <svg
                viewBox="0 0 32 32"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
            >
                <path
                    fill="currentColor"
                    d="M16.04 2.003c-7.72 0-13.997 6.276-13.997 13.994
                    0 2.468.644 4.875 1.868 6.994L1.925 30.25l7.428-1.949
                    a13.93 13.93 0 0 0 6.681 1.702h.006c7.717 0
                    13.995-6.277 13.995-13.996S23.758 2.003 16.04 2.003zm0
                    25.637h-.005a11.6 11.6 0 0 1-5.91-1.619l-.424-.252-4.408
                    1.157 1.176-4.296-.276-.441a11.6 11.6 0 0 1-1.783-6.192
                    c0-6.416 5.219-11.635 11.636-11.635 6.415 0 11.635 5.219
                    11.635 11.635 0 6.417-5.22 11.643-11.641 11.643zm6.38-8.713
                    c-.349-.175-2.068-1.02-2.388-1.137-.32-.116-.553-.175-.786
                    .175-.233.349-.903 1.137-1.107 1.37-.204.233-.408.262-.757
                    .087-.349-.175-1.474-.543-2.807-1.733-1.038-.925-1.739-2.067
                    -1.943-2.416-.204-.35-.022-.538.153-.712.157-.156.349-.408
                    .524-.612.174-.204.233-.35.349-.583.117-.233.059-.437-.029
                    -.612-.087-.175-.786-1.895-1.078-2.594-.283-.68-.571-.588
                    -.786-.599h-.67c-.233 0-.612.087-.932.437-.32.35-1.223
                    1.195-1.223 2.914 0 1.72 1.252 3.38 1.427 3.613.175.233
                    2.464 3.762 5.97 5.275.834.36 1.485.575 1.993.736.837.266
                    1.599.228 2.201.138.671-.1 2.068-.845 2.359-1.661.291-.816
                    .291-1.516.204-1.661-.087-.146-.32-.233-.67-.408z"
                />
            </svg>

            <span class="social-tooltip">
                ¡Escríbenos!
            </span>

        </a>

    </div>


    <style>

        /* ============================================
           CONTENEDOR FLOTANTE
        ============================================ */

        .blr-floating-social {
            position: fixed;

            right: 24px;
            bottom: 24px;

            display: flex;
            flex-direction: column;
            align-items: center;

            gap: 14px;

            z-index: 9999;
        }


        /* ============================================
           BOTONES GENERALES
        ============================================ */

        .facebook-float,
        .whatsapp-float {
            position: relative;

            width: 62px;
            height: 62px;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #ffffff;

            border-radius: 50%;

            box-shadow:
                0 8px 25px rgba(0,0,0,.25);

            transition:
                transform .3s ease,
                background .3s ease,
                box-shadow .3s ease;
        }


        /* ============================================
           FACEBOOK
        ============================================ */

        .facebook-float {
            background: #15297C;
        }

        .facebook-float svg {
            width: 34px;
            height: 34px;
        }

        .facebook-float:hover {
            background: #203ca3;

            transform:
                translateY(-5px)
                scale(1.07);

            box-shadow:
                0 12px 30px rgba(0,0,0,.30),
                0 0 0 8px rgba(21,41,124,.12);
        }


        /* ============================================
           WHATSAPP
        ============================================ */

        .whatsapp-float {
            background: #25D366;

            animation:
                whatsappPulse 2.5s infinite;
        }

        .whatsapp-float svg {
            width: 34px;
            height: 34px;
        }

        .whatsapp-float:hover {
            background: #20ba5a;

            transform:
                translateY(-5px)
                scale(1.07);

            box-shadow:
                0 12px 30px rgba(0,0,0,.30),
                0 0 0 8px rgba(37,211,102,.12);
        }


        /* ============================================
           TOOLTIP
        ============================================ */

        .social-tooltip {
            position: absolute;

            right: 75px;

            background: #111111;
            color: #ffffff;

            padding: 9px 14px;

            border-radius: 7px;

            font-size: 13px;
            font-weight: 600;

            white-space: nowrap;

            opacity: 0;
            visibility: hidden;

            transform: translateX(10px);

            transition: all .25s ease;

            pointer-events: none;

            box-shadow:
                0 5px 18px rgba(0,0,0,.20);
        }

        .social-tooltip::after {
            content: "";

            position: absolute;

            right: -6px;
            top: 50%;

            transform: translateY(-50%);

            border-width: 6px 0 6px 6px;
            border-style: solid;

            border-color:
                transparent
                transparent
                transparent
                #111111;
        }

        .facebook-float:hover .social-tooltip,
        .whatsapp-float:hover .social-tooltip {
            opacity: 1;
            visibility: visible;

            transform: translateX(0);
        }


        /* ============================================
           ANIMACIÓN WHATSAPP
        ============================================ */

        @keyframes whatsappPulse {

            0% {
                box-shadow:
                    0 8px 25px rgba(0,0,0,.25),
                    0 0 0 0 rgba(37,211,102,.45);
            }

            70% {
                box-shadow:
                    0 8px 25px rgba(0,0,0,.25),
                    0 0 0 13px rgba(37,211,102,0);
            }

            100% {
                box-shadow:
                    0 8px 25px rgba(0,0,0,.25),
                    0 0 0 0 rgba(37,211,102,0);
            }
        }


        /* ============================================
           RESPONSIVE MÓVIL
        ============================================ */

        @media (max-width: 640px) {

            .blr-floating-social {
                right: 17px;
                bottom: 17px;

                gap: 12px;
            }

            .facebook-float,
            .whatsapp-float {
                width: 56px;
                height: 56px;
            }

            .facebook-float svg,
            .whatsapp-float svg {
                width: 30px;
                height: 30px;
            }

            .social-tooltip {
                display: none;
            }
        }


        /* ============================================
           ACCESIBILIDAD
        ============================================ */

        @media (prefers-reduced-motion: reduce) {

            .whatsapp-float {
                animation: none;
            }

            .facebook-float,
            .whatsapp-float {
                transition: none;
            }
        }

    </style>

</body>
</html>
