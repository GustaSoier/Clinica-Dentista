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
        'id',
        'dataAtendimento',
        'procedimentoRealizado',
        'observacoesHistoricoMedico',
    ];

    public function paciente()
    {
        return $this->belongsTo(Pacientes::class, 'id');
    }
}
