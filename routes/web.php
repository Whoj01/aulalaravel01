<?php

use App\Http\Controllers\clienteControlador;
use App\Http\Controllers\MeuControlador;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

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

Route::get('/produtos', function(){
    return view('outras.produtos');
})->name('produtos'); 

Route::get('/departamentos', function(){
    return view('outras.departamentos');
})->name('departamentos'); 

Route::get('/idade', [MeuControlador::class, 'getAge']); 

Route::get('/nome', [MeuControlador::class, 'getNome']); 

Route::get('/produtos/{n1}/{n2}', [MeuControlador::class, 'multiplicar']); 


Route::resource('clientes', clienteControlador::class); // com o resource ele cria ja as rotas automaticamente, mas o controlador tem que ser criado pelo --resource pq o laravel procura os nomes