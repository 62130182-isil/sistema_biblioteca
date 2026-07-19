<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Api\LibroController;
use App\Http\Controllers\Api\EstudianteController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\AutorController;
use App\Http\Controllers\Api\PrestamoController;

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/libros', [LibroController::class, 'index']);
Route::get('/estudiantes', [EstudianteController::class, 'index']);
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/autores', [AutorController::class, 'index']);
Route::get('/prestamos', [PrestamoController::class, 'index']);
