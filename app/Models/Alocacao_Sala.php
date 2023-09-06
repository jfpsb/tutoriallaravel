<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alocacao_Sala extends Model
{
    use HasFactory;

    protected $table = "alocacao_salas";

    public $fillable = ['sala', 'componente_curricular', 'periodo_ano', 'periodo_semestre', 'horario_inicio', 'horario_fim', 'dias_semana'];

    public function descricao()
    {
        return $this->sala->descricao() . " - " . $this->componente_curricular->nome . " - " . $this->pediodo_ano . "." . $this->periodo_semestre;
    }
}
