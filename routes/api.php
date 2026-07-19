<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AutorController;
use App\Http\Controllers\Api\LibroController;
use App\Http\Controllers\Api\PrestamoController;
use App\Http\Controllers\Api\EstudianteController;
use App\Http\Controllers\Api\CategoriaController;

Route::apiResource('autores', AutorController::class);
Route::apiResource('libros', LibroController::class);
Route::apiResource('prestamos', PrestamoController::class);
Route::apiResource('estudiantes', EstudianteController::class );
Route::apiResource('categorias', CategoriaController::class);