import './bootstrap';

import Swiper from 'swiper';
import {
    Autoplay,
    EffectFade,
    Pagination
} from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/effect-fade';
import 'swiper/css/pagination';


document.addEventListener('DOMContentLoaded', () => {

    const heroText = document.getElementById('heroChangingText');

    if (!heroText) {
        return;
    }

    const frases = [

    ];

    let fraseActual = 0;

    // Velocidad de escritura
    const velocidadEscritura = 70;

    // Tiempo que permanece la frase completa
    const tiempoEspera = 3000;

    // Tiempo de desaparición
    const tiempoSalida = 600;


    function escribirFrase(frase) {

        heroText.textContent = '';

        heroText.classList.remove('hero-text-hide');

        let letraActual = 0;


        function escribir() {

            if (letraActual < frase.length) {

                heroText.textContent += frase.charAt(letraActual);

                letraActual++;

                setTimeout(escribir, velocidadEscritura);

            } else {

                // Cuando termina de escribir,
                // esperamos antes de cambiar
                setTimeout(cambiarFrase, tiempoEspera);

            }

        }


        escribir();

    }


    function cambiarFrase() {

        // Desaparece suavemente
        heroText.classList.add('hero-text-hide');


        setTimeout(() => {

            fraseActual++;

            if (fraseActual >= frases.length) {
                fraseActual = 0;
            }

            escribirFrase(frases[fraseActual]);

        }, tiempoSalida);

    }


    // Iniciar
    escribirFrase(frases[fraseActual]);

});
