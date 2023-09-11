@extends('master')

@section('title')
    <title>Consulta de alocação de salas</title>
@endsection

@section('content')
    <h2>Alocação de Salas</h2>
    <a href="/alocacaosalas/cadastrar">Cadastrar nova alocação de sala</a>
    <ul>
        @foreach ($alocacaosalas as $alocacaosala)
            <li>{{ $salaModel->find($alocacaosala->sala)->descricao() }} -
                {{ $componenteModel->find($alocacaosala->componente_curricular)->nome }} -
                {{ $alocacaosala->periodo_ano }}.{{ $alocacaosala->periodo_semestre }} - {{ $alocacaosala->horario_inicio }}
                até {{ $alocacaosala->horario_fim }} - Dias: {{ $alocacaosala->dias_semana }} | <a
                    href='{{ route('alocacaosalas.edit', ['alocacao' => $alocacaosala]) }}'>Editar</a> |
                <a href='{{ route('alocacaosalas.show', ['alocacao' => $alocacaosala]) }}'>Visualizar</a>
            </li>
        @endforeach
    </ul>
@endsection
