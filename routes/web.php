<?php

use App\Http\Controllers\BanheiroController;
use App\Http\Controllers\AvaliacaoController;
use App\Models\Avaliacao;
use App\Orchid\Screens\BathroomScreen;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
})->name('index');

// Route::resource('avalicao', AvaliacaoController::class);

Route::get('/avaliacao', [AvaliacaoController::class, 'index'])->name('avaliacao.index');        // Listar todos os produtos
Route::get('/banheiro', [BanheiroController::class, 'index'])->name('banheiro.index');        // Listar todos os produtos
Route::post('avaliacao', [AvaliacaoController::class, 'store'])->name('avaliacao.store');         // Salvar um novo produto
Route::post('banheiro', [BanheiroController::class, 'store'])->name('banheiro.store');         // Salvar um novo produto
Route::get('banheiro/create', [BanheiroController::class, 'create'])->name('banheiro.create'); // Formulário de criação de produto
Route::get('avaliacao/create', [AvaliacaoController::class, 'create'])->name('avaliacao.create'); // Formulário de criação de produto
Route::get('avaliacao/{product}', [AvaliacaoController::class, 'show'])->name('avaliacao.show');   // Exibir um produto específico
// Route::get('avaliacao/update/{product}', [AvaliacaoController::class, 'edit'])->name('avaliacao.edit'); // Formulário de edição de produto
Route::put('avaliacao/update/{product}', [AvaliacaoController::class, 'update'])->name('avaliacao.update');  // Atualizar um produto específico
Route::delete('banheiro/{product}', [BanheiroController::class, 'destroy'])->name('banheiro.destroy'); // Excluir um produto específico
Route::delete('avaliacao/{product}', [AvaliacaoController::class, 'destroy'])->name('avaliacao.destroy'); // Excluir um produto específico

// Route::resource('banheiro', BanheiroController::class);



