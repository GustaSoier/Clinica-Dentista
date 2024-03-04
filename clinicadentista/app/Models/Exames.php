<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pacientes;

class Exames extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tipo',
        'data_realizacao',
        'resultado',
    ];

    public function paciente()
    {
        return $this->belongsTo(Pacientes::class, 'id');
    }
}
