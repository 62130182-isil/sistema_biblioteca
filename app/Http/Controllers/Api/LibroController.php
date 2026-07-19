<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        return response()->json(Libro::with('autor', 'categoria')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:200',
            'editorial' => 'nullable|string|max:100',
            'paginas' => 'nullable|integer',
            'autor_id' => 'required|exists:autores,id',
            'categoria_id' => 'required|exists:categorias,id'
        ]);

        $libro = Libro::create($validated);
        return response()->json([
            'mensaje' => 'Libro creado', 
            'data' => $libro->load('autor', 'categoria')
        ], 201);
    }

    public function show(Libro $libro)
    {
        return response()->json($libro->load('autor', 'categoria'));
    }

    public function update(Request $request, Libro $libro)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:200',
            'editorial' => 'nullable|string|max:100',
            'paginas' => 'nullable|integer',
            'autor_id' => 'sometimes|exists:autores,id',
            'categoria_id' => 'sometimes|exists:categorias,id'
        ]);

        $libro->update($validated);
        return response()->json([
            'mensaje' => 'Libro actualizado', 
            'data' => $libro->load('autor', 'categoria')
        ]);
    }

    public function destroy(Libro $libro)
    {
        $libro->delete();
        return response()->json(['mensaje' => 'Libro eliminado']);
    }
}