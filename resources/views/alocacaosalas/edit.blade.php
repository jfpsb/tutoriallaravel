@extends('master')

@if (session()->has('result_edit'))
    {{ session()->get('result_edit') }}
@endif

@section('title')
    <title>Edição de dados de alocação de salas</title>
@endsection

@section('content')
    <h2>{{ $alocacao->descricao() }}</h2>

    <form action="{{ route('alocacaosalas.update', ['id' => $alocacao->id]) }}" method="post">
        @csrf
        @method('PUT')
        Sala:
        <select name="sala">
            <option>Seleciona uma sala</option>
            @foreach ($salas as $sala)
                {{ $selected = $sala->id == $alocacao->sala ? 'selected' : '' }};
                <option value="{{ $sala->id }}" {{ $selected }}>{{ $sala->descricao() }}</option>
            @endforeach
        </select>
        <br>
        Componente Curricular:
        <select name="componente_curricular">
            <option>Seleciona um componente</option>
            @foreach ($componentes as $componente)
                {{ $selected = $componente->id == $alocacao->componente_curricular ? 'selected' : '' }};
                <option value="{{ $componente->id }}" {{ $selected }}>{{ $componente->nome }}</option>
            @endforeach
        </select>
        <br>
        Ano:
        <input type="number" min="1999" max="2100" name="periodo_ano" value="{{ $alocacao->periodo_ano }}" />
        <br>
        Semestre:
        <input type="number" min="1" max="2" name="periodo_semestre"
            value="{{ $alocacao->periodo_semestre }}" />
        <br>
        Horário de Início:
        <input type="time" name="horario_inicio" value="{{ $alocacao->horario_inicio }}">
        <br>
        Horário de Fim:
        <input type="time" name="horario_fim" value="{{ $alocacao->horario_fim }}">
        <br>
        Dias da Semana:
        <input type="text" placeholder="seg,ter,qua,qui,sex" name="dias_semana" value="{{ $alocacao->dias_semana }}" />
        <br>
        <br>
        <button type="submit">Atualizar</button>
    </form>

    <br>

    <a href="/">Retornar para início</a>
    <br>
    <a href="/alocacaosalas">Retornar para tela de alocação de salas</a>
@endsection
