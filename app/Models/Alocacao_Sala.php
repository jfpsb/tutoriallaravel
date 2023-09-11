<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alocacao_Sala extends Model
{
    use HasFactory;

    private readonly Sala $salas;
    private readonly ComponenteCurricular $componentes;

    public function __construct()
    {
        $this->salas = new Sala();
        $this->componentes = new ComponenteCurricular();
    }

    protected $table = "alocacao_salas";

    public $fillable = ['sala', 'componente_curricular', 'periodo_ano', 'periodo_semestre', 'horario_inicio', 'horario_fim', 'dias_semana'];

    public function descricao()
    {
        $sala = $this->salas->find($this->sala);
        $componente = $this->componentes->find($this->componente_curricular);
        return $sala->descricao() . " - " . $componente->nome . " - " . $this->periodo_ano . "." . $this->periodo_semestre;
    }
}
