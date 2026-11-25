<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ProyectoController extends Controller
{
    public function show($slug)
    {
        $proyectos = [

    'espacio-cancun' => [
        'numero' => '01',
        'nombre' => 'Espacio Cancún',
        'ubicacion' => 'Cancún, Quintana Roo',
        'categoria' => 'Construcción',
        'descripcion' => 'Proyecto de construcción y obra civil en Cancún, con ejecución y coordinación de trabajos especializados conforme a los requerimientos técnicos de la obra.',
        'carpeta' => 'espacio_cancun',
        'portada' => 'blr-espacio-cancun-elementos-constructivos.webp',
    ],

    'shark-tower' => [
        'numero' => '02',
        'nombre' => 'Shark Tower',
        'ubicacion' => 'Cancún, Quintana Roo',
        'categoria' => 'Construcción',
        'descripcion' => 'Participación en proyecto de edificación vertical en Cancún, mediante trabajos de construcción y ejecución especializada para desarrollo de gran escala.',
        'carpeta' => 'shark_tower',
        'portada' => 'blr-shark-tower-vista-general-obra.webp',
    ],

    'tren-maya-morelos' => [
        'numero' => '03',
        'nombre' => 'Tren Maya P. Morelos',
        'ubicacion' => 'Puerto Morelos, Quintana Roo',
        'categoria' => 'Infraestructura',
        'descripcion' => 'Ejecución de estructuras de cimentación y obra civil, incluyendo trabajos especializados para infraestructura ferroviaria en Puerto Morelos, Quintana Roo.',
        'carpeta' => 'tren_maya_morelos',
        'portada' => 'blr-tren-maya-p-morelos-trabajos-en-proceso.webp',
    ],

    'tren-maya-xpujil' => [
        'numero' => '04',
        'nombre' => 'Tren Maya Xpujil',
        'ubicacion' => 'Xpujil, Campeche',
        'categoria' => 'Infraestructura',
        'descripcion' => 'Trabajos de obra civil e infraestructura con ejecución de cimentaciones, pilas, trabes y losas para el desarrollo de infraestructura ferroviaria.',
        'carpeta' => 'tren_maya_xpujil',
        'portada' => 'blr-tren-maya-xpujil-area-de-trabajo.webp',
    ],

    'vellmary-cancun' => [
        'numero' => '05',
        'nombre' => 'Vellmary P. Cancún',
        'ubicacion' => 'Cancún, Quintana Roo',
        'categoria' => 'Construcción',
        'descripcion' => 'Ejecución de obra civil y trabajos de construcción en Cancún, incluyendo cimbra de acero y concreto para elementos estructurales del proyecto.',
        'carpeta' => 'vellmary_cancun',
        'portada' => 'armado-acero-cimbra-obra-exterior.webp',
    ],

];

        // Si el proyecto no existe, mostrar página 404
        abort_unless(isset($proyectos[$slug]), 404);

        $proyecto = $proyectos[$slug];

        /*
        |--------------------------------------------------------------------------
        | BUSCAR TODAS LAS FOTOS DEL PROYECTO
        |--------------------------------------------------------------------------
        */

        $rutaCarpeta = public_path(
            'images/' . $proyecto['carpeta']
        );

        $imagenes = [];

        if (File::exists($rutaCarpeta)) {

            $archivos = File::files($rutaCarpeta);

            foreach ($archivos as $archivo) {

                $extension = strtolower(
                    $archivo->getExtension()
                );

                if (in_array($extension, [
                    'webp',
                    'jpg',
                    'jpeg',
                    'png'
                ])) {

                    $imagenes[] =
                        'images/' .
                        $proyecto['carpeta'] .
                        '/' .
                        $archivo->getFilename();
                }
            }
        }

        // Orden alfabético
        sort($imagenes);
        /*
|--------------------------------------------------------------------------
| IMAGEN DE PORTADA DEL PROYECTO
|--------------------------------------------------------------------------
*/

$imagenPortada =
    'images/' .
    $proyecto['carpeta'] .
    '/' .
    $proyecto['portada'];


/*
|--------------------------------------------------------------------------
| RESPALDO
|--------------------------------------------------------------------------
| Si por alguna razón la portada indicada no existe,
| utilizamos la primera fotografía disponible.
*/

if (!File::exists(public_path($imagenPortada))) {
    $imagenPortada = $imagenes[0] ?? null;
}

       return view('proyectos.show', compact(
    'proyecto',
    'imagenes',
    'imagenPortada'
));
    }
}
