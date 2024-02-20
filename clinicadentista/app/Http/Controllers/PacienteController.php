<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        return view('dashboard.pacientes.index');
    }
}
