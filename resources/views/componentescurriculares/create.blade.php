@extends('master')

@if (session()->has('result_create'))
    {{ session()->get('result_create') }}
@endif

@section('title')
    <title>Cadastro de Componente Curricular</title>
@endsection

@section('content')
    <h2>Cadastro de Componente Curricular</h2>

    <form action="store" method="post">
        @csrf
        Nome:
        <input type="text" name="nome" />
        <button type="submit">Cadastrar</button>
    </form>

    <br>

    <a href="/">Retornar para início</a>
    <br>
    <a href="/componentescurriculares">Retornar para tela de componentes curriculares</a>
@endsection
