<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Funcionario;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'idFuncionario',
        'dataHoraAgenda',
        'statusAgenda',
        'observacoesAgenda',
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'idFuncionario');
    }
}
