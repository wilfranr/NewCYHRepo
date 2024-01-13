<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lista;
use App\Models\Maquina;
use App\Models\Medida;
use App\Models\Pedido;
use App\Models\RelacionSuplencia;
use App\Models\JuegoArticulo;
use App\Models\referencias;

class ArticuloController extends Controller
{
    // Método para mostrar la lista de artículos
    public function index()
    {
        $articulos = Articulo::all();

        return view('articulos.index', compact('articulos'));
    }

    // Método para mostrar el formulario de creación de artículo
    public function create()
    {
        // Recopilar los datos necesarios para el formulario de creación de artículo
        $articulos = Articulo::all();
        $sistemas = Lista::where('tipo', 'sistema')->pluck('nombre', 'id');
        $definiciones = Lista::where('tipo', 'Definicion Repuesto')->pluck('nombre');
        $referencias = referencias::all();

        // Obtener las definiciones con su respectiva foto de medida
        $definicionesConFoto = Lista::where('tipo', 'Definición')->select('nombre', 'foto')->get();

        // Crear un arreglo asociativo con el nombre de la definición como clave y la foto como valor
        $definicionesFotoMedida = [];
        foreach ($definicionesConFoto as $definicion) {
            $definicionesFotoMedida[$definicion->nombre] = $definicion->foto;
        }

        // Obtener las medidas del artículo
        $medidas = Lista::where('tipo', 'Tipo Medida')->pluck('nombre', 'id');
        $unidadMedidas = Lista::where('tipo', 'Unidad medida')->pluck('nombre', 'id');
        $maquinas = Lista::where('tipo', 'marca')->pluck('nombre', 'id');

        // Mostrar la vista de creación de artículo
        return view('articulos.create', compact('sistemas', 'maquinas', 'medidas', 'unidadMedidas', 'articulos', 'definiciones', 'definicionesFotoMedida', 'referencias'));
    }

    // Método para guardar el artículo en la base de datos
    public function store(Request $request, Articulo $articulo)
    {
        // dd($request->all());
        // Mensajes de validación
        $messages = [
            'marca.required' => 'El campo marca es obligatorio.',
            'select-definicion.required' => 'El campo definición es obligatorio.',
            'referencia.required' => 'El campo referencia es obligatorio.',
            'descripcion_especifica.required' => 'El campo descripción específica es obligatorio.',
            'comentarios.required' => 'El campo comentarios es obligatorio.',
            'peso.required' => 'El campo peso es obligatorio.',
            'foto-descriptiva.required' => 'El campo foto descriptiva es obligatorio.',
            'foto-descriptiva.image' => 'El campo foto descriptiva debe ser una imagen.',
            'foto-descriptiva.max' => 'El campo foto descriptiva debe ser menor a 2MB.',
        ];

        // Validar los datos del formulario
        $validatedData = $request->validate([
            'marca' => 'nullable|string',
            'select-definicion' => 'nullable|string',
            'referencia' => 'nullable|string',
            'descripcion_especifica' => 'nullable|string',
            'comentarios' => 'nullable|string',
            'peso' => 'nullable|string',
            'foto' => 'nullable|image|max:2048', // Agregamos validación para imágenes
        ]);

        // Crear el artículo
        $articulo = new Articulo();

        // Actualizar los campos del artículo
        $articulo->marca = $validatedData['marca'];
        $articulo->definicion = $validatedData['select-definicion'];
        $articulo->referencia = $validatedData['referencia'];
        $articulo->descripcionEspecifica = $validatedData['descripcion_especifica'];
        $articulo->comentarios = $validatedData['comentarios'];
        $articulo->peso = $validatedData['peso'];

        // Procesar la foto descriptiva del artículo, si se proporcionó
        if ($request->hasFile('foto-descriptiva')) { //si se sube una foto
            $fotoDescriptiva = $request->file('foto-descriptiva'); //obtener la foto
            $filename = time() . '_' . $fotoDescriptiva->getClientOriginalName(); //obtener el nombre de la foto
            $filepath = $fotoDescriptiva->storeAs('public/articulos', $filename); //guardar la foto en la carpeta articulos
            $articulo->fotoDescriptiva = $filename; //guardar el nombre de la foto en la base de datos
        } else { //si no se sube una foto
            $articulo->fotoDescriptiva = 'no-imagen.jpg'; //guardar una foto por defecto
        }

        // Asociar las máquinas con el artículo
        $maquinas = Maquina::all();
        foreach ($maquinas as $maquina) {
            $maquina->articulos()->attach($articulo->id, ['fabricante' => $request->fabricante, 'tipo_maquina' => $request->tipo_maquina]);
        }

        // Guardar el artículo
        $articulo->save();
        // Verificar si el artículo está asociado a un pedido
        if ($request->has('pedido_id')) {
            $pedido = Pedido::find($request->pedido_id);

            // Verificar si se encontró el pedido
            if ($pedido) {
                // Asociar el artículo al pedido mediante la relación muchos a muchos
                $pedido->articulos()->attach($articulo->id, ['cantidad' => $request->cantidad]);
            }
        }

        // Obtener los datos del formulario de medidas
        $dataMedida = $request->only(['contadorMedidas', 'tipoMedida', 'valorMedida', 'unidadMedida', 'idMedida']);

        // Verificar si el índice 'tipoMedida' existe
        if (isset($dataMedida['tipoMedida'])) {
            // Obtener el contador de medidas
            $contadorMedidas = $dataMedida['contadorMedidas'];

            // Recorrer el bucle para crear y asociar las medidas al artículo
            for ($i = 0; $i < $contadorMedidas; $i++) {
                $medida = new Medida();

                // Verificar si el índice 'tipoMedida' en la posición $i existe
                if (isset($dataMedida['tipoMedida'][$i])) {
                    $medida->nombre = $dataMedida['tipoMedida'][$i];
                }

                // Verificar si el índice 'valorMedida' en la posición $i existe
                if (isset($dataMedida['valorMedida'][$i])) {
                    $medida->valor = $dataMedida['valorMedida'][$i];
                }

                // Verificar si el índice 'unidadMedida' en la posición $i existe
                if (isset($dataMedida['unidadMedida'][$i])) {
                    $medida->unidad = $dataMedida['unidadMedida'][$i];
                }

                // Verificar si el índice 'idMedida' en la posición $i existe
                if (isset($dataMedida['idMedida'][$i])) {
                    $medida->idMedida = $dataMedida['idMedida'][$i];
                }


                $medida->save();

                // Asociar la medida al artículo en la tabla pivot
                $articulo->medidas()->attach($medida->id);
            }
        }

        // Crear nuevas referencias
        $referencias = $request->input('nuevaReferencia');
        $cantidadReferencias = count($referencias);
        for ($i = 0; $i < $cantidadReferencias; $i++) {
            $referencia = new referencias();
            $referencia->referencia = $referencias[$i];
            $referencia->articulo_id = $articulo->id;
            $referencia->save();
        }

        // Crear relaciones de suplencia si se seleccionaron artículos para suplir
        if ($request->has('cambio')) {
            foreach ($request->input('cambio') as $suplidorId) {
                // Asegurarse de que no se esté intentando establecer una relación con el mismo artículo
                if ($suplidorId != $articulo->id) {
                    // Crear una nueva relación de suplencia
                    RelacionSuplencia::create([
                        'articulo_id' => $articulo->id, // ID del artículo principal
                        'suplido_por_id' => $suplidorId, // ID del artículo que lo suple
                    ]);
                }
            }
        }

        //crear las relaciones de juego si se seleccionaron artículos para juego
        if ($request->has('juego')) {
            foreach ($request->input('juego') as $juegoId) {
                // Asegurarse de que no se esté intentando establecer una relación con el mismo artículo
                if ($juegoId != $articulo->id) {
                    // Crear una nueva relación de juego
                    JuegoArticulo::create([
                        'articulo_id' => $articulo->id, // ID del artículo principal
                        'juego_por_id' => $juegoId, // ID del artículo que lo suple
                    ]);
                }
            }
        }

        //redireccionar recargando la pagina
        return redirect()->route('articulos.index')->with('success', 'Artículo creado correctamente.');
    }

    public function show(Articulo $articulo, $id)
    {
        // Buscar un artículo en la base de datos usando el modelo Articulo y el ID proporcionado   
        $articulo = Articulo::find($id);
        // realiza una consulta a la base de datos para obtener las definiciones comunes
        $definiciones = Lista::where('tipo', 'Descripcion comun')->pluck('nombre', 'fotoMedida', 'id');
        // Devolver una vista llamada 'articulos.show' y pasar las variables $articulo y $definiciones a la vista
        return view('articulos.show', compact('articulo', 'definiciones'));
    }


    public function edit($id)
    {
        $articulos = Articulo::all();
        $referencias = referencias::all();

        // Obtener el artículo que se va a editar
        $articulo = Articulo::findOrFail($id);

        //obtener las referencias relacionadas al articulo
        $referenciasAsociadas = referencias::where('articulo_id', $articulo->id)->get();
        // dd($referencias);

        // Obtener los artículos existentes en la relación de suplencia
        $articulosEnSuplencia = RelacionSuplencia::where('articulo_id', $articulo->id)
            ->pluck('suplido_por_id')
            ->all();

        //Obtener los artículos existentes en la relación de juego
        $articulosEnJuego = JuegoArticulo::where('articulo_id', $articulo->id)
            ->pluck('juego_por_id')
            ->all();

        // Obtener el artículo anterior
        $previous = Articulo::where('id', '<', $articulo->id)->orderBy('id', 'desc')->first();

        // Obtener el artículo siguiente
        $next = Articulo::where('id', '>', $articulo->id)->orderBy('id', 'asc')->first();

        // Obtener las medidas del artículo
        $medidas = $articulo->medidas;

        //obtener las definiciones de la lista 
        $definiciones = Lista::where('tipo', 'Definición')->get();
        $tipoMedida = Lista::where('tipo', 'Medida')->pluck('nombre', 'id');
        $unidadMedidas = Lista::where('tipo', 'Unidad medida')->pluck('nombre', 'id');
        $unidades = Lista::where('tipo', 'Unidad medida')->get();

        // Obtener las definiciones con su respectiva foto de medida
        $definicionesConFoto = Lista::where('tipo', 'Definición')->select('nombre', 'foto')->get();

        // Crear un arreglo asociativo con el nombre de la definición como clave y la foto como valor
        $definicionesFotoMedida = [];
        foreach ($definicionesConFoto as $definicion) {
            $definicionesFotoMedida[$definicion->nombre] = $definicion->foto;
        }

        //obtener la marca
        $marca = Lista::where('tipo', 'marca')->get();

        // Mostrar la vista de edición con los datos del artículo y sus medidas
        return view('articulos.edit', compact('articulo', 'medidas', 'definiciones', 'marca', 'unidadMedidas', 'tipoMedida', 'previous', 'next', 'articulos', 'definicionesFotoMedida', 'articulosEnSuplencia', 'unidades', 'articulosEnJuego', 'referencias', 'referenciasAsociadas'));
    }

    public function update(Request $request, Articulo $articulo, $id)
    {
        // dd($request->all());
        // Obtener el artículo que se va a actualizar
        $articulo = Articulo::findOrFail($id);

        //mensajes de validación
        $messages = [
            'marca.required' => 'El campo de marca es obligatorio.',
            'definicion.required' => 'El campo de definición es obligatorio.',
            'referencia.required' => 'El campo de referencia es obligatorio.',
            // Agregar más mensajes personalizados según sea necesario
        ];
        $validatedData = $request->validate([
            'marca' => 'required|string',
            'definicion' => 'required|string',
            'referencia' => 'required|string',
            //'descripcion_especifica' => 'nullable|string',
            'comentarios' => 'nullable|string',
            'peso' => 'nullable|numeric|min:0.01',
            'foto' => 'nullable|image|max:2048',
        ], $messages);
        // dd($validatedData);

        // Actualizar los campos del artículo
        $articulo->marca = $validatedData['marca'];
        $articulo->definicion = $validatedData['definicion'];
        $articulo->referencia = $validatedData['referencia'];
        //$articulo->descripcionEspecifica = $validatedData['descripcion_especifica'];
        $articulo->comentarios = $validatedData['comentarios'];
        $articulo->peso = $validatedData['peso'];

        // Procesar la foto descriptiva del artículo, si se proporcionó
        if ($request->hasFile('foto-descriptiva')) {
            $fotoDescriptiva = $request->file('foto-descriptiva');
            $filename = time() . '_' . $fotoDescriptiva->getClientOriginalName();
            $filepath = $fotoDescriptiva->storeAs('public/articulos', $filename);
            $articulo->fotoDescriptiva = $filename;
        }

        // Guardar los cambios
        $articulo->save();



        // Si vienen datos de suplencia
        if ($request->has('cambio')) {
            // Eliminar todas las relaciones de suplencia antiguas
            $articulo->suplencias()->delete();

            // Crear las nuevas relaciones de suplencia
            foreach ($request->input('cambio') as $suplidorId) {
                // Asegurarse de que no se esté intentando establecer una relación con el mismo artículo
                if ($suplidorId != $articulo->id) {
                    // Crear una nueva relación de suplencia
                    RelacionSuplencia::create([
                        'articulo_id' => $articulo->id, // ID del artículo principal
                        'suplido_por_id' => $suplidorId, // ID del artículo que lo suple
                    ]);
                }
            }
        }
        //si viene nuevaReferencia
        if ($request->has('nuevaReferencia')) {
            //crear las nuevas referencias
            $referencias = $request->input('nuevaReferencia');
            $cantidadReferencias = count($referencias);
            for ($i = 0; $i < $cantidadReferencias; $i++) {
                $referencia = new referencias();
                $referencia->referencia = $referencias[$i];
                $referencia->articulo_id = $articulo->id;
                $referencia->save();
            }
        }

        // Si vienen datos de juego
        if ($request->has('juego')) {
            // Eliminar todas las relaciones de juego antiguas
            $articulo->juegos()->delete();

            // Crear las nuevas relaciones de juego
            foreach ($request->input('juego') as $juegoId) {
                // Asegurarse de que no se esté intentando establecer una relación con el mismo artículo
                if ($juegoId != $articulo->id) {
                    // Crear una nueva relación de juego
                    JuegoArticulo::create([
                        'articulo_id' => $articulo->id, // ID del artículo principal
                        'juego_por_id' => $juegoId, // ID del artículo que lo suple
                    ]);
                }
            }
        }
        // dd($request->all());

        //si vienen datos de medidas
        if ($request->has('contadorMedidas')) {
            // Actualizar las medidas del artículo
            $dataMedida = $request->validate([
                'contadorMedidas' => ['required', 'integer', 'min:1'],
                'fotoMedida' => ['nullable', 'string', 'max:255'],
                'tipoMedida' => ['nullable', 'string', 'max:255'],
                'valorMedida' => ['nullable', 'string', 'max:255'],
                'unidadMedida' => ['nullable', 'string', 'max:255'],
                'idMedida' => ['nullable', 'string', 'max:255'],
            ]);

            // Eliminar todas las medidas antiguas del artículo
            $articulo->medidas()->delete();

            // Crear las nuevas medidas del artículo
            $medidas = [];
            for ($i = 1; $i <= $dataMedida['contadorMedidas']; $i++) {
                $medida = new Medida();
                $medida->nombre = $dataMedida['tipoMedida'][$i - 1] ?? null;
                $medida->valor = $dataMedida['valorMedida'][$i - 1] ?? null;
                $medida->unidad = $dataMedida['unidadMedida'][$i - 1] ?? null;
                $medida->idMedida = $dataMedida['idMedida'][$i - 1] ?? null;

                // Procesar la foto de la medida, si se proporcionó
                if ($request->hasFile('fotoMedida' . $i)) {
                    $fotoMedida = $request->file('fotoMedida' . $i);
                    $filename = time() . '_' . $fotoMedida->getClientOriginalName();
                    $filepath = $fotoMedida->storeAs('public/medidas', $filename);
                    $medida->foto = $filename;
                } else {
                    $medida->foto = 'no-imagen.jpg';
                }
                // Guardar la medida
                $medida->save();
                $medidas[] = $medida;
            }
            // Asociar las medidas al artículo
            $articulo->medidas()->saveMany($medidas);
        }


        // Redireccionar al usuario
        return redirect()->route('articulos.index')->with('success', 'Artículo actualizado correctamente.');
    }

    public function definicion(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'tipo' => 'required',
            'nombre' => 'required',
            'definicion' => 'required',
            'fotoLista' => 'image|nullable',
            'fotoMedida' => 'image|nullable'
        ]);
        // Crear la lista
        $lista = new Lista;
        $lista->tipo = $request->tipo;
        $lista->nombre = $request->nombre;
        $lista->definicion = $request->definicion;

        // Procesar la foto de la lista, si se proporcionó
        if ($request->hasFile('fotoLista')) {
            $foto = $request->file('fotoLista');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $filepath = $foto->storeAs('public/listas', $filename);
            $lista->foto = $filename;
        } else {
            $lista->foto = 'no-imagen.jpg';
        }

        // Procesar la foto de la medida si se proporcionó
        if ($request->hasFile('fotoMedida')) {
            $foto = $request->file('fotoMedida');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $filepath = $foto->storeAs('public/listas', $filename);
            $lista->fotoMedida = $filename;
        } else {
            $lista->fotoMedida = 'no-imagen.jpg';
        }
        // Guardar la lista
        $lista->save();
        // Redireccionar al usuario
        return redirect()->route('articulos.create')->with('success', 'La lista ha sido creada exitosamente.');
    }

    public function destroy($id)
    {
        // Buscar el artículo que se va a eliminar
        $articulo = Articulo::find($id);
        if ($articulo) {
            $articulo->delete();
            return redirect()->route('articulos.index')->with('success', 'Artículo eliminado correctamente');
        } else {
            return redirect()->route('articulos.index')->with('error', 'No se pudo eliminar el artículo');
        }
        //eliminar las relaciones existentes
        $articulo->medidas()->detach();
        $articulo->pedidos()->detach();
        $articulo->fotos()->delete();
        $articulo->imagenes()->delete();
        $articulo->suplencias()->delete();
        $articulo->juegos()->delete();
    }
}
