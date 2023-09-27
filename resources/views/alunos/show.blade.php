@extends('master')

@section('title')
    <title>Visualizar dados de aluno</title>
@endsection

@section('content')
    <h2>{{ $aluno->nome }}</h2>

    <label>CPF:</label>
    <input type="text" value="{{ $aluno->cpf }}" readonly />
    <br>
    <label>Email:</label>
    <input type="text" value="{{ $aluno->email }}" readonly />
    <br>
    <label>Data de nascimento:</label>
    <input type="date" value="{{ $aluno->data_nasc }}" readonly />

    <h3>Matrículas</h3>
    @if (count($aluno->matriculas) == 0)
        Não há matrículas
    @endif
    @foreach ($aluno->matriculas as $matricula)
        {{ $matricula->alocacaoSala->descricao() }} |
        <form style="display: inline" action="{{ route('matriculas.destroy', ['matricula' => $matricula]) }}" method="post">
            @csrf
            @method('DELETE')
            <button>Remover</button>
        </form><br />
    @endforeach

    <br><br>

    <form action="{{ route('alunos.destroy', ['aluno' => $aluno]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
@endsection
