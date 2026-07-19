<?php
namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Estudiante;
use App\Models\Categoria;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard', [
            'totalLibros' => Libro::count(),
            'totalEstudiantes' => Estudiante::count(),
            'totalCategorias' => Categoria::count()
        ]);
    }
}
