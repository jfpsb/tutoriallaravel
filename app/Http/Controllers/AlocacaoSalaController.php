<?php

namespace App\Http\Controllers;

use App\Models\Alocacao_Sala;
use App\Models\ComponenteCurricular;
use App\Models\Sala;
use Illuminate\Http\Request;

class AlocacaoSalaController extends Controller
{
    public readonly Alocacao_Sala $alocacaosala;
    public readonly Sala $sala;
    public readonly ComponenteCurricular $componente;

    public function __construct()
    {
        $this->alocacaosala = new Alocacao_Sala();
        $this->sala = new Sala();
        $this->componente = new ComponenteCurricular();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alocacaosalas = $this->alocacaosala->all();
        return view('/alocacaosalas/consulta', ['alocacaosalas' => $alocacaosalas, 'salaModel' => $this->sala, 'componenteModel' => $this->componente]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $salas = $this->sala->all();
        $componentes = $this->componente->all();

        return view('alocacaosalas/create', ['salas' => $salas, 'componentes' => $componentes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->alocacaosala->create([
            'sala' => $request->input('sala'),
            'componente_curricular' => $request->input('componente_curricular'),
            'periodo_ano' => $request->input('periodo_ano'),
            'periodo_semestre' => $request->input('periodo_semestre'),
            'horario_inicio' => $request->input('horario_inicio'),
            'horario_fim' => $request->input('horario_fim'),
            'dias_semana' => $request->input('dias_semana')
        ]);

        if ($created) {
            return redirect()->back()->with("result_create", "Alocação de sala foi criada com sucesso");
        } else {
            return redirect()->back()->with("result_create", "Erro ao criar alocação de sala");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Alocacao_Sala $alocacao)
    {
        $salaModel = $this->sala->find($alocacao->sala);
        $componenteModel = $this->componente->find($alocacao->componente_curricular);
        return view('alocacaosalas.show', ['alocacao' => $alocacao, 'sala' => $salaModel, 'componente' => $componenteModel]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alocacao_Sala $alocacao)
    {
        $salas = $this->sala->all();
        $componentes = $this->componente->all();
        return view('alocacaosalas.edit', ['alocacao' => $alocacao, 'salas' => $salas, 'componentes' => $componentes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->alocacaosala->where('id', $id)->update($request->except('_token', '_method'));

        if ($updated) {
            $nome = $this->alocacaosala->find($id)->nome;
            return redirect()->back()->with("result_edit", "Alocação foi editada com sucesso");
        } else {
            return redirect()->back()->with("result_edit", "Erro ao editar alocação");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alocacao_Sala $alocacao)
    {
        $this->alocacaosala->where('id', $alocacao->id)->delete();
        return redirect()->route('alocacaosalas.index');
    }
}
