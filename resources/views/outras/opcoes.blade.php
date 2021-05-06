@extends('layouts.principal')
@section('titulo', 'Departamentos')
@section('conteudo')
    <div>
        <ul>
            <li><a href="{{route('opcoes',1)}}" class="warning {{request()->is('opcoes/1')?'selected':''}}">Warning</a></li>
            <li><a href="{{route('opcoes',2)}}" class="info {{request()->is('opcoes/2')?'selected':''}}">Info</a></li>
            <li><a href="{{route('opcoes',3)}}" class="success {{request()->is('opcoes/3')?'selected':''}}">Sucess</a></li>
            <li><a href="{{route('opcoes',4)}}" class="error {{request()->is('opcoes/4')?'selected':''}}">Error</a></li>
        </ul>
    </div>

    @if(isset($opcao))

        @switch($opcao)
            @case(1)
                @alerta(['titulo'=> 'Cuidado', 'tipo'=>'warning'])
                <p><strong>Cuidado</strong></p>
                <p>Cuidado</p>
                @endalerta
            @break

            @case(2)
                @alerta(['titulo'=>  'Informação', 'tipo'=>'info'])
                <p><strong>Informação</strong></p>
                <p>informação</p>
                @endalerta
            @break

            @case(3)
                @alerta(['titulo'=> 'Sucesso', 'tipo'=>'success'])
                <p><strong>Sucesso</strong></p>
                <p>Sucesso</p>
                @endalerta
            @break

            @case(4)
                @alerta(['titulo'=> 'Erro Fatal', 'tipo'=>'error'])
                <p><strong>Erro Inesperado</strong></p>
                <p>Ocorreu um erro inesperado</p>
                @endalerta
            @break

        @endswitch
    @endif

@endsection
