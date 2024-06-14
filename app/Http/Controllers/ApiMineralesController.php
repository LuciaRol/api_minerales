<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mineral;


class ApiMineralesController extends Controller
{
    public function index()
    {
        // Obtener todos los minerales
        $minerales = Mineral::all();

        // Devolver los minerales como respuesta JSON
        return response()->json($minerales);
    }
}
