<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioAtendimentoController extends Controller
{
    public function index() {
        return view('site.horarioAtendimento');
    }
}
