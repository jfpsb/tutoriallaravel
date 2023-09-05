@extends('master')

@section('title')
    <title>Consulta de alunos</title>
@endsection

@section('content')
    <h2>Alunos</h2>
    <a href="/alunos/cadastrar">Cadastrar novo aluno</a>
    <ul>
        @foreach ($alunos as $aluno)
            <li>{{ $aluno->nome }} | <a>Realizar Matrícula Em Componentes Curriculares</a> | <a>Editar</a> | <a>Deletar</a></li>
        @endforeach
    </ul>
@endsection
