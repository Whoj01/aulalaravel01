<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos (){
        echo '<h1>PRODUTOS</h1>';
        echo '<ol>';
        echo '<li>notebook</li>';
        echo '<li>impressora</li>';
        echo '<li>mouse</li>';
        echo '</ol>';
    }

    public function getNome (){
        return 'Josue';
    }

    public function getAge (){
        return 18;
    }

    public function multiplicar ($n1, $n2){ // e pego em sequencia as variaveis
        return $n1 * $n2;
    }
    
}
