<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Models\Pedido;
use App\Models\Trm;


class HomeController extends Controller
{
    // auntenticar el controlador
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Contar los pedidos nuevos
        $pedidosNuevos = Pedido::where('estado', 'Nuevo')->count();
        $trm = Trm::all()->first();
        return view('home.index', compact('pedidosNuevos', 'trm'));
    }

    //metodo para modificar $trm
    public function updateTrm(Request $request)
    {
        // Validar que el campo no esté vacío
        $request->validate([
            'trm' => 'required'
        ]);

        // Buscar el registro
        $trm = Trm::first();

        if ($trm) {
            // Actualizar el registro
            $trm->trm = $request->trm;
            $trm->save();

            // Obtener el valor de trm
            $trmValue = $trm->trm;

            // Guardar el valor de trm en la sesión
            session(['trm' => $trmValue]);

            // Redireccionar después de
            return redirect()->back()->with('message', 'TRM actualizada correctamente');

        }else{
            // En caso de no encontrar el registro
            return redirect()->back()->with('message', 'No se encontró el registro de TRM');
        }
    }
}
