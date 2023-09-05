@extends('master')

@section('content')
    <h2>Salas</h2>
    <a href="/salas/cadastrar">Cadastrar nova sala</a>

    <ul>
        @foreach ($salas as $sala)
            <li>{{ $sala->predio }} - {{$sala->numero}} - {{$sala->complemento}}| <a>Editar</a> | <a>Visualizar</a></li>
        @endforeach
    </ul>
@endsection
