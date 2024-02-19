<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pacientes;

class HistoricoMedico extends Model
{
    use HasFactory;

    protected $table = 'historico_medico';

    protected $fillable = [
        'id_paciente',
        'data_atendimento',
        'procedimento_realizado',
        'observacoes',
    ];

    public function paciente()
    {
        return $this->belongsTo(Pacientes::class, 'id_paciente');
    }
}
