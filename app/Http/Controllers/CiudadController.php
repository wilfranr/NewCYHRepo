<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Ciudad;
use Illuminate\Support\Facades\DB;
use Debugbar;


class CiudadController extends Controller

{
        // Función para obtener ciudades por código de país
     public function getCiudadesByPais($paisCodigo) { 
        $ciudades = Ciudad::where('PaisCodigo', $paisCodigo)->get();
        return response()->json(['ciudades' => $ciudades]);
    }
    

}
