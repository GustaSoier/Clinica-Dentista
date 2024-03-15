<?php

use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DentistaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorarioAtendimentoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrecosController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\sobreController;
use App\Models\Pacientes;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/servicos', [ServicosController::class, 'index'])->name('servicos');
Route::get('/horarioAtendimento', [HorarioAtendimentoController::class, 'index'])->name('horarioAtendimento');
Route::get('/precos', [PrecosController::class, 'index'])->name('precos');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');


// CONTATO
Route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
Route::post('/contato/enviarnew', [ContatoController::class, 'salvarEmail'])->name('contato.enviarnew');


// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('login');


// DASHBOARD
Route::middleware(['autenticacao:paciente'])->group(function (){

    Route::get('/dashboard/pacientes', [Pacientes::class, 'index'])->name('dashboard.pacientes');

});

Route::middleware(['autenticacao:admin'])->group(function (){

    Route::get('/dashboard/administrativo', [AdministrativoController::class, 'index'])->name('dashboard.administrativo');

    // Rotas para o CRUD do Paciente
    Route::get('/dashboard/administrativo/paciente', [AdministrativoController::class, 'indexPaciente'])->name('admin.pacientes.index'); //Lista todos os pacientes.
    Route::get('/dashboard/administrativo/paciente/create', [AdministrativoController::class, 'createPaciente'])->name('admin.pacientes.create'); //Exibe o formulário de cadastro do paciente.
    Route::post('/dashboard/administrativo/paciente', [AdministrativoController::class, 'cadPaciente'])->name('admin.pacientes.cad'); //Processa o formulário de cadastro do paciente.
    Route::get('/dashboard/administrativo/paciente/{id}/edit', [AdministrativoController::class, 'editPaciente'])->name('admin.pacientes.edit'); //Exibe o formulário de edição do paciente.
    Route::put('/dashboard/administrativo/paciente/{id}', [AdministrativoController::class, 'updatePaciente'])->name('admin.pacientes.update'); //Atualiza os dados do paciente.
    Route::put('/dashboard/administrativo/pacientes`{id}/desativar', [AdministrativoController::class, 'desativarPaciente'])->name('admin.Pacientes.desativar'); //Desativa o paciente.


    // Rotas para o CRUD de funcionario
    Route::get('/dashboard/administrativo/funcionarios', [AdministrativoController::class, 'indexFunc'])->name('admin.func.index'); //Lista todos os funcionarios.
    Route::get('/dashboard/administrativo/funcionarios/create', [AdministrativoController::class, 'createFuncionario'])->name('admin.func.create'); //exibe o formulario de cadastro de funcionario
    Route::post('/dashboard/administrativo/funcionarios', [AdministrativoController::class, 'cadFuncionario'])->name('admin.func.cad'); //processa o formulário de cadastro de funcionario.
    Route::get('/dashboard/administrativo/funcionarios/{id}/edit', [AdministrativoController::class, 'editFuncionario'])->name('admin.func.edit'); //Processa o formulario de edição de funcionario.
    Route::put('/dashboard/administrativo/funcionarios/{id}', [AdministrativoController::class, 'updateFuncionario'])->name('admin.func.update'); //Atualiza os dados do funcionario.
    Route::put('/dashboard/administrativo/funcionarios/{id}/desativar', [AdministrativoController::class, 'desativarFuncionario'])->name('admin.func.desativar'); //Desativar o funcionario.
});

Route::middleware(['autenticacao:dentista'])->group(function (){

    Route::get('/dashboard/dentista', [DentistaController::class, 'index'])->name('dashboard.dentista');

});

Route::get('/sair', function() {
    session()->flush();
    return redirect('/');
})->name('sair');
