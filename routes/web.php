<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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


Route::get('/delete-produto/{id}', [ProdutoController::class, 'delete_produto']);
Route::get('/update-produto/{id}', [ProdutoController::class, 'update_produto']);
Route::post('/update/tratamento', [ProdutoController::class, 'update_produto_tratamento']);
Route::get('/produto', [ProdutoController::class, 'liste_produto']);
Route::get('/ajouter', [ProdutoController::class, 'ajouter_produto']);
Route::post('/ajouter/tratamento', [ProdutoController::class, 'ajouter_produto_tratamento']);
