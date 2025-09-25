<?php

use App\Http\Controllers\ContaController;
use App\Http\Controllers\DepositoController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\SaqueController;
use App\Http\Controllers\TransferenciaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/conta/create', [
    ContaController::class, 
    'create'
])->name('conta.create');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get(
    '/painel',
    [PainelController::class, 'index']
)->name('painel.index')->middleware('auth');

Route::get(
    '/pagamentos/create',
    [PagamentoController::class, 'create']
)->name('pagamentos.create')->middleware('auth');

Route::get(
    '/saques/create',
    [SaqueController::class, 'create']
)->name('saques.create')->middleware('auth');


Route::get(
    '/transferencias/create',
    [TransferenciaController::class, 'create']
)->name('transferencia.create')->middleware('auth');


Route::get(
    '/depositos/create',
    [DepositoController::class, 'create']
)->name('despositos.create')->middleware('auth');
