<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DentistasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorarioAtendimentoController;
use App\Http\Controllers\PrecosController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\sobreController;
use App\Models\Contato;
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


Route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
