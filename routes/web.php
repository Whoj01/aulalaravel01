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

Route::get('/produtos', function () {
    return "ola";
});

Route::get('/ola/{nome}/{sobrenome}', function($nome, $sobrenome /*as variaveis sao atribuidas de acordo a ordem na url de parametro*/ ) {
    echo "ola seja bem vindo, ${nome} ${sobrenome}";
});

Route::get('/seunome/{nome?}'/*o uso de ? no parametro da rota diz q ele é opcional*/ , function($nome=null) /*se nao for passada ela é nulo*/ {
    if (isset($nome)) /* isset verifica se aquela variavel existe e tem algo atribuida.*/
       return "ola seja bem vindo, ${nome}";
     
    return "que pena que o nome nao foi passado";
});

Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n) {
    for ($i = 0; $i < $n; $i++)
      echo "ola seja bem vindo, ${nome}";
    
})->where('nome', '[a-zA-Z]+' /*regular exp, como se fosse uma tipagem de typescript*/)
->where('n', '[0-9]+') /*so aceita de 1 ao 9*/;


Route::prefix('/app')->group( /*todas as routas app/algumarota vai para esse caminho*/ 
    function(){

        Route::get('/', function(){
            return view('app');
        })->name('app')/*nome que a rota pode ser chamado pelo blade*/;

        Route::get('/user', function(){
            return view('user');
        })->name('app.user')/*nome que a rota pode ser chamado pelo blade*/;

        Route::get('/pizza/{sabor?}', function($sabor=null){
            
            return view('pizza', ['sabor' => $sabor,]);
            
        })->name('app.pizza')/*nome que a rota pode ser chamado pelo blade*/;
    }
);

Route::get('/produtos', function(){
    echo '<h1>PRODUTOS</h1>';
    echo '<ol>';
    echo '<li>notebook</li>';
    echo '<li>impressora</li>';
    echo '<li>mouse</li>';
    echo '</ol>';
})->name('meusprodutos');

Route::redirect('/produtos'/*URL que vai ser acessada*/, '/' /*URL em que vai ser direcionada dps de acessar a primeira*/ , 302);

Route::get('/todososprodutos', function (){
    return redirect()->route('meusprodutos');/*faz o mesmo que acima mas é o metodo mais utilizado*/
});