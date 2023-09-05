@extends('master')

@if (session()->has('result_create'))
    {{ session()->get('result_create') }}
@endif

@section('title')
    <title>Cadastro de alunos</title>
@endsection

@section('content')
    <h2>Insira os dados do aluno abaixo</h2>
    <form action="store" method="post">
        @csrf
        CPF:
        <input type="text" name="cpf" />
        <br>
        Nome:
        <input type="text" name="nome" />
        <br>
        E-mail:
        <input type="text" name="email" />
        <br>
        Data de Nascimento:
        <input type="text" name="data_nasc" />
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>

    <br>

    <a href="/">Retornar para início</a>
@endsection
