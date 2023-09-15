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
        <input type="text" name="cpf" required />
        <br>
        Nome:
        <input type="text" name="nome" required />
        <br>
        E-mail:
        <input type="text" name="email" required />
        <br>
        Data de Nascimento:
        <input type="date" name="data_nasc" required />
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>

    <br>

    <a href="/">Retornar para início</a>
    <br>
    <a href="/alunos">Retornar para tela de alunos</a>
@endsection
