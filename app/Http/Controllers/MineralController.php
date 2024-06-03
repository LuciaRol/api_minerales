<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mineral;

class MineralController extends Controller
{
    public function index()
    {
        // Obtiene todos los minerales
        $minerales = Mineral::all();

        // Pasa los minerales a la vista
        return view('mineral.index', compact('minerales'));
    }

    public function create()
    {
        return view('crear-mineral');
    }

    public function guardarmineral(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'formula' => 'required|string',
            'categoria' => 'required|string',
            'descripcion' => 'required|string',
            'sistema' => 'required|string',
        ]);

        // Crear un nuevo mineral con los datos proporcionados en la solicitud
        Mineral::create([
            'formula' => $request->formula,
            'categoria' => $request->categoria,
            'descripcion' => $request->descripcion,
            'sistema' => $request->sistema,
        ]);

        // Redirigir a alguna página de éxito o a donde prefieras
        return redirect()->route('mineral.index')->with('success', 'El mineral se ha creado correctamente.');
    }

    public function destroy(Mineral $mineral)
    {
        // Eliminar el mineral
        $mineral->delete();

        // Redirigir a alguna página de éxito o a donde prefieras
        return redirect()->route('mineral.index')->with('success', 'El mineral ha sido eliminado correctamente.');
    }

    public function update(Request $request, Mineral $mineral)
    {
        // Validar los datos del formulario de actualización
        $request->validate([
            'formula' => 'required|string',
            'categoria' => 'required|string',
            'descripcion' => 'required|string',
            'sistema' => 'required|string',
        ]);

        // Actualizar los datos del mineral
        $mineral->update([
            'formula' => $request->formula,
            'categoria' => $request->categoria,
            'descripcion' => $request->descripcion,
            'sistema' => $request->sistema,
        ]);

        // Redirigir a alguna página de éxito o a donde prefieras
        return redirect()->route('mineral.index')->with('success', 'El mineral se ha actualizado correctamente.');
    }
}
