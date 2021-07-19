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

use App\Models\Produto;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('Principal');
})->name('principal');

Route:: resource('/produtos', ProdutoController::class);

Route::get('/produtos/todos', function(){

    $produtos = Produto::all();
    return view('lista', ['dados'=>$produtos ]);

});

Route::get('/produtos/{id}', function($id){

    $produto = Produto::findOrFail($id);

    return view('Lista', ['dados'=>$produto]);

});