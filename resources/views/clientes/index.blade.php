@extends('layouts.principal')


@section('content') {{--indico que esse counteudo todo é uma secao que pode ser chamada em outros blades--}}
    

 <h3>{{$title}}</h3> 
 <a href={{route('clientes.create')}}>novo cliente</a>

 @if (count($clientes) > 0) {{--Se o clientes for maior que zero ele executa o foreach, se nao retorna um paragrafo--}}
  <ul>
    @foreach ($clientes as $cliente)
    <li>
       {{ $cliente['nome']}} | {{ $cliente['id']}} | <a href={{route('clientes.edit', $cliente['id'])}}>editar</a> |
       <a href={{route('clientes.show', $cliente['id'])}}>Info</a> 
       <form action="{{ route('clientes.destroy', $cliente['id'] ) }}" method="POST">
        @csrf
        @method('DELETE') <!-- permite mudar o metodo que so é enviado com get e post-->   
        <input type="submit" value="Deletar">
       </form>
    </li>
    @endforeach 
  </ul>
      

    <hr>
    @for ($i = 0; $i < 10; $i++)
        {{$i}},
    @endfor

    <br>

    @for ($i = 0; $i < count($clientes); $i++)
        {{$clientes[$i]['nome']}}
    @endfor

    @foreach ($clientes as $cliente)
         <p>{{$cliente['nome']}} | 
         @if($loop->first) {{--Verifica se [e o primeiro item do loop--}}
            (primeiro)
         @endif

         @if($loop->last) {{--Verifica se [e o ultimo item do loop--}}
            (ultimo)
         @endif

         {{$loop->index + 1 }} / {{$loop->count}} {{--o +1 serve para mostar 1/4 e mais--}}
        </p>
        
    @endforeach

   
    @endif

  @empty($clientes) {{--Já verefica se o clientes esta vazio sozinho--}}
  <p>Nenhum cliente cadastrado</p>
  @endempty
@endsection 

 