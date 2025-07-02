<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TextoController;
use App\Models\Texto;

/*
|--------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el middleware "web". ¡Ahora crea algo grandioso!
|
*/

Route::get('/', function () {
    $carrusel_titulo_1 = Texto::where('clave', 'carrusel_titulo_1')->value('contenido');
    $carrusel_texto_1  = Texto::where('clave', 'carrusel_texto_1')->value('contenido');
    $carrusel_titulo_2 = Texto::where('clave', 'carrusel_titulo_2')->value('contenido');
    $carrusel_texto_2  = Texto::where('clave', 'carrusel_texto_2')->value('contenido');
    $carrusel_titulo_3 = Texto::where('clave', 'carrusel_titulo_3')->value('contenido');
    $carrusel_texto_3  = Texto::where('clave', 'carrusel_texto_3')->value('contenido');
    return view('index', compact(
        'carrusel_titulo_1', 'carrusel_texto_1',
        'carrusel_titulo_2', 'carrusel_texto_2',
        'carrusel_titulo_3', 'carrusel_texto_3'
    ));
})->name('inicio');

Route::get('/nuestros-servicios', function () {
    return view('nuestros_servicios');
})->name('servicios');

Route::get('/sobre-nosotros', function () {
    return view('sobre_nosotros');
})->name('nosotros');

Route::get('/organigrama', function () {
    return view('organigrama');
})->name('organigrama');

Route::get('/contactenos', function () {
    return view('contactenos');
})->name('contacto');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::put('/texto/{clave}', [TextoController::class, 'update'])->name('texto.update')->middleware('auth');
