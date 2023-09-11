@extends('master')

@section('title')
    <title>Visualizar dados de alocação de salas</title>
@endsection

@section('content')
    <h2>{{ $alocacao->descricao() }}</h2>

    Sala:
    <input type="text" value="{{ $sala->descricao() }}" readonly />

    <br>

    Componente Curricular:
    <input type="text" value="{{ $componente->nome }}" readonly />

    <br>

    Período:
    <input type="text" value="{{ $alocacao->periodo_ano }}.{{ $alocacao->periodo_semestre }}" readonly />

    <br>

    Horário:
    <input type="text" value="{{ $alocacao->horario_inicio }} a {{ $alocacao->horario_fim }}" readonly />

    <br>

    Dias da Semana:
    <input type="text" value="{{ $alocacao->dias_semana }}" readonly />

    <br><br>

    <form action="{{ route('alocacaosalas.destroy', ['alocacao' => $alocacao]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
@endsection
