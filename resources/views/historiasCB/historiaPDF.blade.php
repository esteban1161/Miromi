<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        .contenido{
        font-size: 20px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:line-through;
        }
    </style>
    </head>
    <body>
        <div class="contenido">
            <h3>Info de la historia clinica de {{$identificacion->primerNombre}}</h3>
            <p>{{$identificacion->segundoNombre}}</p>
            <p>{{$identificacion->tipoDocumento}}</p>
            <p>{{$identificacion->fechaNacimiento}}</p>
        </div>
    </body>
</html>