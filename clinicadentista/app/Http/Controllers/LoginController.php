<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Funcionarios;
use App\Models\Pacientes;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\login;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    public function index() {
        return view('site.login');
    }

    public function autenticar(Request $request) {
        $regras = [
            'email'      => 'required|email',
            'password'   => 'required'
        ];

        $msg = [
            'email.required' => 'O campo de  email é obrigatório!',

            'email.email' => 'O e-mail informado não é válido!',

            'password.required' => 'O campo de senha é obrigatório!'
        ];

        $request -> validate($regras, $msg);

        $email = $request->get('email');
        $senha = $request->get('password');

        // echo "E-mail: $email | Senha: $senha";
        // echo "<br>";

        $usuario = Usuario::where('emailUsuario', $email)->first();

        if(!$usuario) {
            return back()->withErrors(['email' => 'O
            email informado não está cadastrado!']);
        }

        if($usuario -> senhaUsuario != $senha) {
            return back()->withErrors(['password' => 'Senha incorreta!']);
        }

        // dd($usuario);

        $tipoUsuario = $usuario -> tipo_usuario;
        // $tipo = null;

        session([
            'email' => $usuario -> emailUsuario,
        ]);
        // dd($tipoUsuario);

        if($tipoUsuario instanceof Pacientes) {
            // $tipo = 'aluno';

            // dd($tipoUsuario);
                // variável de sessão
                session([
                    'id'           =>  $tipoUsuario->idPaciente,
                    'nome'         =>  $tipoUsuario->nomePaciente,
                    'tipo_usuario' =>  'Paciente',
                ]);

                return redirect()->route('dashboard.paciente');


            }elseif($tipoUsuario instanceof Funcionarios){

                // dd($tipoUsuario);

                if($tipoUsuario->tipo_funcionario == 'admin'){
                    // $tipo = 'admin';

                    session([
                        'id'                =>  $tipoUsuario->idFuncionario,
                        'nome'              =>  $tipoUsuario->nomeFuncionario,
                        'tipoFuncionario'   =>  $tipoUsuario->tipo_funcionario,
                    ]);

                    return redirect()->route('dashboard.administrativo');

                }elseif($tipoUsuario->tipo_funcionario == 'dentista'){
                    // $tipo = 'dentista';

                    session([
                        'id'                =>  $tipoUsuario->id,
                        'nome'              =>  $tipoUsuario->nomeFuncionario,
                        'tipoFuncionario'   =>  $tipoUsuario->tipo_funcionario,
                    ]);

                    return redirect()->route('dashboard.instrutor');

                }

        }

        return back()->withErrors(['email' => 'Erro desconhecido de autenticação!']); // retorna a página de origem com uma mensagem de erro
    }

}
