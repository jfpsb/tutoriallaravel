<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = ['aluno_id', 'alocacao_sala_id'];

    public function aluno(): BelongsTo
    {
        return $this->belongsTo(Aluno::class);
    }

    public function alocacaoSala(): BelongsTo
    {
        return $this->belongsTo(Alocacao_Sala::class);
    }
}
