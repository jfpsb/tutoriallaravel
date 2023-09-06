@extends('master')

@if (session()->has('result_edit'))
    {{ session()->get('result_edit') }}
@endif

@section('title')
    <title>Edição de dados de salas</title>
@endsection

@section('content')
    <h2>Edição de salas</h2>
    <form action="{{route('salas.update', ['id' => $sala->id])}}" method="post">
        @csrf
        Prédio:
        <input type="text" name="predio" value="{{$sala->predio}}"/>
        <br>
        Número:
        <input type="text" name="numero" value="{{$sala->numero}}" />
        <br>
        Complemento:
        <input type="text" name="complemento" value="{{$sala->complemento}}" />
        <br>
        <button type="submit">Editar</button>
    </form>

    <br>

    <a href="/">Retornar para início</a>
    <br>
    <a href="/salas">Retornar para tela de salas</a>
@endsection
