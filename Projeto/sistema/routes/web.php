<?php

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

use App\Http\Controllers\LivroController;

Route::get('/', function () {
    return view('livros.pesquisa');
})->name('principal');

Route:: resource('/livros', LivroController::class);

Route::post('livro/{livro}', 'App\Http\Controllers\LivroController@verificaOpcao')->name('livros.verificaOpcao');
