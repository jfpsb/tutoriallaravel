@extends('master')

@if (session()->has('result_edit'))
    {{ session()->get('result_edit') }}
@endif

@section('title')
    <title>Editar dados de componente curricular</title>
@endsection

@section('content')
    <h2>Componenente Curricular</h2>

    <form action="{{ route('componentescurriculares.update', ['id' => $componente->id]) }}" method="post">

        @csrf
        @method('PUT')

        Nome:
        <input type="text" name="nome" value="{{ $componente->nome }}">

        <br>
        <br>
        <button type="submit">Atualizar</button>

        <br><br>

        <form action="{{ route('componentescurriculares.destroy', ['componente' => $componente]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </form>

    <br>

    <a href="/">Retornar para início</a>
    <br>
    <a href="/componentescurriculares">Retornar para tela de componentes curriculares</a>
@endsection
