<?php

    // Manuel Alarcon Fortes

    use Illuminate\Support\Facades\DB;

    $funciones = DB::table('Funcion')->get();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus - Sign In</title>

    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="shortcut icon" href="/assets/img/chorusIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

    
    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 60rem;">
        <div class="card-header bg-titulo text-center">
            <a href="{{ url('/') }}"><i class="bi bi-arrow-90deg-left fs-4 link-light"></i></a>
            <h1>Add Users</h1>
        </div>

        <!-- FORMULARIO DE AÑADIR USUARIO -->
        <form action="{{ route('store') }}" method="POST" autocomplete="off" class="p-3 bg-clarito">
            @csrf

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control bg-input" id="nombre" name="nombre">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="funcion[]" class="form-label">Función</label>
                                    <select class="w-100" class="bg-input" id="funcion" name="funcion[]" multiple>                                        
                                        @foreach($funciones as $funcion)
                                            <option value="{{ $funcion->IdFuncion }}">{{ $funcion->NombreFuncion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control bg-input" id="apellido" name="apellido">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="imagen" class="form-label">Imagen (Opcional)</label>
                                    <input type="text" class="form-control bg-input" id="imagen" name="imagen">
                                </div>
                            </div>
                        </div>

                        <div class="row p-3">
                            <div class="col"></div>
                            <div class="col">
                                <button class="btn bg-titulo w-100 fs-3">Entrar</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

</body>
</html>
