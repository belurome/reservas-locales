<?php

use App\Http\Controllers\AutorizarController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\RestaurantesController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


//
Route::get('/', [RestaurantesController::class, 'index'])->name('index');
Route::get('/create', [RestaurantesController::class, 'create'])->name('create');
Route::post('/store', [RestaurantesController::class, 'store'])->name('store');

//Rutas para autorizar o declinar
Route::get('autorizar', [AutorizarController::class, 'index'])->name('autorizar.index');
Route::get('autorizar/si/{id}', [AutorizarController::class, 'autorizado'])->name('autorizar.si');
Route::get('autorizar/no/{id}', [AutorizarController::class, 'declinado'])->name('autorizar.no');

//Rutas para cancelar
Route::get('/cancelar-reserva', [ReservasController::class, 'cancelarReservaInfo'])->name('cancelar-reserva');
Route::post('/cancelar-reserva', [ReservasController::class, 'reservaCancelada'])->name('reserva-cancelada');

//Rutas para las reservas
Route::get('/{id}', [ReservasController::class, 'create'])->name('reservas.id');
Route::post('/{id}', [ReservasController::class, 'store'])->name('reservaspost.id');

//Route::resource('/cancelar-reserva', [AutorizarController::class, 'cancelarReserva']);




