<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Tercero;
use App\Models\Lista;

class CosteoController extends Controller
{
    public function index()
    {
        // trae todos los pedidos con sus relaciones
        $pedidos = Pedido::with(['tercero'])->get();
        return view('costeos.index', compact('pedidos'));
    }

    public function costear(Pedido $pedido, $id)
    {
        //traer el pedido con sus relaciones
        $pedido = Pedido::with(['tercero', 'contacto', 'maquinas', 'articulosTemporales.fotosArticuloTemporal', 'articulos'])->find($id);

        //traer el tercero_id de ese pedido
        $tercero = $pedido->tercero;
        // dd($tercero);

        //traer las maquinas asociadas a este pedido
        $maquinas = $pedido->maquinas;
        //dd($maquinas);

        //traer las marcas 
        $marca = Lista::where('tipo', 'marca')->get();
        // dd($marca);

        $marcaTercero = $tercero->marcas;
        // dd($marcaTercero);

        // Obtén los terceros relacionados con las marcas usando los IDs de las marcas y si es proveedor nacional
        $proveedoresNacionales = Tercero::whereHas('marcas', function ($query) use ($marcaTercero) {
            $query->whereIn('id', $marcaTercero->pluck('id'));
        })->where('PaisCodigo', 'COL')->where('tipo', 'proveedor')->get();
        // dd($proveedoresNacionales);

        // Obtén los terceros relacionados con las marcas usando los IDs de las marcas y si es proveedor nacional
        $proveedoresInternacionales = Tercero::whereHas('marcas', function ($query) use ($marcaTercero) {
            $query->whereIn('id', $marcaTercero->pluck('id'));
        })->where('PaisCodigo', '!=', 'COL')->where('tipo', 'proveedor')->get();
        // dd($proveedoresInternacionales);


        // $terceros = Tercero::whereHas('marcas', function ($query) use ($marcaTercero) {
        //     $query->whereIn('id', $marcaTercero->pluck('id'));
        // })->get();
        // dd($terceros);



        // $proveedoresInternacionales = Tercero::where('PaisCodigo', '!=', 'COL')->where('tipo', 'proveedor')->get();

        return view('costeos.costear', compact('pedido', 'proveedoresNacionales', 'proveedoresInternacionales'));
    }
}
