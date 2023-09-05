@extends('master')

@section('title')
    <title>Consulta de alunos</title>
@endsection

@section('content')
    <h2>Alunos</h2>
    <h2>Lista os alunos aqui. Botao de cadastrar e botão de matrícula</h2>
    <ul>
        @foreach ($alunos as $aluno)
            <li>{{ $aluno->nome }} | <a>Editar</a> | <a>Deletar</a></li>
        @endforeach
    </ul>
    <a href="/alunos/cadastrar">Cadastrar novo aluno</a>
@endsection
