<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Alocacao_Sala extends Model
{
    use HasFactory;

    public function __construct()
    {
    }

    protected $table = "alocacao_salas";

    public $fillable = ['sala', 'componente_curricular', 'periodo_ano', 'periodo_semestre', 'horario_inicio', 'horario_fim', 'dias_semana'];

    public function descricao()
    {
        return $this->sala->descricao() . " - " . $this->componenteCurricular->nome . " - " . $this->periodo_ano . "." . $this->periodo_semestre;
    }

    public function sala() : BelongsTo
    {
        return $this->belongsTo(Sala::class);
    }

    public function componenteCurricular() : BelongsTo
    {
        return $this->belongsTo(ComponenteCurricular::class);
    }
}
