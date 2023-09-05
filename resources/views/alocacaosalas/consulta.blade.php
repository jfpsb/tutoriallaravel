@extends('master')

@section('title')
    <title>Consulta de alocação de salas</title>
@endsection

@section('content')
    <h2>Alocação de Salas</h2>
    <a href="/alocacaosalas/cadastrar">Cadastrar nova alocação de sala</a>
    <ul>
        @foreach ($alocacaosalas as $alocacaosala)
            <li>{{ $alocacaosala->sala->descricao }} - {{ $alocacaosala->componentecurricular->nome }} -
                {{ $alocacaosala->periodo_ano }}.{{ $alocacaosala->periodo_semestre }} | <a>Editar</a> | <a>Visualizar</a>
            </li>
        @endforeach
    </ul>
@endsection
