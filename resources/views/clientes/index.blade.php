<h3>Clientes</h3>
<a href={{route('clientes.create')}}>novo cliente</a>
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