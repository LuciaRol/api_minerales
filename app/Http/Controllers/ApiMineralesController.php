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
}
