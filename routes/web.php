<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
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

Route::get('/',[RouteController::class,'index'])->name('page.index');
Route::get('dashboard',[RouteController::class,'dashboard'])->name('page.dashboard');
Route::get('formations',[RouteController::class,'formations'])->name('page.formations');
Route::get('etudiants',[RouteController::class,'etudiants'])->name('page.etudiants');
Route::get('promotions',[RouteController::class,'promotions'])->name('page.promotions');
Route::get('fincances',[RouteController::class,'finances'])->name('page.finances');
