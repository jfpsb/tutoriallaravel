<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public readonly Aluno $aluno;

    public function __construct()
    {
        $this->aluno = new Aluno();
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
    public function destroy(string $id)
    {
        //
    }
}
