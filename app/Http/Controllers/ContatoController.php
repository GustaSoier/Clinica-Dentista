<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        return view('site.contato');
    }

    public function salvarNoBanco(Request $request) {
        $dados = $request ->json()->all();

        $validarDados = Validator::make($dados, [
            'nomeContato' => 'required|max:100',
            'emailContato' => 'required|email|max:100',
            'foneContato' => 'required|max:15','assuntContato' => 'required|max:100',
            'mensContato' => 'required',
        ]) -> validate()
    }
}
