<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotizacion;
use App\Models\Pedido;
use App\Models\Empresa;
use App\Models\Tercero;



class CotizacionController extends Controller
{
    public function create()
    {
        // Muestra el formulario para crear una cotización
        return view('cotizaciones.create');
    }

    public function show(Cotizacion $cotizacion, $id)
    {
        // Recupera la cotización
        $cotizacion = Cotizacion::find($id);
        //Empresas
        $empresas = Empresa::all();
        // Recupera el pedido relacionado con la cotización
        $pedido = Pedido::find($cotizacion->pedido_id);

        // Verifica si se encontró el pedido
        if (!$pedido) {
            return redirect()->route('pedidos.index')->with('error', 'Pedido no encontrado.');
        }

        // Obtén los detalles del tercero relacionado con el pedido
        $tercero = $pedido->tercero;

        // Muestra la vista de detalles de la cotización, pasando los datos necesarios
        return view('cotizaciones.show', compact('cotizacion', 'pedido', 'tercero', 'empresas'));
    }
    

    public function store(Request $request)
    {
        // dd($request->all());
        // Valida los datos del formulario
        $data = $request->validate([
            'pedido_id' => 'nullable|exists:pedidos,id',
            'tercero_id' => 'nullable|exists:terceros,id',
            // Agrega aquí otros campos que deseas validar
        ]);
        // dd($data);

        // Crea una nueva cotización en la base de datos utilizando los datos validados
        $cotizacion = new Cotizacion([
            'estado' => 'pendiente', // Establece el estado inicial
            'pedido_id' => $data['pedido_id'], // Asigna el pedido validado
            'tercero_id' => $data['tercero_id'], // Asigna el tercero validado
            // Agrega aquí otros campos que deseas asignar a la cotización
        ]);

        $cotizacion->save();

        // Redirige a la vista de la cotización recién creada
        return redirect()->route('cotizaciones.show', ['id' => $cotizacion->id])->with('success', 'La cotización se ha creado correctamente.');
    }





    public function send(Cotizacion $cotizacion)
    {
        // Cambia el estado de la cotización a "enviada"
        $cotizacion->estado = 'enviada';
        $cotizacion->save();

        // Realiza acciones adicionales, como enviar el PDF por correo electrónico, si es necesario

        // Redirige a una vista de éxito o a donde desees después de enviar
        return redirect()->route('cotizaciones.show', $cotizacion->id);
    }

    public function approve(Cotizacion $cotizacion)
    {
        // Cambia el estado de la cotización a "aprobada"
        $cotizacion->estado = 'aprobada';
        $cotizacion->save();

        // Redirige a una vista de éxito o a donde desees después de aprobar
        return redirect()->route('cotizaciones.show', $cotizacion->id);
    }

    public function reject(Cotizacion $cotizacion)
    {
        // Cambia el estado de la cotización a "rechazada"
        $cotizacion->estado = 'rechazada';
        $cotizacion->save();

        // Redirige a una vista de éxito o a donde desees después de rechazar
        return redirect()->route('cotizaciones.show', $cotizacion->id);
    }

    public function pending(Cotizacion $cotizacion)
    {
        // Cambia el estado de la cotización a "pendiente para enviar"
        $cotizacion->estado = 'pendiente_enviar';
        $cotizacion->save();

        // Redirige a una vista de éxito o a donde desees después de dejar pendiente
        return redirect()->route('cotizaciones.show', $cotizacion->id);
    }
}
