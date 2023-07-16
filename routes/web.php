<?php

use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [RecipesController::class, 'index'])->name('home');
Route::get('/ricetta{id}', [RecipesController::class, 'show'])->name('dettaglio');
Route::get('/ricetta/{difficulty}', [RecipesController::class, 'filtered'])->name('filtro');
