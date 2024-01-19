<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DentistasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicosController;
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


Route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
