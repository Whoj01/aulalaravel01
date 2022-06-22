<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clienteControlador extends Controller
{


    private $clientes = [
      ['id' => 1, 'nome' => 'ademir'],
      ['id' => 2, 'nome' => 'josue'],
      ['id' => 3, 'nome' => 'johnny'],
      ['id' => 4, 'nome' => 'gustavo'],
      ['id' => 5, 'nome' => 'joao'],
    ];

    public function __construct() // funcao construtora qunaod o controlador for criado
    {
        $clientes = session('clientes');  
        if (!isset($clientes))
           session(['clientes' => $this->clientes]); // vai verificar se existe algo em clientes e se nao existir ele vai setar
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes= session('clientes');
        return view('clientes.index', compact(['clientes'])); // passando para a view os clientes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        $id = count($clientes) + 1; //gerando o id 
        $nome = $request->nome;  
        $dados = ["id" => $id, "nome" => $nome];
        $clientes[] = $dados;
        session(['clientes' => $clientes]);
        //return redirect()->route('clientes.index'); como e um banco de daos ficticio o controlador reescreve e nao e mostrado para a gente
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = session('clientes');
        $index = self::getIndex($id, $clientes);
        $cliente = $clientes[$index]; // comecar com o id 0
        return view('clientes.info', compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $clientes = session('clientes');
        $index = self::getIndex($id, $clientes);
        $cliente = $clientes[$index];
        return view('clientes.edit', compact(['cliente']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientes = session('clientes');
        $index = self::getIndex($id, $clientes);
        $clientes[$index]['nome'] = $request->nome;
        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = session('clientes');
        $index = self::getIndex($id, $clientes);
        array_splice($clientes, $index, 1);
        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');
    }

    private function getIndex($id, $clientes){
        $ids = array_column($clientes, 'id');
        $index = array_search($id, $ids);
        return $index;
    }
}
