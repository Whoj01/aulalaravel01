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

use App\Models\Cliente;
use App\Models\Endereco;



Route::prefix('/clientes')->group(function() {
      Route::get('/', function() {
        $clientes = Cliente::all();
        foreach($clientes as $c){
            echo "<p> ID:" . $c->id . "</p>";
            echo "<p> Nome:" . $c->nome . "</p>";
            echo "<p> cel:" . $c->telefone . "</p>";
            //$e = Endereco::where('cliente_id', $c->id)->first();
            echo "<p> rua:" . $c->endereco->rua . "</p>";
            echo "<p> numero:" . $c->endereco->numero . "</p>";
            echo "<p> bairro:" . $c->endereco->bairro . "</p>";
            echo "<p> uf:" . $c->endereco->uf . "</p>";
            echo "<p> cep:" . $c->endereco->cep . "</p>";
            echo "<hr>";
    }});
      Route::get('/json', function(){
         //$clientes = Cliente::all(); nao traz todos os relacionamentos juntos
         $clientes = Cliente::with(['endereco'])->get();
         return $clientes->toJson();
      });
});

Route::prefix('/enderecos')->group(function() {
    Route::get('/', function () {
        $enderecos = Endereco::all();
        foreach($enderecos as $e){
    
            echo "<p> ID:" . $e->cliente_id . "</p>";
            echo "<p> rua:" . $e->rua . "</p>";
            echo "<p> numero:" . $e->numero . "</p>";
            echo "<p> bairro:" . $e->bairro . "</p>";
            echo "<p> uf:" . $e->uf . "</p>";
            echo "<p> cep" . $e->cep . "</p>";
            echo "<p> Nome:" . $e->cliente->nome . "</p>";
            echo "<p> Telefone:" . $e->cliente->telefone . "</p>";
    
            echo "<hr>";}});
    Route::get('/json', function(){
      $end = Endereco::with(['cliente'])->get();
      return $end->toJson();
    });
});