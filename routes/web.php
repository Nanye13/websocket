<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\PreguntaController;
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
    return view('welcome');
});

Route::get('/participante', function () {
    return view('jugador.boton');
});

Route::resource('ingresar',EquipoController::class);
Route::resource('juego',JuegoController::class);
Route::resource('pregunta',PreguntaController::class);



// Route::get('/equipo/clave/{clave}',           [EquipoController::class, 'entrar']);
Route::get('entrar',[EquipoController::class, 'entrar'])->name('entrar');

Route::get('espera',[EquipoController::class, 'espera'])->name('espera');

Route::get('boton',[EquipoController::class, 'botonJugador'])->name('boton');


