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
    return view('welcome');
});

Route::get('/tarea', function () {
    return view('paginas/hola-mundo');
});

Route::post('/tarea/store', function () {
    //validacion 
    //Limpiexa
    //guardar
});

Route::post('/tarea/create', function () {
    return view('paginas/hola-mundo');
});

Route::get('/hola-mundo', function () {
    return view('paginas/hola-mundo');
});
/*
Route::get('/grabaciones/{nombre}', function ($nombre) {
    //dd($nombre); // Detiene la ejecucion
    return view('paginas.grabaciones', compact('nombre'));
});
*/

Route::get('/grabaciones/{nombre}/{ano?}', function ($nombre, $ano = null) {
    
    return view('paginas.grabaciones', compact('nombre','ano'));
        // -> with([
        //     'nombre' => $nombre, 
        //     'otra' => 'variable'
        // ]);
});

