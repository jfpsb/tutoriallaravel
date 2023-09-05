<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\ComponenteCurricularController;
use App\Http\Controllers\AlocacaoSalaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', [HomeController::class, "index"]);
Route::get('/alunos', [AlunoController::class, "index"]);
Route::get('/alunos/cadastrar', [AlunoController::class, "create"]);
Route::post('/alunos/store', [AlunoController::class, "store"]);
Route::get('/salas', [SalaController::class, "index"]);
Route::get('/salas/cadastrar', [SalaController::class, "create"]);
Route::get('/componentescurriculares', [ComponenteCurricularController::class, "index"]);
Route::get('/alocacaosala', [AlocacaoSalaController::class, "index"]);
