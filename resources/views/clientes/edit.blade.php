<h3>CADASTRO DE CLIENTE</h3>

<form action="{{route('cliente.update', $clientes['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{$clientes['nome']}}">
    <input type="submit" value="Salvar">
</form>
