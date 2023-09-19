@extends('master')

@section('title')
    <title>Consulta de componenentes curriculares</title>
@endsection

@section('content')
    <div class="ul-container">
        <h2>Componentes Curriculares</h2>
        <a class="cadastrar-link" href="/componentescurriculares/cadastrar">Cadastrar novo componente curricular</a>

        <ul>
            @foreach ($componentes as $componente)
                <li>{{ $componente->nome }} | <a class="li-link"
                        href="{{ route('componentescurriculares.edit', ['componente' => $componente]) }}">Editar</a></li>
            @endforeach
        </ul>
    </div>
@endsection
