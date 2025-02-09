<?php

    // Manuel Alarcon Fortes

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\DB;
    use App\Http\Controllers\UserController;


    Route::get('/', function () {
        return view('usuarios.index'); // Sin la extensión .blade.php
    })->name('home');

    Route::get('/form', function () {
        return view('usuarios.form'); // Sin la extensión .blade.php
    })->name('form');

    Route::post('/form', [UserController::class, 'store'])->name('store');

    Route::get('/delete/{id}', function ($id) {
        
        DB::table('Usuario')->where('idUsu', $id)->delete();

        return redirect()->route('home');
    })->name('delete');