@extends('master')

@section('title')
    <title>Cadastro de alocação de salas</title>
@endsection

@section('content')
    <h2>Alocação de salas</h2>

    <form action="store" method="post">
        @csrf
        Sala:
        <select name="sala">
            <option>Seleciona uma sala</option>
            @foreach ($salas as $sala)
                <option value="{{ $sala->id }}">{{ $sala->descricao() }}</option>
            @endforeach
        </select>
        <br>
        Componente Curricular:
        <select name="componente">
            <option>Seleciona um componente</option>
            @foreach ($componentes as $componente)
                <option value="{{ $componente->id }}">{{ $componente->nome }}</option>
            @endforeach
        </select>
        <br>
        Ano:
        <input type="number" min="1999" max="2100" name="periodo_ano" />
        <br>
        Semestre:
        <input type="number" min="1" max="2" name="periodo_semestre" />
        <br>
        Horário de Início:
        <input type="time" name="horario_inicio">
        <br>
        Horário de Fim:
        <input type="time" name="horario_fim">
        <br>
        Dias da Semana:
        <input type="text" placeholder="seg,ter,qua,qui,sex" name="dias_semana"/>
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>

    <br>
    <a href="/">Retornar para início</a>
    <br>
    <a href="/componentescurriculares">Retornar para tela de componentes curriculares</a>
@endsection
