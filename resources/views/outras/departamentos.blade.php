@extends('layouts.principal')
@section('titulo', 'Departamentos')
@section('conteudo')

    <h3>Departamentos</h3>
    <ul>
        <li>Computadores</li>
        <li>Eletronicos</li>
        <li>Acessórios</li>
        <li>Roupas</li>
    </ul>

    @alerta(['titulo'=>  'Titulo', 'tipo'=>'info'])
        <p><strong>Corpo da mensagem</strong></p>
        <p>fica no html</p>
    @endalerta

    @alerta(['titulo'=> 'Erro Fatal', 'tipo'=>'error'])
        <p><strong>Erro Inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endalerta

    @alerta(['titulo'=> 'Erro Fatal', 'tipo'=>'success'])
        <p><strong>Erro Inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endalerta

    @alerta(['titulo'=> 'Erro Fatal', 'tipo'=>'warning'])
        <p><strong>Erro Inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endalerta

@endsection
