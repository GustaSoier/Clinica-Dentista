<?php

namespace App\Http\Middleware;
use App\Models\Funcionario;
use App\Models\Usuario;
use App\Models\Aluno;
use App\Models\Funcionarios;
use App\Models\Pacientes;
use Closure;
use Illuminate\Http\Request;

class AutClinicaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $tipoUser)
    {

        $email = session('email');

        if($email) {
            $usuario = Usuario::where('emailUsuario', $email)->first();

            if(!$usuario) {
                return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
            }

            $tipoUsuario = $usuario -> tipo_usuario;

            if($tipoUsuario) {
                $tipo = null;

                if($tipoUsuario instanceof Pacientes) {
                    $tipo = 'paciente';
                }
                elseif($tipoUsuario instanceof Funcionarios) {
                    $tipo = $tipoUsuario -> tipoFuncionario;
                }
            }
        }

        if($tipo === $tipoUser) {
            return $next($request);
        }
        else{
            return back()->withErrors(['email' => 'Acesso não permitido para esse perfil!']);
        }



    }
}
