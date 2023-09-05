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
