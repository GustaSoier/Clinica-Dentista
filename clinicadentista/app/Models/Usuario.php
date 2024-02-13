<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nomeUsuario',
        'emailUsuario',
        'senhaUsuario',
        'tipo_usuario_id',
        'tipo_usuario_type',
        'emailVerificado',
        'tokenLembrete',];

    public function tipo_usuario() {
        return $this -> morphTo('tipo_usuario', 'tipo_usuario_type', 'tipo_usuario_id');
    }

}
