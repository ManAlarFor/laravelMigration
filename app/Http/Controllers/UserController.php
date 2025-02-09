<?php

    // Manuel Alarcon Fortes

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class UserController extends Controller
    {
        public function store(Request $request)
        {
            // Validar los datos del formulario
            $request->validate([
                'nombre' => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'funcion' => 'required|array',
                'imagen' => 'nullable|url',
            ]);

            // Guardar el usuario en la base de datos y obtener el idUsu generado
            $idUsu = DB::table('Usuario')->insertGetId([
                'NombreUsu' => $request->nombre,
                'ApellidoUsu' => $request->apellido,
                'PerfilUsu' => $request->imagen,
            ]);

            // Guardar la relación con las funciones usando el idUsu obtenido
            foreach ($request->funcion as $funcionId) {
                DB::table('usuario_funcion')->insert([
                    'idUsu' => $idUsu,  // Usamos el idUsu recién insertado
                    'idFun' => $funcionId
                ]);
            }

            // Redirigir al home
            return redirect()->route('home');
        }
    }
