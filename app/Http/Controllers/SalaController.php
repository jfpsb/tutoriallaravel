<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    public readonly Sala $sala;

    public function __construct()
    {
        $this->sala = new Sala();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salas = $this->sala->all();
        return view('/salas/consulta', ['salas' => $salas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salas/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->sala->create([
            'predio' => $request->input('predio'),
            'numero' => $request->input('numero'),
            'complemento' => $request->input('complemento'),
        ]);

        if ($created) {
            return redirect()->back()->with("result_create", "Sala $created->predio - $created->numero - $created->complemento foi criado com sucesso");
        } else {
            return redirect()->back()->with("result_create", "Erro ao criar sala");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Sala $sala)
    {
        return view('salas.show', ['sala' => $sala]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sala $sala)
    {
        return view('salas.edit', ['sala' => $sala]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->sala->where('id', $id)->update($request->except('_token', '_method'));

        if ($updated) {
            $descricao = $this->sala->find($id)->descricao();
            return redirect()->back()->with("result_edit", "Sala $descricao foi editada com sucesso");
        } else {
            return redirect()->back()->with("result_edit", "Erro ao editar sala");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sala $sala)
    {
        $this->sala->where('id', $sala->id)->delete();
        return redirect()->route('salas.index');
    }
}
