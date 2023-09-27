<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Matricula;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public readonly Aluno $aluno;
    public readonly Matricula $matricula;

    public function __construct()
    {
        $this->aluno = new Aluno();
        $this->matricula = new Matricula();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = $this->aluno->all();
        return view('/alunos/consulta', ['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("/alunos/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cpf' => 'required',
            'nome' => 'required'
        ]);

        $created = $this->aluno->create([
            'cpf' => $request->input('cpf'),
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'data_nasc' => $request->input('data_nasc'),
        ]);

        if ($created) {
            return redirect()->back()->with("result_create", "Aluno $created->nome foi criado com sucesso");
        } else {
            return redirect()->back()->with("result_create", "Erro ao criar aluno");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Aluno $aluno)
    {
        return view('alunos/show', ['aluno' => $aluno]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluno $aluno)
    {
        return view('alunos.edit', ['aluno' => $aluno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->aluno->where('id', $id)->update($request->except('_token', '_method'));

        if ($updated) {
            $nome = $this->aluno->find($id)->nome;
            return redirect()->back()->with("result_edit", "Aluno $nome foi editado com sucesso");
        } else {
            return redirect()->back()->with("result_edit", "Erro ao editar aluno");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
    {
        $this->aluno->where('id', $aluno->id)->delete();
        return redirect()->route('alunos.index');
    }
}
