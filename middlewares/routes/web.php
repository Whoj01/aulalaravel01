<?php

use App\Http\Controllers\UsuarioControlador;
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

Route::get('/usuarios', [UsuarioControlador::class, 'index'])->middleware(['primeiro', 'segundo']);

Route::get('/terceiro', function(){
    return 'passou pelo terceiro middleware';
})->middleware('terceiro:meuamorzin maria,20'); // para passar um parametro para um middleware precisa usar os : pontos

