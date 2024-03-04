<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pacientes;
use App\Models\Funcionario;

    class Consultas extends Model
{
    use HasFactory;

    protected $table = 'consultas';

    protected $fillable = [
        'id',
        'id',
        'dataConsulta',
        'observacoesConsulta',
    ];

    // Se você deseja definir relacionamentos, pode fazê-lo aqui
    public function paciente()
    {
        return $this->belongsTo(Pacientes::class, 'idPaciente');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionarios::class, 'idFuncionario');
    }
}

