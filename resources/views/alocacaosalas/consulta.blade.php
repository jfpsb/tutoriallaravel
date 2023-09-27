@extends('master')

@section('title')
    <title>Consulta de alocação de salas</title>
@endsection

@section('content')
    <div class="ul-container">
        <h2>Alocação de Salas</h2>
        <a class="cadastrar-link" href="/alocacaosalas/cadastrar">Cadastrar nova alocação de sala</a>
        <ul>
            @foreach ($alocacaosalas as $alocacaosala)
                <li>{{ $alocacaosala->sala->descricao() }} -
                    {{ $alocacaosala->componenteCurricular->nome }} -
                    {{ $alocacaosala->periodo_ano }}.{{ $alocacaosala->periodo_semestre }} -
                    {{ $alocacaosala->horario_inicio }}
                    até {{ $alocacaosala->horario_fim }} - Dias: {{ $alocacaosala->dias_semana }} | <a class="li-link"
                        href='{{ route('alocacaosalas.edit', ['alocacao' => $alocacaosala]) }}'>Editar</a> |
                    <a class="li-link" href='{{ route('alocacaosalas.show', ['alocacao' => $alocacaosala]) }}'>Visualizar</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
