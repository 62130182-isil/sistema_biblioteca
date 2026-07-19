<?php
namespace App\Http\Controllers;
use App\Models\Libro;

class LibroController extends Controller
{
    public function index(){
        $libros = Libro::with('autor','categoria')->get();
        return view('libros.index', compact('libros'));
    }
}