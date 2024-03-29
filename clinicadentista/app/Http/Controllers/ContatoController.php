<?php

namespace App\Http\Controllers;

use App\Mail\ContatoEmail;
use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    public function index()
    {
        return view('site.contato');
    }

    public function salvarNoBanco(Request $request)
    {
        $dados = $request->all();

        $validarDados = Validator::make($dados, [
            'nomeContato'    => 'required|max:100',
            'emailContato'   => 'required|email|max:100',
            'foneContato'    => 'required|max:15',
            'assuntoContato' => 'required|max:100',
            'mensContato'    => 'required',
        ]);

        if ($validarDados->fails()) {
            return back()->withErrors($validarDados)->withInput();
        }
        else {

            $contato = Contato::create($validarDados->validated());

            // Por email
            Mail::to('dreamdevs@smpsistema.com.br')->send(new ContatoEmail($contato));

            return back()->with('success', 'Email registrado com sucesso');
        }

    }
}
