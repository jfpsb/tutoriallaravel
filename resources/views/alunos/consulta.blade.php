@extends('master')

@section('title')
    <title>Consulta de alunos</title>
@endsection

@section('content')
    <div class="ul-container">
        <h2>Alunos</h2>
        <a class="cadastrar-link" href="/alunos/cadastrar">Cadastrar novo aluno</a>
        <ul>
            @foreach ($alunos as $aluno)
                <li>{{ $aluno->nome }} | <a class="li-link" href="alunos/matriculas/{{ $aluno->id }}">Realizar Matrícula
                        Em Componentes
                        Curriculares</a> | <a class="li-link"
                        href="{{ route('alunos.edit', ['aluno' => $aluno]) }}">Editar</a> | <a class="li-link"
                        href="{{ route('alunos.destroy', ['aluno' => $aluno]) }}">Visualizar</a></li>
            @endforeach
        </ul>
    </div>
@endsection
