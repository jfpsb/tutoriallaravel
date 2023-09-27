@extends('master')

@if (session()->has('result_create'))
    {{ session()->get('result_create') }}
@endif

@section('title')
    <title>Realizar matrícula</title>
@endsection

@section('content')
    <h2>Realizar matrícula</h2>
    <form action="{{ route('matriculas.store', ['aluno' => $aluno]) }}" method="post">
        @csrf
        Aluno:
        <label><?php echo Str::upper("$aluno->nome"); ?></label>
        <br>
        Alocação de sala:
        <select name="alocacao_sala">
            <option>Selecione uma alocação de sala</option>
            @foreach ($alocacoes as $alocacao)
                <option value="{{ $alocacao->id }}">{{ $alocacao->descricao() }}</option>
            @endforeach
        </select>

        <br>
        <br>

        <button type="submit">Finalizar</button>

    </form>

    <a href="/">Retornar para início</a>
    <br>
    <a href="/alunos">Retornar para tela de alunos</a>
@endsection
