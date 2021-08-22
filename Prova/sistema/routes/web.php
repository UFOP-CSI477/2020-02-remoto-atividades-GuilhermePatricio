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


Route::get('/', function () {
    return view('principal');
})->name('principal');

Auth::routes();

Route:: resource('/vacinas', VacinaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
