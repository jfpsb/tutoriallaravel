<?php

namespace App\Http\Controllers;

use App\Models\Alocacao_Sala;
use App\Models\Aluno;
use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public readonly Aluno $aluno;
    public readonly Alocacao_Sala $alocacaoSala;
    public readonly Matricula $matricula;

    public function __construct()
    {
        $this->aluno = new Aluno();
        $this->alocacaoSala = new Alocacao_Sala();
        $this->matricula = new Matricula();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Aluno $aluno)
    {
        $alocaoes = $this->alocacaoSala->all();
        return view('alunos/matriculas/create', ['aluno' => $aluno, 'alocacoes' => $alocaoes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Aluno $aluno)
    {
        $created = $this->matricula->create([
            'aluno' => $aluno,
            'alocacao_sala' => $request->input(('alocacao_sala'))
        ]);

        if ($created) {
            return redirect()->back()->with("result_create", "Matrícula foi realizada com sucesso");
        } else {
            return redirect()->back()->with("result_create", "Erro ao realizar matrícula");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matricula $matricula)
    {
        $this->matricula->where('id', $matricula->id)->delete();
        return redirect()->back();
    }
}
