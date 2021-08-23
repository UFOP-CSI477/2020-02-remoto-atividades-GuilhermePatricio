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
use App\Http\Controllers\VacinaController;  
use App\Http\Controllers\PessoaController;  
use App\Http\Controllers\UnidadeController;  
use App\Http\Controllers\RegistroController;  

Route::get('/', function () {
    return view('principal');
})->name('principal');

Auth::routes();

Route:: resource('/vacinas', VacinaController::class);
Route:: resource('/pessoas', PessoaController::class)->middleware('auth');;
Route:: resource('/unidades', UnidadeController::class)->middleware('auth');;
Route:: resource('/registros', RegistroController::class)->middleware('auth');;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
