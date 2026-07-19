<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller {
    public function index(){ return response()->json(Prestamo::with('libro')->get()); }
    
    public function store(Request $request){
        $validated = $request->validate([
            'libro_id' => 'required|exists:libros,id',
            'nombre_estudiante' => 'required|string|max:100',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'required|date|after:fecha_prestamo',
        ]);
        $prestamo = Prestamo::create($validated);
        return response()->json(['mensaje' => 'Prestamo creado', 'data' => $prestamo], 201);
    }

    public function show(Prestamo $prestamo){ return response()->json($prestamo->load('libro')); }
    
    public function update(Request $request, Prestamo $prestamo){
        $validated = $request->validate([
            'libro_id' => 'required|exists:libros,id',
            'nombre_estudiante' => 'required|string|max:100',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'required|date|after:fecha_prestamo',
        ]);
        $prestamo->update($validated);
        return response()->json(['mensaje' => 'Prestamo actualizado', 'data' => $prestamo]);
    }

    public function destroy(Prestamo $prestamo){
        $prestamo->delete();
        return response()->json(['mensaje' => 'Prestamo eliminado']);
    }
}