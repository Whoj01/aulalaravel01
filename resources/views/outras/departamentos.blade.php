@extends('layouts.principal')

@section('titulo','Departamentos')

@section('content')
   <h3>Departamentos</h3>

   <ul>
    <li>computadores</li>
    <li>eletronicos</li>
    <li>acessorios</li>
    <li>roupas</li>
   </ul>

@alerta( ['titulo'=> 'Erro Inesperado', 'tipo'=> 'success'])
    <p><strong>ERRO Inesperado</strong></p>
    <p>ocorreu um erro inesperado</p>
@endalerta

@alerta(['titulo'=> 'Erro Inesperado', 'tipo'=> 'error'])
    <p><strong>ERRO Inesperado</strong></p>
    <p>ocorreu um erro inesperado</p>
@endalerta

@alerta( ['titulo'=> 'Erro Inesperado', 'tipo'=> 'warning'])
    <p><strong>ERRO Inesperado</strong></p>
    <p>ocorreu um erro inesperado</p>
@endalerta


@endsection