@extends('master')

@if (session()->has('result_create'))
    {{ session()->get('result_create') }}
@endif

@section('title')
    <title>Realizar matrícula</title>
@endsection

@section('content')
    <h2>Realizar matrícula</h2>
    <form action="store" method="post">
        @csrf
        Aluno:
        <label><?php echo Str::upper("$aluno->nome"); ?></label>
        <input type="hidden" name="aluno" value="{{ $aluno->id }}" />
        <br>
        Alocação de sala:
        <select name="alocacao_sala">
            <option>Selecione uma alocação de sala</option>
            @foreach ($alocacoes as $alocacao)
                <option value="{{ $alocacao->id }}">{{ $alocacao->descricao() }}</option>
            @endforeach
        </select>
    </form>
@endsection
