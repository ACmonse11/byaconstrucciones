<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDAR FORMULARIO
        |--------------------------------------------------------------------------
        */

        $datos = $request->validate([
            'nombre'        => ['required', 'string', 'max:120'],
            'empresa'       => ['nullable', 'string', 'max:150'],
            'email'         => ['required', 'email', 'max:150'],
            'telefono'      => ['required', 'string', 'max:30'],
            'tipo_proyecto' => ['nullable', 'string', 'max:100'],
            'ubicacion'     => ['nullable', 'string', 'max:150'],
            'mensaje'       => ['required', 'string', 'max:3000'],
        ]);

        try {

            /*
            |--------------------------------------------------------------------------
            | 1. OBTENER TOKEN DE MICROSOFT
            |--------------------------------------------------------------------------
            */

            $tokenResponse = Http::asForm()->post(
                'https://login.microsoftonline.com/' .
                env('MICROSOFT_TENANT_ID') .
                '/oauth2/v2.0/token',
                [
                    'client_id' => env('MICROSOFT_CLIENT_ID'),
                    'client_secret' => env('MICROSOFT_CLIENT_SECRET'),
                    'scope' => 'https://graph.microsoft.com/.default',
                    'grant_type' => 'client_credentials',
                ]
            );

            if ($tokenResponse->failed()) {

                Log::error('Error obteniendo token Microsoft Graph', [
                    'status' => $tokenResponse->status(),
                    'response' => $tokenResponse->body(),
                ]);

                return back()
                    ->withInput()
                    ->with(
                        'error',
                        'No fue posible enviar la solicitud. Inténtalo nuevamente.'
                    );
            }

            $accessToken = $tokenResponse->json('access_token');


            /*
            |--------------------------------------------------------------------------
            | 2. CREAR CONTENIDO DEL CORREO
            |--------------------------------------------------------------------------
            */

            $nombre = e($datos['nombre']);
            $empresa = e($datos['empresa'] ?? 'No especificada');
            $email = e($datos['email']);
            $telefono = e($datos['telefono']);
            $tipoProyecto = e(
                $datos['tipo_proyecto'] ?? 'No especificado'
            );
            $ubicacion = e(
                $datos['ubicacion'] ?? 'No especificada'
            );
            $mensaje = nl2br(e($datos['mensaje']));

            $contenido = <<<HTML
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>

<body style="
    margin:0;
    padding:30px;
    background:#f4f4f4;
    font-family:Arial,Helvetica,sans-serif;
">

    <div style="
        max-width:650px;
        margin:auto;
        background:#ffffff;
        border:1px solid #e5e5e5;
    ">

        <div style="
            background:#15297C;
            padding:30px;
            border-bottom:4px solid #C9A227;
        ">

            <div style="
                color:#C9A227;
                font-size:11px;
                font-weight:bold;
                letter-spacing:2px;
            ">
                BLR & ARCOS
            </div>

            <div style="
                color:#ffffff;
                font-size:24px;
                font-weight:bold;
                margin-top:8px;
            ">
                Nueva solicitud de proyecto
            </div>

        </div>

        <div style="padding:30px;">

            <p style="
                color:#555555;
                font-size:14px;
                line-height:1.7;
            ">
                Se recibió una nueva solicitud desde el
                formulario de contacto del sitio web.
            </p>

            <hr style="
                border:0;
                border-top:1px solid #eeeeee;
                margin:25px 0;
            ">

            <p>
                <strong>Nombre:</strong><br>
                {$nombre}
            </p>

            <p>
                <strong>Empresa:</strong><br>
                {$empresa}
            </p>

            <p>
                <strong>Correo electrónico:</strong><br>
                {$email}
            </p>

            <p>
                <strong>Teléfono:</strong><br>
                {$telefono}
            </p>

            <p>
                <strong>Tipo de proyecto:</strong><br>
                {$tipoProyecto}
            </p>

            <p>
                <strong>Ubicación:</strong><br>
                {$ubicacion}
            </p>

            <div style="
                margin-top:25px;
                background:#f7f7f7;
                padding:20px;
                border-left:4px solid #15297C;
            ">

                <strong>Mensaje:</strong>

                <div style="
                    margin-top:10px;
                    line-height:1.7;
                ">
                    {$mensaje}
                </div>

            </div>

        </div>

        <div style="
            padding:18px 30px;
            background:#111111;
            color:#aaaaaa;
            font-size:11px;
        ">
            Mensaje generado automáticamente desde
            el sitio web de BLR & ARCOS.
        </div>

    </div>

</body>
</html>
HTML;


            /*
            |--------------------------------------------------------------------------
            | 3. ENVIAR CORREO CON MICROSOFT GRAPH
            |--------------------------------------------------------------------------
            */

            $from = env(
                'MICROSOFT_MAIL_FROM',
                'cotizaciones.proyectos@byaconstrucciones.com'
            );

            $to = env(
                'MICROSOFT_MAIL_TO',
                'cotizaciones.proyectos@byaconstrucciones.com'
            );

            $graphResponse = Http::withToken($accessToken)
                ->post(
                    'https://graph.microsoft.com/v1.0/users/' .
                    rawurlencode($from) .
                    '/sendMail',
                    [
                        'message' => [

                            'subject' =>
                                'Nueva solicitud de proyecto | BLR & ARCOS',

                            'body' => [
                                'contentType' => 'HTML',
                                'content' => $contenido,
                            ],

                            'toRecipients' => [
                                [
                                    'emailAddress' => [
                                        'address' => $to,
                                    ],
                                ],
                            ],

                            'replyTo' => [
                                [
                                    'emailAddress' => [
                                        'address' => $datos['email'],
                                        'name' => $datos['nombre'],
                                    ],
                                ],
                            ],
                        ],

                        'saveToSentItems' => true,
                    ]
                );


            /*
            |--------------------------------------------------------------------------
            | 4. VERIFICAR RESPUESTA
            |--------------------------------------------------------------------------
            */

            if ($graphResponse->failed()) {

                Log::error('Error enviando correo Microsoft Graph', [
                    'status' => $graphResponse->status(),
                    'response' => $graphResponse->body(),
                ]);

                return back()
                    ->withInput()
                    ->with(
                        'error',
                        'No fue posible enviar la solicitud. Inténtalo nuevamente.'
                    );
            }


            /*
            |--------------------------------------------------------------------------
            | CORRECTO
            |--------------------------------------------------------------------------
            */

            return redirect()
                ->route('contacto')
                ->with(
                    'success',
                    '¡Gracias! Tu solicitud fue enviada correctamente.'
                );

        } catch (\Throwable $e) {

            Log::error('Error formulario BLR & ARCOS', [
                'message' => $e->getMessage(),
            ]);

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Ocurrió un problema al enviar la solicitud. Inténtalo nuevamente.'
                );
        }
    }
}
