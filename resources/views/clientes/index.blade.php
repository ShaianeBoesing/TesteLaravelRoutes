<h1>CLIENTES</h1>

<a href="{{route('cliente.create')}}">NOVO</a> <br>

<ul>
    @foreach($clientes as $c)
    <li>
        {{ $c['id'] }} - {{ $c['nome'] }} |
{{--        <a href="{{route('cliente.edit'), $c['id']}}">Editar</a> <br>;--}}
        <a href="{{route('cliente.edit', $c['id'], 'edit')}}">EDITAR</a> |
        <a href="{{route('cliente.show', $c['id'], 'edit')}}">VER</a> <br>
        <form action="{{route('cliente.destroy', $c['id'])}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Apagar">
        </form>

    </li>
    @endforeach
</ul>
