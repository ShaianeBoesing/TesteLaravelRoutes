@extends('layouts.principal')
@section('titulo', 'Clientes')
@section('conteudo')
    <h1>{{$titulo}}</h1>
    <a href="{{route('cliente.create')}}">NOVO</a> <br>

    @if(count($clientes)>0)
        <ul>
            @foreach($clientes as $c)
                <li>
                    {{ $c['id'] }} - {{ $c['nome'] }} |
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

        <hr>

        <h3>LOOP &#64;for</h3>
        @for($i=0; $i<count($clientes); $i++)
            <p>{{$clientes[$i]['id']}} -
            {{$clientes[$i]['nome']}}
            </p>
        @endfor

        <hr>

        <h3>LOOP &#64;foreach</h3>
        @foreach($clientes as $c)
            <p>
                {{$c['id']}}
                -
                {{$c['nome']}}
                -
                @if($loop->first) <!-- loop variable is created when a foreach loop starts // first indicates the first element -->
                    Primeiro
                @elseif($loop->last) <!-- last indicates the last element -->
                    Último
                @endif
                - posição absoluta:
                {{$loop->index}} <!-- index shows the position of each element -->
                - posição relativa: {{$loop->iteration}} / {{$loop->count}}

            </p>
        @endforeach


    @endif

    @empty($clientes)
    <h4>{{$vazio}}</h4>
    @endempty
@endsection
