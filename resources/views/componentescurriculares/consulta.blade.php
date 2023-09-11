@extends('master')

@section('title')
    <title>Consulta de componenentes curriculares</title>
@endsection

@section('content')
    <h2>Componentes Curriculares</h2>
    <a href="/componentescurriculares/cadastrar">Cadastrar novo componente curricular</a>

    <ul>
        @foreach ($componentes as $componente)
            <li>{{ $componente->nome }} | <a
                    href="{{ route('componentescurriculares.edit', ['componente' => $componente]) }}">Editar</a></li>
        @endforeach
    </ul>
@endsection
