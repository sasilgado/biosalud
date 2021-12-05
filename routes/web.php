<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CitaController;
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

Route::get('/',HomeController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get("/Servicios",[HomeController::class,"servicios"]);
Route::get("/Contacto",[HomeController::class,"contacto"]);
Route::get("/Resultados",[HomeController::class,"resultados"]);
Route::get("/Citas",[HomeController::class,"citas"]);
Route::get('/Quimica', [HomeController::class,"quimica"]);


