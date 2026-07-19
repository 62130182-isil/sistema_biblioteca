<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller {
    public function index(){ return response()->json(Autor::all()); }
    
    public function store(Request $request){
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'nacionalidad' => 'nullable|string|max:50',
        ]);
        $autor = Autor::create($validated);
        return response()->json(['mensaje' => 'Autor creado', 'data' => $autor], 201);
    }

    public function show(Autor $autor){ return response()->json($autor); }
    
    public function update(Request $request, Autor $autor){
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'nacionalidad' => 'nullable|string|max:50',
        ]);
        $autor->update($validated);
        return response()->json(['mensaje' => 'Autor actualizado', 'data' => $autor]);
    }

    public function destroy(Autor $autor){
        $autor->delete();
        return response()->json(['mensaje' => 'Autor eliminado']);
    }
}