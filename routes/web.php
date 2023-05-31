<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmeController;
use App\Http\Controllers\funcionarioController;
use App\Http\Controllers\poltronaController;
use App\Http\Controllers\filmeIndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/adm', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    return view('site/index');
})->name('index');

Route::get('/login', function () {
    return view('site/login');
})->name('login');


// Filme

Route::get('/cadastro-filme', [filmeController::class, 'buscarCadastrarFilme']) ->name('buscar-cadastro-filme');
Route::post('/cadastro-filme', [filmeController::class, 'cadastrarFilme']) ->name('cadastro-filme');

Route::get('/gerenciar-filme',[filmeController::class,'mostrarGerenciadorFilme'])->name('gerenciar-filme');

Route::delete('/gerenciar-filme/{registroFilme}', [filmeController::class, 'ApagarFilme'])->name('apagar-filme');

Route::put('/gerenciar-filme/{registroFilme}',[filmeController::class, 'AlterarBancoFilme'])->name('alterar-banco-filme');

Route::get('/alterar-filme/{registroFilme}',[filmeController::class, 'MostrarRegistroFilme'])->name('mostrar-filme');

Route::get('/',[filmeIndexController::class,'exibirFilme'])->name('index');

// Funcionario
Route::get('/cadastro-funcionario',[funcionarioController::class,'buscarCadastrarFuncionario'])->name('buscar-cadastro-funcionario') ;
Route::post('/cadastro-funcionario',[funcionarioController::class, 'cadastrarFuncionario']) ->name('cadastro-funcionario');

Route::get('/gerenciar-funcionario',[funcionarioController::class,'mostrarGerenciadorFuncionario'])->name('gerenciar-funcionario');

Route::delete('/gerenciar-funcionario/{registroFuncionario}', [funcionarioController::class, 'ApagarFuncionario'])->name('apagar-funcionario');

Route::put('/gerenciar-funcionario/{registroFuncionario}',[funcionarioController::class, 'AlterarBancoFuncionario'])->name('alterar-banco-funcionario');

Route::get('/alterar-funcionario/{registroFuncionario}',[funcionarioController::class, 'MostrarRegistroFuncionario'])->name('mostrar-funcionario');

// Poltrona 
Route::get('/cadastro-poltrona',[poltronaController::class,'buscaCadastroPoltrona'])->name('buscar-cadastro-poltrona') ;
Route::post('/cadastro-poltrona',[poltronaController::class, 'cadastrarPoltrona']) ->name('cadastro-poltrona');

Route::get('/gerenciar-poltrona',[poltronaController::class,'mostrarGerenciadorPoltrona'])->name('gerenciar-poltrona');

Route::delete('/gerenciar-poltrona/{registroPoltrona}', [poltronaController::class, 'ApagarPoltrona'])->name('apagar-poltrona');

Route::put('/gerenciar-poltrona/{registroPoltrona}',[poltronaController::class, 'AlterarBancoPoltrona'])->name('alterar-banco-poltrona');

Route::get('/alterar-poltrona/{registroPoltrona}',[poltronaController::class, 'MostrarRegistroPoltrona'])->name('mostrar-poltrona');