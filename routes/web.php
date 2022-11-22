<?php

use App\Http\Controllers\dashboard\ConsumableController;
use App\Http\Controllers\dashboard\CounterController;
use App\Http\Controllers\inventario\TonerregistroController;
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
})->name('home');

//Diferentes controladores con diferentes clases
//Route::resource('dashboard/consumables',ConsumableController::class);
//Route::resource('dashboard/counter', CounterController::Class);

//Mismo COntrolador con diferentes metodos
Route::get('dashboard', [ConsumableController::class, 'index'])->name('index');
Route::get('dashboard/contadores', [ConsumableController::class, 'contadores'])->name('contadores');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/inventario', [TonerregistroController::class, 'index'])->name('tonerreg');
