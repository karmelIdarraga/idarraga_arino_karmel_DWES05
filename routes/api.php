<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('v3/public/pistas/get', 'App\Http\Controllers\PistaController@getAll');

Route::get('v3/public/pistas/get/{id}', 'App\Http\Controllers\PistaController@getPistaById');

Route::get('v3/public/reservas/get', 'App\Http\Controllers\ReservaController@getAll');

Route::post('v3/public/reservas/add', 'App\Http\Controllers\ReservaController@addReserva');

Route::put('v3/public/reservas/confirmar/{id}', 'App\Http\Controllers\ReservaController@confirmarReserva');

Route::delete('v3/public/reservas/anular/{id}', 'App\Http\Controllers\ReservaController@deleteReserva');

