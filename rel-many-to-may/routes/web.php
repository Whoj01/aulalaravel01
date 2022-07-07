<?php

use App\Models\Desenvolvedor;
use App\Models\Projeto;
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

Route::get('/desenvolvedorprojeto', function () {
    $desenvolvedores = Desenvolvedor::with('projetos')->get();
    foreach($desenvolvedores as $d) {
        echo "<p>".$d->nome."</p>";
        echo "<ul>";
        foreach($d->projetos as $p){
           echo "<li>".$p->nome ."</li>";
           echo "<li>".$p->estimativa_horas ."</li>";
           echo "<li>".$p->pivot->horas_semanais ."</li>";
        }
        echo "</ul>";
    }
   
});

Route::get('/projetodesenvolvedor', function () {
    $proj = Projeto::with('desenvolvedors')->get();

    return $proj->toJson();
});

Route::get('/desalocar', function(){
    $proj = Projeto::find(3);
    $proj->desenvolvedors()->dettach(2);
});