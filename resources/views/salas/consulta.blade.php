@extends('master')

@section('content')
    <h2>Salas</h2>
    <a href="/salas/cadastrar">Cadastrar nova sala</a>

    <ul>
        @foreach ($salas as $sala)
            <li>{{ $sala->predio }} - {{ $sala->numero }} - {{ $sala->complemento }}| <a
                    href="{{ route('salas.edit', ['sala' => $sala]) }}">Editar</a> | <a
                    href="{{ route('salas.show', ['sala' => $sala]) }}">Visualizar</a></li>
        @endforeach
    </ul>
@endsection
