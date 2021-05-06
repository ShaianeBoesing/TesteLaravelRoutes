@extends('layouts.principal')
@section('titulo', 'Clientes - novo')
@section('conteudo')
    <h3>CADASTRO DE CLIENTE</h3>

    <form action="{{route('cliente.store')}}" method="POST">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="Salvar">
    </form>
@endsection
