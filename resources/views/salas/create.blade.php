@extends('master')

@if (session()->has('result_create'))
    {{ session()->get('result_create') }}
@endif

@section('title')
    <title>Cadastro de Salas</title>
@endsection

@section('content')
    <h2>Cadastro de salas</h2>
    <form action="store" method="post">
        @csrf
        Prédio:
        <input type="text" name="predio" />
        <br>
        Número:
        <input type="text" name="numero" />
        <br>
        Complemento:
        <input type="text" name="complemento" />
        <br>
        <button type="submit">Cadastrar</button>
    </form>

    <br>

    <a href="/">Retornar para início</a>
    <br>
    <a href="/salas">Retornar para tela de salas</a>
@endsection
