<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $fillable = [
        'nomePaciente',
        'emailPaciente',
        'cpfPaciente',
        'data_nascimentoPaciente',
        'dataRegistroPaciente',
        'enderecoPaciente',
        'telefonePaciente'
    ];

    public function usuario() {
        return $this -> morphOne(Usuario::class, 'tipo_usuario');
    }
}
