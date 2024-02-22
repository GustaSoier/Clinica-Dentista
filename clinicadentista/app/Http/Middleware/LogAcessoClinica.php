<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use Illuminate\Http\Request;

class LogAcessoClinica
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);

        // return Response('Cheguei Aqui');

        // dd($request);

        $ip = $request -> server -> get('REMOTE_ADDR');
        $url = $request -> getRequestUri();
        // dd($ip);

        LogAcesso::create(['log' => "IP: $ip requisitou na rota: $url da aplicação"]);

        return $next($request);
    }
}
