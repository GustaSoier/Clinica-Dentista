<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){

        // Recuperando o ID do aluno da sessão
        $idPaciente = session('id');

        // Buscando o paciente pelo ID no banco de dados
        $paciente = Pacientes::find($idPaciente);

        // Verificar se o paciente foi encontrado
        if (!$paciente) {
            // Se o aluno não for encontrado, você pode redirecionar para uma página de erro ou fazer outra ação adequada
            abort(404, 'Paciente não encontrado');
        }

        // Passando o objeto $paciente para a view
        // dd($paciente)
        return view('dashboard.pacientes.index', compact('paciente'));
    }
}
