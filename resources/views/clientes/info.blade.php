@extends('layouts.principal')
@section('titulo', 'Clientes - detalhes')
@section('conteudo')
    <h1>INFORMAÇÕES DO CLIENTE</h1>

    <p>ID: {{$clientes['id']}}</p>
    <p>NOME: {{$clientes['nome']}} </p>

    <a href="{{route('cliente.index')}}">VOLTAR</a>
@endsection
