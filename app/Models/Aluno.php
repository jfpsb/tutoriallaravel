<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = ['cpf', 'nome', 'email', 'data_nasc'];

    public function matriculas(): HasMany
    {
        return $this->hasMany(Matricula::class);
    }
}
