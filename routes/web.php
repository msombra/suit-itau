<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GavController;

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

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.home');

// GAV
Route::get('/gav/listar_gav_bj', [GavController::class, 'showListBj'])->name('gav.list_bj');
Route::get('/gav/cadastrar_bj', [GavController::class, 'showFormBj'])->name('gav.form_bj');
Route::post('/gav/store_bj', [GavController::class, 'storeFormBj'])->name('gav.store_bj');
Route::get('/gav/bj_id={id}', [GavController::class, 'showIdBj'])->name('gav.show_id_bj');
