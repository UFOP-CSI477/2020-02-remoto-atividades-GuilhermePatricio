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

Route::get('/indexAdmin','App\Http\Controllers\EquipamentoController@indexAdmin')->name('equipamentos.indexAdmin');

Route:: resource('/equipamentos', EquipamentoController::class);

Route:: resource('/relatorios', RegistroController::class);