<?php

namespace App\Http\Controllers;

use App\Models\ComponenteCurricular;
use Illuminate\Http\Request;

class ComponenteCurricularController extends Controller
{
    public readonly ComponenteCurricular $componente;

    public function __construct()
    {
        $this->componente = new ComponenteCurricular();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $componentes = $this->componente->all();
        return view('/componentescurriculares/consulta', ['componentes' => $componentes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('componentescurriculares/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->componente->create([
            'nome' => $request->input('nome')
        ]);

        if ($created) {
            return redirect()->back()->with("result_create", "Componente Curricular $created->nome foi criado com sucesso");
        } else {
            return redirect()->back()->with("result_create", "Erro ao criar componente curricular");
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
