<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotizacion;
use App\Models\CotizacionArticulo;
use App\Models\Pedido;
use App\Models\Empresa;
use App\Models\Tercero;
use App\Models\Articulo;
use App\Models\Marca;





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
        // Recupera los articulos relacionados al pedido
        $articulos = $pedido->articulos;

        // Verifica si se encontró el pedido
        if (!$pedido) {
            return redirect()->route('pedidos.index')->with('error', 'Pedido no encontrado.');
        }

        // Obtén los detalles del tercero relacionado con el pedido
        $tercero = $pedido->tercero;

        // Muestra la vista de detalles de la cotización, pasando los datos necesarios
        return view('cotizaciones.show', compact('cotizacion', 'pedido', 'tercero', 'empresas', 'articulos'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        // Valida los datos del formulario
        $data = $request->validate([
            'pedido_id' => 'nullable|exists:pedidos,id',
            'tercero_id' => 'nullable|exists:terceros,id',
        ]);
        // dd($data);


        $proveedores = $request->input('proveedores', []); // Recupera los proveedores del formulario
        // dd($proveedores);


        //inicializar variable para guardar los proveedores
        $proveedoreSeleccionado = null;

        //recorrer proveedores
        foreach ($proveedores as $proveedor) {
            if (isset($proveedor['seleccionado']) && $proveedor['seleccionado'] == 'on') {
                $proveedoreSeleccionado = $proveedor;
                break;
            }
        }
        // dd($proveedoreSeleccionado);

        // Crea una nueva cotización en la base de datos utilizando los datos validados
        $cotizacion = new Cotizacion([
            'estado' => 'Pendiente', // Establece el estado inicial
            'pedido_id' => $data['pedido_id'], // Asigna el pedido validado
            'tercero_id' => $data['tercero_id'], // Asigna el tercero validado
        ]);

        $cotizacion->save();


        $articulosAll = Articulo::all();
        // dd($articulosAll);
        $marcas = Marca::all();

        $articulos = $request->input('articulos', []); // Recupera los articulos del formulario
        // dd($articulos);


        //recorrer articulos
        foreach ($articulos as $articulo) {
            // dd($articulo);
            // dd($key);
            // dd($articulo['id']);
            // dd($articulo['nombre']);
            // dd($articulo['cantidad']);
            // dd($articulo['unidad']);
            // dd($articulo['precio']);
            // dd($articulo['total']);
            // dd($articulo['observaciones']);
            $proveedoresNacionales = json_decode($articulo['proveedorNacional'], true);
            // dd($proveedoresNacionales);

            // Inicializa un array para almacenar los IDs de los proveedores
            $proveedorIds = [];

            // Recorre los proveedores directamente
            foreach ($proveedoresNacionales as $proveedor) {
                //convertir json en array
                // $proveedor = json_decode($proveedor, true);
                // dd($proveedor);
                // dd($proveedor['id']);
                // dd($proveedor['nombre']);
                // dd($proveedor['marca']);

                //$proveedorIds[] = $proveedor['id'];
                $proveedorIds[] = $proveedor;
                // dd($proveedorIds);

            }
            // dd($proveedorIds);




            //obtener la referencia desde la tabla articulos basado en el articulo
            $articuloCotizado = $articulosAll->where('id', $articulo['id'])->first();

            //obtener la marca desde la tabla marcas basado en el articulo
            $marca = $marcas->where('id', $proveedoreSeleccionado['marca'])->first();

            // Crea un nuevo CotizaciónArticulo en la base de datos utilizando los datos validados
            $articuloCotizacion = new CotizacionArticulo([
                'cotizacion_id' => $cotizacion->id, // Asigna la cotizacion validada
                'articulo_id' => $articulo['id'], // Asigna el articulo validado
                'proveedor_id' => $proveedoreSeleccionado['id'], // Asigna el proveedor validado
                'referencia' => $articuloCotizado['referencia'], // Asigna la referencia validada
                'definicion' => $articuloCotizado['definicion'], // Asigna la definicion validada
                'marca' => $marca['nombre'], // Asigna la marca validada
                'plazo_entrega' => $proveedoreSeleccionado['entrega'], // Asigna el plazo de entrega validado
                'precio_venta' => $proveedoreSeleccionado['precioVenta'], // Asigna el precio de venta validado
                'cantidad' => $proveedoreSeleccionado['cantidad'], // Asigna la cantidad validada
            ]);



            $articuloCotizacion->save();
        }






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
