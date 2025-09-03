<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BancaController;
use App\Http\Controllers\ConhecimentoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\OrgaoController;
use App\Http\Controllers\ProvaConcursoController;
use App\Http\Controllers\ProvaConcursoQuestaoController;
use App\Http\Controllers\ProvaTextoController;
use App\Http\Controllers\TipoProvaController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('bancas', BancaController::class)->middleware(['auth']);
Route::resource('conhecimentos', ConhecimentoController::class)->middleware(['auth']);
Route::resource('materiais', MateriaController::class)->middleware(['auth']);
Route::resource('orgaos', OrgaoController::class)->middleware(['auth']);
Route::resource('provas_concursos', ProvaConcursoController::class)->middleware(['auth']);
Route::resource('prova_concurso_questaos', ProvaConcursoQuestaoController::class)->middleware(['auth']);
Route::resource('prova_textos', ProvaTextoController::class)->middleware(['auth']);
Route::resource('tipo_provas', TipoProvaController::class)->middleware(['auth']);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
