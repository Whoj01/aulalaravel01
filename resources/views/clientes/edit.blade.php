
@extends('layouts.principal')

@section('titulo','Editar - cliente')

@section('content')
  <h1>Editar Cliente</h1>
 

  <form action="{{ route('clientes.update', $cliente['id'] ) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $cliente['nome'] }}">
    <input type="submit" value="salvar">
  </form>

     <br>

   <a href="{{route('clientes.index')}}">Voltar</a>
@endsection