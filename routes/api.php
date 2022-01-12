<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Mostrar todos los registros
Route::get('/datos', 'App\Http\Controllers\DatosController@index');
// Crear un registro
Route::post('/datos/crear', 'App\Http\Controllers\DatosController@store');
// Actualizar un registro
Route::put('/datos/actualizar/{id}', 'App\Http\Controllers\DatosController@update');
// Eliminar un registro
Route::delete('/datos/eliminar', 'App\Http\Controllers\DatosController@destroy');
