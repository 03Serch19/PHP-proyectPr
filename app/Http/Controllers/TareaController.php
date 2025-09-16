<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index()
    {
        return Tarea::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'estado' => 'required|in:pendiente,en_progreso,completada',
            'fecha_limite' => 'required|date',
        ]);

        $tarea = Tarea::create($validated + $request->only('descripcion'));

        return response()->json($tarea, 201);
    }

    public function show(Tarea $tarea)
    {
        return $tarea;
    }

    public function update(Request $request, Tarea $tarea)
    {
        $validated = $request->validate([
            'titulo' => 'sometimes|required|string|max:255',
            'estado' => 'sometimes|required|in:pendiente,en_progreso,completada',
            'fecha_limite' => 'sometimes|required|date',
        ]);

        $tarea->update($validated + $request->only('descripcion'));

        return $tarea;
    }

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return response()->noContent();
    }
}
