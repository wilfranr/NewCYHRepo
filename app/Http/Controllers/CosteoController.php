<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Tercero;
use App\Models\Sistemas;

class CosteoController extends Controller
{
    public function index()
    {
        // trae todos los pedidos con sus relaciones
        $pedidos = Pedido::with(['tercero'])->get();
        return view('costeos.index', compact('pedidos'));
    }

    // Obtener proveedores según criterios
    public function obtenerProveedores()
    {
        $proveedoresNacionales = Tercero::where('tipo', 'Proveedor')
            ->where('PaisCodigo', 'COL')
            ->get();

        $proveedoresInternacionales = Tercero::where('tipo', 'Proveedor')
            ->where('PaisCodigo', '!=', 'COL')
            ->get();

        return [
            'proveedoresNacionales' => $proveedoresNacionales,
            'proveedoresInternacionales' => $proveedoresInternacionales,
        ];
    }


    // Función para obtener proveedores por marcas y sistemas
    public function obtenerProveedoresPorMarcasYSistemas($marcas, $sistemas)
    {
        $proveedoresNacionales = collect();
        $proveedoresInternacionales = collect();

        // Obtener proveedores que manejen las marcas y sistemas especificados
        foreach ($marcas as $marca) {
            foreach ($marca->terceros as $tercero) {
                if ($tercero->esProveedor() && $this->proveedorManejaSistemas($tercero, $sistemas)) {
                    if ($tercero->PaisCodigo === 'COL') {
                        $proveedoresNacionales->push($tercero);
                    } else {
                        $proveedoresInternacionales->push($tercero);
                    }
                }
            }
        }

        return [
            'proveedoresNacionales' => $proveedoresNacionales,
            'proveedoresInternacionales' => $proveedoresInternacionales
        ];
    }

    // Función auxiliar para verificar si un proveedor maneja los sistemas especificados
    private function proveedorManejaSistemas($proveedor, $sistemas)
    {
        foreach ($sistemas as $sistema) {
            if (!$proveedor->sistemas->contains($sistema)) {
                return false;
            }
        }
        return true;
    }


    public function costear(Pedido $pedido, $id)
    {
        //traer el pedido con sus relaciones
        $pedido = Pedido::with([
            'tercero',
            'contacto',
            'maquinas',
            'articulosTemporales.fotosArticuloTemporal',
            'articulos.sistemas',
            'articulos',
            'marcas'
        ])->find($id);

        //obtener el pedido anterior
        $previous = Pedido::where('id', '<', $pedido->id)->orderBy('id', 'desc')->first();

        //obtener el pedido siguiente
        $next = Pedido::where('id', '>', $pedido->id)->orderBy('id', 'asc')->first();

        //traer el tercero_id de ese pedido
        $tercero = $pedido->tercero;
        // dd($tercero);

        //traer las maquinas asociadas a este pedido
        $maquinas = $pedido->maquinas;
        //dd($maquinas);

        //traer la marca de la maquina
        $marca = $maquinas->first()->marca;
        // dd($marca);

        //traer las marcas asociadas a este pedido
        $marcas = $pedido->marcas;
        // dd($marcas);

        


        return view('costeos.costear', compact('pedido', 'maquinas', 'marcas', 'previous', 'next', 'marca'));
    }
}
