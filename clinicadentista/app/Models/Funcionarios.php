<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';

    protected $fillable = [
        'nomeFuncionario',
        'dataNascFuncionario',
        'foneFuncionario',
        'enderecoFuncionario',
        'cidadeFuncionario',
        'estadoFuncionario',
        'cepFuncionario',
        'dataContrataçãoFuncionario',
        'cargoFuncionario',
        'salarioFuncionario',
        'tipoFuncionario',
        'statusFuncionario',
        'statusAluno'];

    public function usuario() {
        return $this -> morphOne(Usuario::class, 'tipo_usuario');
    }
}

