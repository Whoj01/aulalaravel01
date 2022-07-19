<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');  // passando o admin sendo um parametro
    }
    public function index(){
         return view('Admin');
    }
}
