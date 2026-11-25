
<footer
    class="relative bg-[#0a0a0a] border-t border-yellow-400/30
           pt-12 pb-6 sm:pt-14 sm:pb-7 lg:pt-16 lg:pb-8"
>
    <!-- CONTENEDOR PRINCIPAL -->
    <div
        class="w-full max-w-[1440px] mx-auto
               px-5 sm:px-6 lg:px-8 xl:px-10"
    >

        <div
            class="grid grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-12
                   gap-10 sm:gap-12 lg:gap-8"
        >

            <!-- ========================================
                 01. IDENTIDAD DE LA EMPRESA
            ========================================= -->
            <div class="lg:col-span-5">

                <a
                    href="{{ route('inicio') }}"
                    class="inline-flex items-center group"
                    aria-label="Ir al inicio de BLR & ARCOS"
                >
                    <img
                        src="{{ asset('images/logos/LOGO FINAL OFICIAL HORIZONTAL.webp') }}"
                        alt="BLR & ARCOS - Construcción y obra civil"
                        class="w-auto h-9 sm:h-10 lg:h-11
                               max-w-full object-contain
                               transition-transform duration-300
                               group-hover:scale-[1.03]"
                    >
                </a>

                <p
                    class="mt-6 text-gray-400
                           text-sm leading-7
                           max-w-[360px]"
                >
                    Ingeniería y construcción enfocadas
                    en precisión, ejecución y soluciones
                    profesionales.
                </p>

                <div
                    class="mt-6 w-12 h-[2px]
                           bg-yellow-400/80"
                ></div>

            </div>


            <!-- ========================================
                 02. ENLACES DE EMPRESA
            ========================================= -->
            <div class="lg:col-span-3">

                <h4
                    class="text-white font-semibold
                           text-sm sm:text-base
                           tracking-wide mb-5"
                >
                    Empresa
                </h4>

                <nav aria-label="Enlaces de empresa">

                    <ul
                        class="space-y-3
                               text-gray-400 text-sm"
                    >

                        <li>
                            <a
                                href="{{ route('inicio') }}"
                                class="hover:text-yellow-400
                                       transition-colors duration-300"
                            >
                                Inicio
                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ route('servicios') }}"
                                class="hover:text-yellow-400
                                       transition-colors duration-300"
                            >
                                Servicios
                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ route('proyectos') }}"
                                class="hover:text-yellow-400
                                       transition-colors duration-300"
                            >
                                Proyectos
                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ route('nosotros') }}"
                                class="hover:text-yellow-400
                                       transition-colors duration-300"
                            >
                                Nosotros
                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ route('contacto') }}"
                                class="hover:text-yellow-400
                                       transition-colors duration-300"
                            >
                                Contacto
                            </a>
                        </li>

                    </ul>

                </nav>

            </div>


            <!-- ========================================
                 03. CONTACTO
            ========================================= -->
            <div
                id="contacto"
                class="lg:col-span-4 min-w-0"
            >

                <h4
                    class="text-white font-semibold
                           text-sm sm:text-base
                           tracking-wide mb-5"
                >
                    Contacto
                </h4>

                <div class="space-y-5">

                    <!-- CORREO -->
                    <div class="flex items-start gap-3">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="19"
                            height="19"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="text-yellow-400 shrink-0 mt-0.5"
                            aria-hidden="true"
                        >
                            <rect
                                width="20"
                                height="16"
                                x="2"
                                y="4"
                                rx="2"
                            />
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                        </svg>

                        <a
                            href="mailto:cotizaciones.proyectos@byaconstrucciones.com"
                            class="text-gray-400 text-sm
                                   leading-6 break-all
                                   hover:text-yellow-400
                                   transition-colors duration-300"
                        >
                            cotizaciones.proyectos@byaconstrucciones.com
                        </a>

                    </div>


                    <!-- TELÉFONO -->
                    <div class="flex items-start gap-3">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="19"
                            height="19"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="text-yellow-400 shrink-0 mt-0.5"
                            aria-hidden="true"
                        >
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2
                                   19.79 19.79 0 0 1-8.63-3.07
                                   19.5 19.5 0 0 1-6-6
                                   19.79 19.79 0 0 1-3.07-8.67
                                   A2 2 0 0 1 4.11 2h3
                                   a2 2 0 0 1 2 1.72
                                   c.12.96.35 1.9.68 2.81
                                   a2 2 0 0 1-.45 2.11L8.09 9.91
                                   a16 16 0 0 0 6 6l1.27-1.25
                                   a2 2 0 0 1 2.11-.45
                                   c.91.33 1.85.56 2.81.68
                                   A2 2 0 0 1 22 16.92z"
                            />
                        </svg>

                        <a
                            href="tel:+529981636092"
                            class="text-gray-400 text-sm
                                   hover:text-yellow-400
                                   transition-colors duration-300"
                        >
                            +52 (998) 163 6092
                        </a>

                    </div>


                    <!-- UBICACIÓN -->
                    <div class="flex items-start gap-3">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="19"
                            height="19"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="text-yellow-400 shrink-0 mt-0.5"
                            aria-hidden="true"
                        >
                            <path
                                d="M20 10c0 5-8 11-8 11S4 15 4 10
                                   a8 8 0 1 1 16 0Z"
                            />
                            <circle cx="12" cy="10" r="2.5"/>
                        </svg>

                        <span
                            class="text-gray-400 text-sm leading-6"
                        >
                            Cancún, Quintana Roo
                        </span>

                    </div>

                </div>


                <!-- BOTÓN DE CONTACTO -->
                <a
                    href="{{ route('contacto') }}"
                    class="inline-flex items-center gap-3
                           mt-7 text-yellow-400
                           text-xs font-bold uppercase
                           tracking-[0.12em]
                           hover:text-white
                           transition-colors duration-300
                           group"
                >
                    Solicitar información

                    <span
                        class="text-lg
                               transition-transform duration-300
                               group-hover:translate-x-1"
                    >
                        &rarr;
                    </span>

                </a>

            </div>

        </div>


        <!-- ========================================
             PARTE INFERIOR
        ========================================= -->
        <div
            class="mt-12 sm:mt-14 lg:mt-16
                   pt-6 sm:pt-7
                   border-t border-white/10"
        >

            <div
                class="flex flex-col
                       sm:flex-row
                       sm:items-center
                       sm:justify-between
                       gap-3 sm:gap-6"
            >

                <p
                    class="text-gray-500
                           text-xs leading-5"
                >
                    &copy; {{ date('Y') }} BLR & ARCOS.
                    Todos los derechos reservados.
                </p>

                <p
                    class="text-gray-600
                           text-xs leading-5
                           sm:text-right"
                >
                    Ingeniería · Construcción · Infraestructura
                </p>

            </div>

        </div>

    </div>

</footer>
