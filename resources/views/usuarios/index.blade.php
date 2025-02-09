<?php

    // Manuel Alarcon Fortes

    use Illuminate\Support\Facades\DB;

    $usuarios = DB::table('Usuario')->get();

    $funcionesUsu = DB::table('Usuario')
                    ->join('usuario_funcion', 'Usuario.idUsu', '=', 'usuario_funcion.idUsu')
                    ->join('Funcion', 'usuario_funcion.idFun', '=', 'Funcion.IdFuncion')
                    ->select('Usuario.idUsu', 'Usuario.NombreUsu', 'Usuario.ApellidoUsu', 'Funcion.NombreFuncion')
                    ->get() ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus - Búsqueda</title>

    <link rel="stylesheet" href="/assets/css/search.css">
    <link rel="shortcut icon" href="/assets/img/chorusIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="row m-5 ">

            <div class="col"></div>
            <div class="col">

                <a href="{{ url('/form') }}"><button class="btn bg-purple fs-2">Añadir nuevo usuario</button></a>

            </div>
            <div class="col"></div>


        </div>

        <div class="row">

            @if ($usuarios->isEmpty())
                <h1 class="mt-5 text-center">No hay usuarios con esas características</h1>
            @else
                @foreach ($usuarios as $usuario)
                    <div class="col">
                        <div class="card">
                            <div class="detail p-2 m-2">
                                <div class="detail-images col">
                                    <div class="row">
                                        <img class="img-fluid rounded-circle"
                                             src="{{ $usuario->PerfilUsu ?: '/assets/img/defaultProfile.jpg' }}"
                                             alt="Picture">
                                    </div>
                                    <div class="row">

                                        <a href="{{ url('/delete/' . $usuario->IdUsu) }}"><button class="btn btn-danger">Eliminar</button></a>

                                    </div>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <h3>
                                        {{ $usuario->NombreUsu }} {{ $usuario->ApellidoUsu }}
                                    </h3>
                                </div>
                            </div>

                            <div>

                                @foreach($funcionesUsu as $funcion)

                                    <ul>

                                        @if( $funcion->idUsu == $usuario->IdUsu )

                                            <li>
                                        
                                                {{ $funcion->NombreFuncion }}

                                            </li>

                                        @endif

                                    </ul>

                                @endforeach

                            </div>

                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</body>
</html>
