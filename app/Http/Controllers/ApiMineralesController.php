<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mineral;


class ApiMineralesController extends Controller
{
    public function index(Request $request)
    {
        // Obtener todos los minerales
        $query = Mineral::query();

        // Filtrar por nombre si el parámetro "nombre" está presente en la solicitud
        if ($request->has('nombre')) {
            $query->where('nombre', $request->nombre);
        }


        // Ejecutar la consulta
        $minerales = $query->get();

        // Devolver los minerales como respuesta JSON
        return response()->json($minerales);
    }

/*    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre' => 'required|string|unique:minerales,nombre',
            'descripcion' => 'nullable|string',
            // Agrega aquí las validaciones adicionales según tus necesidades
        ]);

        // Crear un nuevo mineral
        $mineral = Mineral::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            // Añade aquí más campos si es necesario
        ]);

        // Devolver el mineral creado como respuesta JSON
        return response()->json($mineral, 201);
    }

    public function destroy($id)
{
    // Buscar el mineral por su ID
    $mineral = Mineral::find($id);

    // Verificar si el mineral existe
    if (!$mineral) {
        return response()->json(['message' => 'Mineral no encontrado'], 404);
    }

    // Eliminar el mineral
    $mineral->delete();

    // Devolver una respuesta indicando que el mineral fue eliminado
    return response()->json(['message' => 'Mineral eliminado correctamente']);
}*/
}
