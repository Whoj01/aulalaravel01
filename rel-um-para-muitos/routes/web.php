<?php

use App\Models\Categoria;
use App\Models\Produto;
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

Route::get('/categorias', function () {
    $cat = Categoria::all();
    foreach($cat as $c){
        echo '<p>' . $c->id, ":" . $c->nome . '</p>';
    };
});

Route::get('/produtos', function () {
    $prod = Produto::all();
    echo "<table>";
    echo "<thead> <tr><td>nome</td> <td>preco</td> <td>stock</td> <td>categoria</td></tr></thead>";
    foreach($prod as $p){
        echo "<tr>";
        echo '<td>'. $p->nome . '</td>';
        echo '<td>'. $p->preco . '</td>';
        echo '<td>'. $p->stock . '</td>';
        echo '<td>'. $p->categoria->nome . '</td>';
        echo "</tr>";
    };
});

Route::get('/categoriasprodutos', function () {
    $cat = Categoria::all();
    foreach($cat as $c){
        echo '<p>' . $c->id, ":" . $c->nome . '</p>';
        $produtos = $c->produtos;
        echo '<ul>';
        foreach($produtos as $p){
            echo '<li>'. $p->nome . '</li>';
        }
        echo '</ul>';
    };
});

Route::get('/categoriasprodutos/json', function () {
    $cat = Categoria::with(['produtos'])->get();
    return $cat->toJson();
});
