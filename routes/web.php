<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\ComponenteCurricularController;
use App\Http\Controllers\AlocacaoSalaController;
use App\Http\Controllers\MatriculaController;
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

//Alunos
Route::get('/alunos', [AlunoController::class, "index"])->name('alunos.index');
Route::get('/alunos/cadastrar', [AlunoController::class, "create"]);
Route::post('/alunos/store', [AlunoController::class, "store"]);
Route::get('/alunos/{aluno}', [AlunoController::class, "show"])->name('alunos.show');
Route::get('/alunos/{aluno}/editar', [AlunoController::class, "edit"])->name('alunos.edit');
Route::put('/alunos/{id}', [AlunoController::class, "update"])->name('alunos.update');
Route::delete('/alunos/{aluno}', [AlunoController::class, "destroy"])->name('alunos.destroy');

//Matriculas (dentro de alunos)
Route::get('/alunos/matriculas/{aluno}', [MatriculaController::class, "create"])->name('alunos.matriculas');

//Salas
Route::get('/salas', [SalaController::class, "index"]);
Route::get('/salas/cadastrar', [SalaController::class, "create"]);
Route::post('/salas/store', [SalaController::class, "store"]);
Route::get('/salas/{sala}', [SalaController::class, "show"])->name('salas.show');
Route::get('/salas/{sala}/editar', [SalaController::class, "edit"])->name('salas.edit');
Route::put('/salas/{id}', [SalaController::class, "update"])->name('salas.update');
Route::delete('/salas/{sala}', [SalaController::class, "destroy"])->name('salas.destroy');

//Componentes curriculares
Route::get('/componentescurriculares', [ComponenteCurricularController::class, "index"]);
Route::get('/componentescurriculares/cadastrar', [ComponenteCurricularController::class, "create"]);
Route::post('/componentescurriculares/store', [ComponenteCurricularController::class, "store"]);

//Alocação de salas
Route::get('/alocacaosalas', [AlocacaoSalaController::class, "index"]);
Route::get('/alocacaosalas/cadastrar', [AlocacaoSalaController::class, "create"]);
Route::post('/alocacaosalas/store', [AlocacaoSalaController::class, "store"]);
