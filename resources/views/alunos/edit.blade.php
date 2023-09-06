@extends('master')

@if (session()->has('result_edit'))
    {{ session()->get('result_edit') }}
@endif

@section('title')
    <title>Edição de dados de aluno</title>
@endsection

@section('content')
    <h2>Altere os dados do aluno abaixo</h2>
    <form action="{{route('alunos.update', ['id' => $aluno->id])}}" method="post">
        @csrf
        @method('PUT')
        CPF:
        <input type="text" name="cpf" value="{{$aluno->cpf}}"/>
        <br>
        Nome:
        <input type="text" name="nome" value="{{$aluno->nome}}"/>
        <br>
        E-mail:
        <input type="text" name="email" value="{{$aluno->email}}"/>
        <br>
        Data de Nascimento:
        <input type="date" name="data_nasc" value="{{$aluno->data_nasc}}"/>
        <br>
        <br>
        <button type="submit">Atualizar</button>
    </form>

    <br>

    <a href="/">Retornar para início</a>
    <br>
    <a href="/alunos">Retornar para tela de alunos</a>
@endsection
