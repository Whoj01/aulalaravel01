<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControlador extends Controller
{

    public function index(){
        echo "<h4>Lista de produtos</h4>";
        echo "<ul>";
        echo "<li>eletronicos </li>";
        echo "<li>sucos </li>";
        echo "<li>eletrodomesticos </li>";
        echo "<li>salgado </li>";
        echo "<li>alimentos</li>";
        echo "</ul>";
        if(Auth::check()){
            $user = Auth::user();
            echo "<p>".$user->email . "</p>";
            echo "<p>".$user->name . "</p>";
            echo "<p>".$user->id . "</p>";
        } else {
            return "Voce nao esta logado";
        }
    }
}
