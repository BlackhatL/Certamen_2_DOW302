<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\AdministradorController;

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

Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::get('/alumno',[AlumnosController::class,'index'])->name('alumno.index');

Route::get('/profesor',[ProfesoresController::class,'index'])->name('profesor.index');

Route::get('/administrador',[AdministradorController::class,'index'])->name('administrador.index');
Route::get('/administrador/{estudiante}/editestudiante',[AdministradorController::class,'edit'])->name('administrador.editestudiante');