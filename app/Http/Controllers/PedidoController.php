<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Tercero;
use App\Models\Pais;
use App\Models\Maquina;
use App\Models\Lista;
use App\Models\Articulo;
use App\Models\ArticuloTemporal;
use App\Models\FotoArticuloTemporal;
use App\Models\Marca;
use App\Models\Sistemas;
use App\Models\Contacto;
use App\Models\Referencia;

class PedidoController extends Controller
{

    public function index()
    {
        // consulta pedidos con sus relaciones
        $pedidos = Pedido::with(['tercero', 'contacto', 'maquinas'])->get();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        //obtener el ultimo pedido
        $ultimoPedido = Pedido::latest()->first();

        //obterner el ultimo pedido y sumarle 1
        $ultimoPedido = $ultimoPedido ? $ultimoPedido->id + 1 : 1;

        //obtener el usuario logueado
        $usuario = auth()->user();

        //obtener terceros
        $Terceros = Tercero::all();

        //obtener paises
        $paises = Pais::all();

        //obtener maquinas con sus marcas
        $maquinas = Maquina::all();
        // dd($maquinas);

        //obtener el modelo de las máquinas
        $modelo = Lista::where('tipo', 'Modelo Maquina')->get();

        //obtener marcas del tercero
        $marcas = Marca::all();

        //obtener sistemas desde listas
        $sistemas = Sistemas::all();

        //obtener articulos
        $articulos = Articulo::all();

        //obtener los tipos de maquinas
        $tipo_maquina = Lista::where('tipo', 'Tipo Maquina')->get();

        //retornar la vista con los datos
        return view('pedidos.create')->with(compact('ultimoPedido', 'usuario', 'Terceros', 'paises', 'maquinas', 'modelo', 'marcas', 'sistemas', 'articulos', 'tipo_maquina'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validar los datos del formulario	
        $data = $request->validate([
            'tercero_id' => 'nullable|exists:terceros,id',
            'user_id' => 'nullable|exists:users,id',
            'contacto_id' => 'nullable|exists:contactos,id',
            'comentario' => 'nullable|string',
            'estado' => 'nullable|string',
            'maquina_id' => 'nullable|exists:maquinas,id',
        ], $messages = [
            'tercero_id.required' => 'El campo tercero es obligatorio.',
        ]);

        $pedido = new Pedido();
        $pedido->tercero_id = $request->input('tercero_id');
        $pedido->user_id = auth()->user()->id;
        $pedido->contacto_id = $request->input('contactoTercero');
        $pedido->comentario = $request->input('comentarioPedido');
        $pedido->estado = $request->input('estado');
        $pedido->save();

        // Agregar cada máquina al pedido
        $maquinaId = $request->input('maquina_id');

        if ($maquinaId) {
            $pedido->maquinas()->attach($maquinaId);
        }

        // Agregar cada marca al pedido
        $maquina = Maquina::with('marcas')->find($maquinaId);

        $marca = $maquina->marcas->first();
        $pedido->marcas()->attach($marca->id);




        // Agregar cada artículo temporal al pedido
        $contadorArticulos = $request->input('contador');
        //si contador de articulos es mayor a 0
        if ($contadorArticulos > 0) {
            // dd($contadorArticulos);

            for ($i = 1; $i <= $contadorArticulos; $i++) {
                // Validar los datos de los articulos
                $dataArticulo = $request->validate([
                    "referencia{$i}" => ['nullable', 'string', 'max:255'],
                    "comentarioArticulo{$i}" => ['nullable', 'string', 'max:255'],
                    "sistema{$i}" => ['nullable', 'string', 'max:255'],
                    "cantidad{$i}" => ['nullable', 'integer', 'min:1'],
                ]);

                // dd($dataArticulo);
                //si viene articulo real
                if ($request->input("referencia{$i}") != null) {

                    // Guardar artículos en la tabla articulo_pedido
                    $articulo = Articulo::where('referencia', $request->input("referencia{$i}"))->first();
                    $pedido->articulos()->attach($articulo->id);

                    // Guardar la cantidad en la tabla pivot
                    $pedido->articulos()->updateExistingPivot($articulo->id, ['cantidad' => $request->input("cantidad{$i}")]);


                    //Guardar el comentario del artículo en la tabla pivot 
                    $pedido->articulos()->updateExistingPivot($articulo->id, ['comentario' => $request->input("comentarioArticulo{$i}")]);

                    // Si vienen sistemas
                    if ($request->input("sistema{$i}") != null) {
                        $sistema = Sistemas::where('id', $request->input("sistema{$i}"))->first();
                        // dd($sistema);

                        if ($sistema) {
                            // Asociar el sistema al artículo y al pedido
                            $articulo->sistemasPedidos()->attach($pedido, ['sistema_id' => $sistema->id]);
                        }
                    }
                }


                //si viene articulo temporal
                if ($request->input("referencia{$i}") == null) {
                    $articuloTemporal = new ArticuloTemporal();
                    $articuloTemporal->comentarios = $request->input("comentarioArticulo{$i}");
                    $articuloTemporal->cantidad = $request->input("cantidad{$i}");
                    $articuloTemporal->save();
                    // dd($articuloTemporal);

                    // Obtener las fotos del formulario
                    $fotos = $request->file("fotos{$i}");
                    // dd($fotos);

                    if ($fotos) {
                        foreach ($fotos as $foto) {
                            // Generar un nombre único para la foto
                            $nombreFoto = uniqid() . '.' . $foto->getClientOriginalExtension();

                            // Almacenar la foto en la carpeta de almacenamiento
                            $foto->storeAs('fotos-articulo-temporal', $nombreFoto, 'public');

                            // Crear una instancia de FotoArticuloTemporal
                            $fotoArticuloTemporal = new FotoArticuloTemporal();
                            $fotoArticuloTemporal->articuloTemporal()->associate($articuloTemporal);
                            $fotoArticuloTemporal->foto_path = $nombreFoto;
                            $fotoArticuloTemporal->save();
                        }
                    }
                    // dd($request->input("sistema{$i}"));

                    // Si vienen sistemas
                    if ($request->input("sistema{$i}") != null) {
                        // Asociar el sistema al artículo 
                        $articuloTemporal->sistemas()->attach($request->input("sistema{$i}"));
                    }

                    //asociar articulo temporal con pedido
                    $pedido->articulosTemporales()->attach($articuloTemporal->id);
                }
            }
        }

        //si viene referenciasArray
        if ($request->input('referenciasArray') != null) {
            $referenciasArray = $request->input('referenciasArray');
            // Verificar si $referenciasArray es un array
            if (is_array($referenciasArray)) {
                foreach ($referenciasArray as $referencia) {
                    $articuloTemporal = new ArticuloTemporal();
                    $articuloTemporal->referencia = $referencia['referencia'];
                    $articuloTemporal->cantidad = $referencia['cantidad'];
                    $articuloTemporal->save();

                    //Asociar articulo temporal con pedido
                    $pedido->articulosTemporales()->attach($articuloTemporal->id);
                }
            } else {
                // Manejar el caso en el que $referenciasArray no sea un array
                $referenciasArray = json_decode($referenciasArray, true);
                if (is_array($referenciasArray)) {
                    // dd($referenciasArray);
                    foreach ($referenciasArray as $referencia) {
                        //si no viene cantidad se asigna 1
                        if ($referencia['cantidad'] == null) {
                            $referencia['cantidad'] = 1;
                        }
                        //si no viene referencia no se asigna
                        if ($referencia['referencia'] != null) {
                        $articuloTemporal = new ArticuloTemporal();
                        $articuloTemporal->referencia = $referencia['referencia'];
                        $articuloTemporal->cantidad = $referencia['cantidad'];
                        $articuloTemporal->save();

                        //Asociar articulo temporal con pedido
                        $pedido->articulosTemporales()->attach($articuloTemporal->id);
                        }
                    }
                } else {
                    // Puedes mostrar un mensaje de error o realizar alguna otra acción
                    dd($referenciasArray);
                }
            }
        }

        return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente.');
    }

    public function show(Pedido $pedido, $id)
    {
        $pedido = Pedido::with([
            'tercero',
            'contacto',
            'maquinas',
            'articulosTemporales.fotosArticuloTemporal',
            'articulos.sistemas',
            'articulos',
            'marcas',
            'sistemasPedidos' // Asegúrate de cargar la relación aquí
        ])->find($id);
        // dd($pedido);
        // dd($pedido->articulos->first()->sistemasPedidos->first()->sistema);



        //obtener el pedido anterior
        $previous = Pedido::where('id', '<', $pedido->id)->orderBy('id', 'desc')->first();
        //obtener el pedido siguiente
        $next = Pedido::where('id', '<', $pedido->id)->orderBy('id', 'asc')->first();

        // Obtener todos los artículos asociados al pedido
        $articulos = $pedido->articulos;
        // dd($articulos);

        //obtener todas las referencias de los articulos
        $referencias = Referencia::all();
        // dd($referencias);

        $sistemas = Sistemas::all();
        // dd($sistemas);
        $definiciones = Lista::where('tipo', 'Definición')->pluck('nombre');

        // Obtener las definiciones con su respectiva foto de medida
        $definicionesConFoto = Lista::where('tipo', 'Definición')->select('nombre', 'fotoMedida')->get();

        $definicionesFotoMedida = [];
        foreach ($definicionesConFoto as $definicion) {
            $definicionesFotoMedida[$definicion->nombre] = $definicion->fotoMedida;
        }

        $medidas = Lista::where('tipo', 'Medida')->pluck('nombre', 'id');
        $unidadMedidas = Lista::where('tipo', 'Unidad medida')->pluck('nombre', 'id');
        $maquinas = Maquina::all();
        $marcas = Marca::all();

        return view('pedidos.show', compact('pedido', 'sistemas', 'maquinas', 'medidas', 'unidadMedidas', 'articulos', 'definiciones', 'definicionesFotoMedida', 'referencias', 'marcas', 'previous', 'next'));
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);

        //obtener el pedido anterior
        $previous = Pedido::where('id', '<', $pedido->id)->orderBy('id', 'desc')->first();
        //obtener el pedido siguiente
        $next = Pedido::where('id', '<', $pedido->id)->orderBy('id', 'asc')->first();

        //obtener artículos temporales
        $articulosTemporales = $pedido->articulosTemporales;
        //foto de articulo temporal
        $fotosArticuloTemporal = FotoArticuloTemporal::all();
        // dd($fotosArticuloTemporal);


        return view('pedidos.edit', compact('pedido', 'articulosTemporales', 'fotosArticuloTemporal', 'previous', 'next'));
    }



    public function update(Request $request, $id)
    {
        // dd($request->all());

        // Buscar el pedido existente
        $pedido = Pedido::findOrFail($id);
        // dd($pedido);
        //cambiar el estado del pedido
        $pedido->estado = 'Costeo';
        $pedido->save();

        //eliminar relaciones entre pedido y articulos
        $pedido->articulos()->detach();
        //eliminar relación entre pedido y articulos temporales
        $pedido->articulosTemporales()->detach();
        //eliminar relación entre pedido, artículo y sistema
        $pedido->sistemasPedidos()->detach();

        //actualizar los articulos del pedido
        $contadorArticulos = $request->input('contador');
        // dd($contadorArticulos);


        for ($i = 1; $i <= $contadorArticulos; $i++) {
            // Validar los datos de los articulos
            $dataArticulo = $request->validate([
                "referencia{$i}" => ['nullable', 'string', 'max:255'],
                "comentarioArticulo{$i}" => ['nullable', 'string', 'max:255'],
                "sistema{$i}" => ['nullable', 'string', 'max:255'],
                "cantidad{$i}" => ['nullable', 'integer', 'min:1'],
            ]);
            // dd($dataArticulo); 

            $articulo = Articulo::where('referencia', $request->input("referencia{$i}"))->first();
            // dd($articulo->id);

            $pedido->articulos()->attach($articulo->id);

            // Guardar la cantidad en la tabla pivot
            $pedido->articulos()->updateExistingPivot($articulo->id, ['cantidad' => $request->input("cantidad{$i}")]);
            // Guardar el comentario en la tabla pivot
            $pedido->articulos()->updateExistingPivot($articulo->id, ['comentario' => $request->input("comentarioArticulo{$i}")]);
            // Guardar el sistema en la tabla pivot
            $sistema = Sistemas::where('id', $request->input("sistema{$i}"))->first();
            dd($sistema);

            $articulo->sistemasPedidos()->attach($pedido, ['sistema_id' => $sistema->id]);
        }


        return redirect()->route('pedidos.index', $id)->with('success', 'El pedido ha sido actualizado.');
    }


    public function costear($id)
    {
        $pedido = Pedido::findOrFail($id);
        $articulosTemporales = $pedido->articulosTemporales;
        //traer todos los terceros donde PaisCodigo = COL y tipo = proveedor
        $proveedoresNacionales = Tercero::where('pais_codigo', 'COL')->where('tipo', 'proveedor')->get();

        //traer los articulos de la tabla

        return view('pedidos.costear', compact('pedido', 'articulosTemporales', 'proveedoresNacionales'));
    }

    public function cambiarEstado(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        // Obtén el nuevo estado desde el formulario o cualquier otra fuente de entrada
        $nuevoEstado = $request->input('estado');

        // Actualiza el estado del pedido
        $pedido->estado = $nuevoEstado;

        $pedido->save();

        // Redirige a la página de detalles del pedido o a cualquier otra página relevante
        return redirect()->route('pedidos.index', $pedido->id)->with('success', 'Estado del pedido actualizado exitosamente.');
    }

    public function detachArticulo($pedidoId, $articuloId)
    {
        $pedido = Pedido::findOrFail($pedidoId);
        $pedido->articulos()->detach($articuloId);

        return redirect()->back()->with('message', 'La relación entre el pedido y el artículo ha sido eliminada.');
    }

    public function crearMaquina(Request $request)
    {
        // validar los datos del formulario
        $validatedData = $request->validate([
            'tipo_maquina' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'serie' => 'required',
            'arreglo' => 'required',
            'fotoMaquina' => 'nullable|image|max:2048',
            'fotoId' => 'nullable|image|max:2048',
        ]);

        $maquina = new Maquina();
        $maquina->tipo = $validatedData['tipo_maquina'];
        $maquina->modelo = $validatedData['modelo'];
        $maquina->serie = $validatedData['serie'];
        $maquina->arreglo = $validatedData['arreglo'];

        //buscar la marca en la tabla marcas y extraer el nombre de la marca
        $marca = Marca::find($request->input('marca'));
        $maquina->marca = $marca->nombre;


        // Procesar la foto de la máquina, si se proporcionó
        if ($request->hasFile('fotoMaquina')) {
            $foto = $request->file('fotoMaquina');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $filepath = $foto->storeAs('public/maquinas', $filename);
            $maquina->foto = $filename;
        }

        // Procesar la foto del ID, si se proporcionó
        if ($request->hasFile('fotoId')) {
            $fotoId = $request->file('fotoId');
            $filename = time() . '_' . $fotoId->getClientOriginalName();
            $filepath = $fotoId->storeAs('public/maquinas', $filename);
            $maquina->fotoId = $filename;
        }

        $maquina->save();

        // Obtener la marca seleccionada
        $marca = Marca::find($request->input('marca'));

        // Asociar la marca a la máquina a través de la relación belongsToMany
        $maquina->marcas()->attach($marca);

        //obtener el id del tercero
        $terceroId = $request->input('tercero_id_maquina');

        //relacionar la maquina con el tercero
        $maquina->terceros()->attach($terceroId);

        return redirect()->route('pedidos.create')->with('success', 'La máquina ha sido creada exitosamente.');
    }

    public function crearContacto(Request $requets)
    {
        // validar los datos del formulario
        $validatedData = $requets->validate([
            'nombre' => 'required',
            'telefono' => 'nullable',
            'email' => 'nullable',
            'cargo' => 'nullable',
            'tercero_id_contacto' => 'required',
        ]);

        $contacto = new Contacto();
        $contacto->nombre = strtolower($validatedData['nombre']);
        $contacto->telefono = $validatedData['telefono'];
        $contacto->email = $validatedData['email'];
        $contacto->cargo = $validatedData['cargo'];
        $contacto->save();

        //asociar contacto con tercero
        $tercero = Tercero::find($validatedData['tercero_id_contacto']);
        $tercero->contactos()->attach($contacto);

        return redirect()->route('pedidos.create')->with('success', 'El contacto ha sido creado exitosamente.');
    }

    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        if ($pedido) {
            $pedido->delete();
            return redirect()->route('pedidos.index')->with('success', 'Tercero eliminado correctamente');
        } else {
            return redirect()->route('pedidos.index')->with('error', 'No se pudo eliminar el tercero');
        }
    }
}
