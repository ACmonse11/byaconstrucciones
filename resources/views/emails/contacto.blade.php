<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nueva solicitud de proyecto</title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#f4f4f4;
    font-family:Arial, Helvetica, sans-serif;
">

    <div style="
        max-width:650px;
        margin:40px auto;
        background:#ffffff;
        border:1px solid #e5e5e5;
    ">

        {{-- ENCABEZADO --}}
        <div style="
            background:#15297C;
            padding:30px;
            border-bottom:4px solid #FACC15;
        ">

            <div style="
                color:#FACC15;
                font-size:11px;
                font-weight:bold;
                letter-spacing:2px;
                text-transform:uppercase;
                margin-bottom:10px;
            ">
                BLR & ARCOS
            </div>

            <div style="
                color:#ffffff;
                font-size:25px;
                font-weight:bold;
            ">
                Nueva solicitud de proyecto
            </div>

        </div>


        {{-- CONTENIDO --}}
        <div style="padding:30px;">

            <p style="
                margin:0 0 25px;
                color:#555555;
                font-size:14px;
                line-height:1.7;
            ">
                Se recibió una nueva solicitud desde el formulario
                de contacto del sitio web de BLR & ARCOS.
            </p>


            {{-- NOMBRE --}}
            <div style="
                padding:15px 0;
                border-bottom:1px solid #eeeeee;
            ">
                <div style="
                    font-size:10px;
                    font-weight:bold;
                    color:#777777;
                    text-transform:uppercase;
                    letter-spacing:1px;
                ">
                    Nombre
                </div>

                <div style="
                    margin-top:6px;
                    color:#111111;
                    font-size:15px;
                    font-weight:bold;
                ">
                    {{ $datos['nombre'] }}
                </div>
            </div>


            {{-- EMPRESA --}}
            <div style="
                padding:15px 0;
                border-bottom:1px solid #eeeeee;
            ">
                <div style="
                    font-size:10px;
                    font-weight:bold;
                    color:#777777;
                    text-transform:uppercase;
                    letter-spacing:1px;
                ">
                    Empresa
                </div>

                <div style="
                    margin-top:6px;
                    color:#111111;
                    font-size:15px;
                ">
                    {{ $datos['empresa'] ?? 'No especificada' }}
                </div>
            </div>


            {{-- EMAIL --}}
            <div style="
                padding:15px 0;
                border-bottom:1px solid #eeeeee;
            ">
                <div style="
                    font-size:10px;
                    font-weight:bold;
                    color:#777777;
                    text-transform:uppercase;
                    letter-spacing:1px;
                ">
                    Correo electrónico
                </div>

                <div style="margin-top:6px;">
                    <a
                        href="mailto:{{ $datos['email'] }}"
                        style="
                            color:#15297C;
                            font-size:15px;
                            font-weight:bold;
                            text-decoration:none;
                        "
                    >
                        {{ $datos['email'] }}
                    </a>
                </div>
            </div>


            {{-- TELÉFONO --}}
            <div style="
                padding:15px 0;
                border-bottom:1px solid #eeeeee;
            ">
                <div style="
                    font-size:10px;
                    font-weight:bold;
                    color:#777777;
                    text-transform:uppercase;
                    letter-spacing:1px;
                ">
                    Teléfono
                </div>

                <div style="
                    margin-top:6px;
                    color:#111111;
                    font-size:15px;
                    font-weight:bold;
                ">
                    {{ $datos['telefono'] }}
                </div>
            </div>


            {{-- TIPO DE PROYECTO --}}
            <div style="
                padding:15px 0;
                border-bottom:1px solid #eeeeee;
            ">
                <div style="
                    font-size:10px;
                    font-weight:bold;
                    color:#777777;
                    text-transform:uppercase;
                    letter-spacing:1px;
                ">
                    Tipo de proyecto
                </div>

                <div style="
                    margin-top:6px;
                    color:#111111;
                    font-size:15px;
                ">
                    {{ $datos['tipo_proyecto'] ?? 'No especificado' }}
                </div>
            </div>


            {{-- UBICACIÓN --}}
            <div style="
                padding:15px 0;
                border-bottom:1px solid #eeeeee;
            ">
                <div style="
                    font-size:10px;
                    font-weight:bold;
                    color:#777777;
                    text-transform:uppercase;
                    letter-spacing:1px;
                ">
                    Ubicación del proyecto
                </div>

                <div style="
                    margin-top:6px;
                    color:#111111;
                    font-size:15px;
                ">
                    {{ $datos['ubicacion'] ?? 'No especificada' }}
                </div>
            </div>


            {{-- MENSAJE --}}
            <div style="
                margin-top:25px;
                padding:22px;
                background:#f7f7f7;
                border-left:4px solid #15297C;
            ">

                <div style="
                    font-size:10px;
                    font-weight:bold;
                    color:#15297C;
                    text-transform:uppercase;
                    letter-spacing:1px;
                    margin-bottom:12px;
                ">
                    Mensaje
                </div>

                <div style="
                    color:#333333;
                    font-size:14px;
                    line-height:1.8;
                    white-space:pre-line;
                ">{{ $datos['mensaje'] }}</div>

            </div>

        </div>


        {{-- PIE --}}
        <div style="
            background:#111111;
            padding:20px 30px;
            color:#aaaaaa;
            font-size:11px;
            line-height:1.6;
        ">
            Mensaje generado automáticamente desde el sitio web de
            <strong style="color:#ffffff;">BLR & ARCOS</strong>.
        </div>

    </div>

</body>
</html>
