<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsuarioControlador extends Controller
{
    /*public function __construct()
    {
        $this->middleware('primeiro');
    }*/
    public function index(){
        Log::debug('passou pelo usuarios');
        return '<h3>Lista de usuarios</h3>' .
        '<ul>'.
        '<li>Jose</li>' .
        '<li>Josue</li>' .
        '<li>joao</li>' .
        '<li>Maria</li>' .
        '</ul>';
    }
}
