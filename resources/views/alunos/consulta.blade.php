@extends('master')

@section('title')
    <title>Consulta de alunos</title>
@endsection

@section('content')
    <h2>Alunos</h2>
    <a href="/alunos/cadastrar">Cadastrar novo aluno</a>
    <ul>
        @foreach ($alunos as $aluno)
            <li>{{ $aluno->nome }} | <a href="alunos/matriculas/{{ $aluno->id }}">Realizar Matrícula Em Componentes
                    Curriculares</a> | <a href="{{ route('alunos.edit', ['aluno' => $aluno]) }}">Editar</a> | <a
                    href="{{ route('alunos.destroy', ['aluno' => $aluno]) }}">Visualizar</a></li>
        @endforeach
    </ul>
@endsection
