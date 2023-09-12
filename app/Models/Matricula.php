<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    private Aluno $alunoModel;
    private Alocacao_Sala $alocacaoModel;
    protected $fillable = ['aluno', 'alocacao_sala'];

    public function __construct()
    {
        $this->alunoModel = new Aluno();
        $this->alocacaoModel = new Alocacao_Sala();
    }

    public function getAluno(): Aluno
    {
        return $this->alunoModel->find($this->aluno);
    }

    public function getAlocacaoSala(): Alocacao_Sala
    {
        return $this->alocacaoModel->find($this->alocacao_sala);
    }
}
