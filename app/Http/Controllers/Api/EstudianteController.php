<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        return response()->json(Estudiante::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required|unique:estudiantes',
            'email' => 'required|email|unique:estudiantes'
        ]);
        return response()->json(Estudiante::create($request->all()), 201);
    }

    public function show(Estudiante $estudiante)
    {
        return response()->json($estudiante);
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required|unique:estudiantes,codigo,'.$estudiante->id,
            'email' => 'required|email|unique:estudiantes,email,'.$estudiante->id
        ]);
        $estudiante->update($request->all());
        return response()->json($estudiante);
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return response()->json(['mensaje' => 'Eliminado']);
    }
}