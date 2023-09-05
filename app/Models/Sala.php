<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    public $fillable = ['predio', 'numero', 'complemento'];

    public function descricao()
    {
        return $this->predio . " - " . $this->numero . " " . $this->complemento;
    }
}
