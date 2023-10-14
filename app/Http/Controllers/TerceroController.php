<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Tercero;
use App\Models\Maquina;
use App\Models\Contacto;
use App\Models\Marca;
use App\Models\Sistemas;
use App\Models\Lista;
use App\Models\Pedido;

class TerceroController extends Controller
{
    // Función para obtener todos los terceros
    public function index()
    {
        $terceros = Tercero::all();
        $paises = DB::table('pais')->get();
        $ciudades = DB::table('ciudad')->get();
        $maquinas = Maquina::allWithConcatenatedData();
        $marcas = Marca::all();
        $sistemas = Sistemas::all();

        return view('terceros.index', compact('terceros', 'paises', 'ciudades', 'maquinas', 'marcas', 'sistemas'));
    }

    // Función para obtener ciudades por código de país
    public function search(Request $request)
    {
        $query = $request->get('query');

        $terceros = Tercero::where('nombre', 'LIKE', '%' . $query . '%')
            ->orWhere('numero_documento', 'LIKE', '%' . $query . '%')
            ->orWhere('email', 'LIKE', '%' . $query . '%')
            ->orWhere('telefono', 'LIKE', '%' . $query . '%')
            ->paginate(10);

        return response()->json($terceros);
    }

    // crear un nuevo tercero
    public function create()
    {
        $paises = DB::table('pais')->get();
        $ciudades = DB::table('ciudad')->get();
        $maquinas = Maquina::allWithConcatenatedData();
        $marcas = Marca::all();
        $sistemas = Sistemas::all();

        return view('terceros.create')->with('paises', $paises)->with('ciudad', $ciudades)->with('maquinas', $maquinas)->with('marcas', $marcas)->with('sistemas', $sistemas);
    }
    // Método de controlador para almacenar datos en la base de datos en respuesta a una solicitud POST.
    public function store(Request $request)
    {
        // 1. Obtener los datos enviados por el formulario
        $data = $request->validate([
            'tipo' => ['nullable', 'in:Cliente,Proveedor'],
            'nombre' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'telefono' => ['nullable', 'string', 'max:20'],
            'direccion' => ['nullable', 'string', 'max:255'],
            'numero_documento' => ['nullable', 'string', 'max:20'],
            'pais_id' => ['nullable', 'string', 'max:3'],
            // 'departamento_id' => ['nullable', 'integer'],
            'ciudad' => ['nullable', 'integer'],
            // 'codigo_postal' => ['nullable', 'string', 'max:20'],
            //'observaciones' => ['nullable', 'string', 'max:255'],
            'tipo_documento' => ['required', 'in:CC,NIT,CE'],
            'dv' => ['nullable', 'string', 'max:1'],
            //'forma_pago' => ['nullable', 'string', 'max:255'],
            'email_facturacion' => ['nullable', 'email', 'max:255'],
            'rut' => ['nullable', 'file', 'mimes:pdf', 'max:1024'],
            'certificacion_bancaria' => ['nullable', 'file', 'mimes:pdf', 'max:1024'],
            'sitioWeb' => ['nullable', 'string', 'max:255'],
            'contadorContactos' => ['integer'],
        ]);

        // 2. Crear una instancia del modelo Tercero y asignar los datos validados
        $tercero = new Tercero();
        $tercero->tipo = $data['tipo'];
        $tercero->nombre = $data['nombre'];
        $tercero->email = $data['email'];
        $tercero->telefono = $data['telefono'];
        $tercero->direccion = $data['direccion'];
        $tercero->numero_documento = $data['numero_documento'];
        if (isset($data['pais_id'])) {
            $tercero->PaisCodigo = $data['pais_id'];
        }
        if (isset($data['ciudad'])) {
            $tercero->CiudadID = $data['ciudad'];
        }
        $tercero->tipo_documento = $data['tipo_documento'];
        $tercero->dv = $data['dv'];
        $tercero->email_factura_electronica = $data['email_facturacion'];

        // Guardar el archivo de certificación bancaria (si se ha proporcionado uno)
        if ($request->hasFile('certificacion_bancaria')) {
            $certificacion = $request->file('certificacion_bancaria')->storePublicly('certificaciones', 'public');
            $tercero->certificacion_bancaria = $certificacion;
        }
        //guardar archivo rut
        if ($request->hasFile('rut')) {
            $rut = $request->file('rut')->storePublicly('rut', 'public');
            $tercero->rut = $rut;
        }
        //guardar archivo camara de comercio
        if ($request->hasFile('camara_comercio')) {
            $camara_comercio = $request->file('camara_comercio')->storePublicly('camara_comercio', 'public');
            $tercero->camara_comercio = $camara_comercio;
        }
        //guardar archivo cedula representante legal
        if ($request->hasFile('cedula_representante_legal')) {
            $cedula_representante_legal = $request->file('cedula_representante_legal')->storePublicly('cedula_representante_legal', 'public');
            $tercero->cedula_representante_legal = $cedula_representante_legal;
        }

        $tercero->sitio_web = $data['sitioWeb'];
        //$tercero->puntos = $data['puntos'];

        // 4. Guardar el nuevo tercero en la base de datos
        $tercero->save();

        // Obtener las marcas seleccionadas
        if ($request->has('marca')) {
            $marcasSeleccionadas = $request->input('marca', []);
            // Asociar las marcas seleccionadas al tercero
            $tercero->marcas()->sync($marcasSeleccionadas);
        }


        //obtener los sistemas seleccionados
        if ($request->has('sistema')) {
            $sistemasSeleccionados = $request->input('sistema', []);
            //asociar los sistemas seleccionados al tercero
            $tercero->sistemas()->sync($sistemasSeleccionados);
        }

        // Asociar las máquinas seleccionadas al nuevo tercero
        //si no vienen maquinas, continuar
        if ($request->has('maquina_id')) {
            $maquinasSeleccionadas = $request->input('maquina_id', []);
            $tercero->maquinas()->sync($maquinasSeleccionadas);
        }

        //guardar las marcas de las maquinas seleccionadas
        if ($request->has('marca_maquina')) {
            $marcasMaquinas = $request->input('marca_maquina', []);
            $tercero->marcasMaquinas()->sync($marcasMaquinas);
        }

        //validar si vienen contactos
        if ($request->has('contactos')) {

            // Crear los contactos del tercero si se ha ingresado al menos un contacto
            if ($data['contadorContactos'] >= 1) {
                foreach ($request->input('contactos') as $contactoData) {
                    $dataContacto = $contactoData; // No es necesario validar nuevamente aquí

                    // Crear el contacto
                    $contacto = new Contacto();
                    $contacto->nombre = $dataContacto['nombre'];
                    $contacto->telefono = $dataContacto['telefono'];
                    $contacto->email = $dataContacto['email'];
                    $contacto->cargo = $dataContacto['cargo'];
                    $contacto->save();

                    // Agregar la relación a la tabla intermedia
                    $tercero->contactos()->attach($contacto->id);
                }
            } else {
                // Crear un contacto por defecto
                $contacto = new Contacto();
                $contacto->nombre = $data['nombre'];
                $contacto->telefono = $data['telefono'];
                $contacto->email = $data['email'];
                $contacto->cargo = $data['cargo'];
                $contacto->save();

                // Agregar la relación a la tabla intermedia
                $tercero->contactos()->attach($contacto->id);
            }
        }

        // Redirigir al usuario a la página de detalles del nuevo tercero con un mensaje de éxito
        return redirect()->route('terceros.index')->with('success', 'Tercero creado exitosamente');
    }
    // Función para obtener un tercero por su ID
    public function show($id)
    {
        $tercero = Tercero::findOrFail($id);

        return view('terceros.show', compact('tercero'));
    }

    public function downloadCertificacion($id)
    {
        // Obtener el tercero
        $tercero = Tercero::findOrFail($id);
        $pathToFile = storage_path('app/' . $tercero->certificacion_bancaria);
        return response()->download($pathToFile);
    }
    
    public function downloadRut($id)
    {
        $tercero = Tercero::findOrFail($id);
        $pathToFile = storage_path('app/public/' . $tercero->rut);
        return response()->download($pathToFile);
    }

    public function getMaquinasByTercero($id)
    {
        $maquinas = Tercero::findOrFail($id)->maquinas;
        return response()->json($maquinas);
    }

    public function getContactosByTercero($id)
    {
        $contactos = Tercero::findOrFail($id)->contactos;
        return response()->json($contactos);
    }

    public function edit($id)
    {
        $tercero = Tercero::findOrFail($id);
        // Obtener el tercero anterior
        $previous = Tercero::where('id', '<', $tercero->id)->orderBy('id', 'desc')->first();
        // Obtener el tercero siguiente
        $next = Tercero::where('id', '>', $tercero->id)->orderBy('id', 'asc')->first();

        //mostrar las cotizaciones del tercero
        $cotizaciones = DB::table('cotizaciones')->where('tercero_id', $tercero->id)->get();
        $tipo_maquina = Lista::where('tipo', 'Tipo Maquina')->get();
        $modelo = Lista::where('tipo', 'Modelo Maquina')->get();
        $paises = DB::table('pais')->get();
        $ciudades = DB::table('ciudad')->get();
        $maquinas = Maquina::allWithConcatenatedData();
        $marca = Marca::all();
        $pedidos = Pedido::with(['tercero', 'contacto', 'maquinas'])->where('tercero_id', $tercero->id)->get();
        return view('terceros.edit', compact('tercero', 'paises', 'ciudades', 'maquinas', 'id', 'tipo_maquina', 'marca', 'modelo', 'pedidos', 'previous', 'next', 'cotizaciones'));
    }

    public function update(Request $request, Tercero $tercero, $id)
    {
    
        $tercero = Tercero::find($id);


        $tercero->tipo = $request->tipo;
        $tercero->nombre = $request->nombre;
        $tercero->direccion = $request->direccion;
        $tercero->telefono = $request->telefono;
        $tercero->email = $request->email;
        //$tercero->tipo_documento = $request->tipo_documento;
        //$tercero->dv = $request->dv;
        $tercero->email_factura_electronica = $request->email_facturacion;
        $tercero->sitio_web = $request->sitio_web;
        $tercero->puntos = $request->puntos;
        $tercero->PaisCodigo = $request->pais_id;
        $tercero->CiudadID = $request->ciudad;
        $tercero->codigo_postal = $request->codigo_postal;
        $tercero->forma_pago = $request->forma_pago;
        // Guardar archivo "rut" si se proporciona uno nuevo
        if ($request->hasFile('rut')) {
            // Elimina el archivo anterior si existe
            if ($tercero->rut) {
                Storage::disk('public')->delete($tercero->rut);
            }

            // Guarda el nuevo archivo
            $rut = $request->file('rut')->storePublicly('rut', 'public');
            $tercero->rut = $rut;
        }

        // Guardar archivo "certificacion_bancaria" si se proporciona uno nuevo
        if ($request->hasFile('certificacion_bancaria')) {
            // Elimina el archivo anterior si existe
            if ($tercero->certificacion_bancaria) {
                Storage::disk('public')->delete($tercero->certificacion_bancaria);
            }

            // Guarda el nuevo archivo
            $certificacion_bancaria = $request->file('certificacion_bancaria')->storePublicly('certificacion_bancaria', 'public');
            $tercero->certificacion_bancaria = $certificacion_bancaria;
        }

        //Guardar archivo camara de comercio si se proporciona uno nuevo
        if ($request->hasFile('camara_comercio')) {
            // Elimina el archivo anterior si existe
            if ($tercero->camara_comercio) {
                Storage::disk('public')->delete($tercero->camara_comercio);
            }

            // Guarda el nuevo archivo
            $camara_comercio = $request->file('camara_comercio')->storePublicly('camara_comercio', 'public');
            $tercero->camara_comercio = $camara_comercio;
        }

        //Guardar archivo cedula de representante legal si se proporciona uno nuevo
        if ($request->hasFile('cedula_representante_legal')) {
            // Elimina el archivo anterior si existe
            if ($tercero->cedula_representante_legal) {
                Storage::disk('public')->delete($tercero->cedula_representante_legal);
            }

            // Guarda el nuevo archivo
            $cedula_representante_legal = $request->file('cedula_representante_legal')->storePublicly('cedula_representante_legal', 'public');
            $tercero->cedula_representante_legal = $cedula_representante_legal;
        }


        $tercero->save();

        // Obtener las marcas seleccionadas
        if ($request->has('marca')) {
            $marcasSeleccionadas = $request->input('marca', []);
            // Asociar las marcas seleccionadas al tercero
            $tercero->marcas()->sync($marcasSeleccionadas);
        }

        //obtener los sistemas seleccionados
        if ($request->has('sistema')) {
            $sistemasSeleccionados = $request->input('sistema', []);
            //asociar los sistemas seleccionados al tercero
            $tercero->sistemas()->sync($sistemasSeleccionados);
        }

        // Asociar las máquinas seleccionadas al nuevo tercero
        if ($request->has('maquina_id')) {
            $maquinasSeleccionadas = $request->input('maquina_id', []);
            $tercero->maquinas()->attach($maquinasSeleccionadas);
        }

        return redirect()->route('terceros.index', $tercero->id)->with('success', 'Tercero actualizado exitosamente');
    }

    public function preview($id)
    {
        
        $tercero = Tercero::findOrFail($id);
        return view('terceros.preview', compact('tercero'));
    }

    public function updateRut(Request $request, $id)
    {
        // hacer la validación del archivo
        $tercero = Tercero::findOrFail($id);
        if ($request->hasFile('rut')) {
            $rut = $request->file('rut');
            $rutName = time() . '_' . $rut->getClientOriginalName();
            $rut->move(public_path('rut'), $rutName);
            $tercero->rut = $rutName;
            $tercero->save();
        }
        return redirect()->route('terceros.preview', $id);
    }

    public function destroy($id)
    {
        // Eliminar el tercero
        $tercero = Tercero::find($id);
        if ($tercero) {
            $tercero->delete();
            return redirect()->route('terceros.index')->with('success', 'Tercero eliminado correctamente');
        } else {
            return redirect()->route('terceros.index')->with('error', 'No se pudo eliminar el tercero');
        }
    }
}
