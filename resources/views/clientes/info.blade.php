
@extends('layouts.principal')

@section('titulo', 'informacoes do cliente')

@section('content')
  <h3>Informacoes do cliente</h3>

  <p>{{$cliente['id']}}</p>
  <p>{{$cliente['nome']}}</p>
  <br>

  <a href="{{ route('clientes.index') }}">Voltar </a>

@endsection