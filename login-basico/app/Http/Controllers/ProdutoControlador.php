<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        echo "<h4>Lista de produtos</h4>";
        echo "<ul>";
        echo "<li>macarrao </li>";
        echo "<li>arroz </li>";
        echo "<li>feijao </li>";
        echo "<li>salada </li>";
        echo "<li>carne bovina </li>";
        echo "</ul>";
    }
}
