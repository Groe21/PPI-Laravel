<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
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
