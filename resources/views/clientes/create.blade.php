<h3>novo cliente</h3>

<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <input type="text" name="nome">
    <input type="submit" value="salvar">
</form>