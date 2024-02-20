<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorarioAtendimentoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrecosController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\sobreController;
use App\Models\Pacientes;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

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
Route::get('/sobre', [sobreController::class, 'index'])->name('sobre');
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


// // DASHBOARD
// Route::middleware(['autenticacao:paciente'])->group(function (){

//     Route::get('/dashboard/pacientes', [::class, 'index'])->name('dashboard.pacientes');

// });

// Route::middleware(['autenticacao:admin'])->group(function (){

//     Route::get('/dashboard/administrativo', [AdministrativoController::class, 'index'])->name('dashboard.administrativo');

// });

// Route::middleware(['autenticacao:instrutor'])->group(function (){

//     Route::get('/dashboard/instrutor', [InstrutorController::class, 'index'])->name('dashboard.instrutor');

// });

