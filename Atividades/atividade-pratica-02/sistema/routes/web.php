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

use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;   

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route:: resource('/equipamentos', EquipamentoController::class);

Route:: resource('/registros', RegistroController::class);

Route::get('/indexEquipamentoAdmin','App\Http\Controllers\EquipamentoController@indexAdmin')->name('equipamentos.indexAdmin');

Route::get('/indexRegistroAdmin','App\Http\Controllers\RegistroController@indexAdmin')->name('registros.indexAdmin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
