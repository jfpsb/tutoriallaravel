@extends('master')

@section('title')
    <title>Visualizar dados de sala</title>
@endsection

@section('content')
    <label>Prédio:</label>
    <input type="text" value="{{ $sala->predio }}" readonly />
    <br>
    <label>Número:</label>
    <input type="text" value="{{ $sala->numero }}" readonly />
    <br>
    <label>Complemento:</label>
    <input type="text" value="{{ $sala->complemento }}" readonly />

    <br><br>

    <form action="{{ route('salas.destroy', ['sala' => $sala]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
@endsection
