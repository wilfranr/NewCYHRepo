<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maquina;
use App\Models\Lista;
use App\Models\Marca;
use App\Models\Tercero;

class MaquinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // consulta la base de datos para obtener todas las maquinas
        $maquinas = Maquina::all();
        $tipo_maquina = Lista::where('tipo', 'Tipo Maquina')->get();
        $marca = Marca::all();
        //dd($marca);
        $modelo = Lista::where('tipo', 'Modelo Maquina')->get();

        return view('maquinas.index', compact('maquinas', 'tipo_maquina', 'marca', 'modelo'));
    }

    public function create()
    {
        // hacer una consulta para obtener los tipos de maquinas
        $tipo_maquina = Lista::where('tipo', 'Tipo Maquina')->get();
        $marca = Marca::all();
        $modelo = Lista::where('tipo', 'Modelo Maquina')->get();
        return view('maquinas.create', compact('tipo_maquina', 'marca', 'modelo'));
    }

    public function store(Request $request)
    {
        // validar los datos del formulario
        $validatedData = $request->validate([
            'tipo_maquina' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'serie' => 'nullable',
            'arreglo' => 'nullable',
            'fotoMaquina' => 'nullable|image|max:2048',
            'fotoId' => 'nullable|image|max:2048',
        ]);

        $maquina = new Maquina();
        $maquina->tipo = $validatedData['tipo_maquina'];
        $maquina->modelo = $validatedData['modelo'];
        $maquina->serie = $validatedData['serie'];
        $maquina->arreglo = $validatedData['arreglo'];

        // Obtener la marca seleccionada
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


        // Asociar la marca a la máquina a través de la relación belongsToMany
        $maquina->marcas()->attach($marca);

        return redirect()->route('maquinas.index')
            ->with('success', 'La máquina ha sido creada exitosamente.');
    }

    public function show($id)
    {
        $maquina = Maquina::find($id);
        return view('maquinas.show', compact('maquina'));
    }

    public function edit($id)
    {
        $maquina = Maquina::with('marcas')->findOrFail($id);
        // dd($maquina);

        //obtener maquina anterior
        $previous = Maquina::where('id', '<', $maquina->id)->orderBy('id', 'desc')->first();

        //obtener maquina siguiente
        $next = Maquina::where('id', '>', $maquina->id)->orderBy('id', 'asc')->first();

        $tipo_maquina = Lista::where('tipo', 'Tipo Maquina')->get();
        $modelo = Lista::where('tipo', 'Modelo Maquina')->get();
        $marca = Marca::all();

        //obtener los terceros que manejen esta maquina
        $terceros = Tercero::whereHas('maquinas', function ($query) use ($id) {
            $query->where('maquina_id', $id);
        })->get();

        return view('maquinas.edit', compact('maquina', 'tipo_maquina', 'marca', 'modelo', 'previous', 'next', 'terceros'));
    }

    public function update(Request $request, Maquina $maquina, $id)
    {
        //buscar la maquina a actualizar
        $maquina = Maquina::find($id);
        //validar los datos del formulario
        $request->validate([
            'tipo_maquina' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'serie' => 'required',
        ]);
        //actualizar los datos de la maquina
        $maquina->tipo = $request->tipo_maquina;
        $maquina->modelo = $request->modelo;
        $maquina->serie = $request->serie;
        $maquina->arreglo = $request->arreglo;

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
        
        // Obtener la marca seleccionada
        $marca = Marca::find($request->input('marca'));
        
        //guardar el nombre de la marca en la tabla maquinas
        $maquina->marca = $marca->nombre;
        $maquina->save();

        // Asociar la marca a la máquina a través de la relación belongsToMany
        $marcaIds = [$marca->id]; // Encapsula el ID de la marca en un array
        $maquina->marcas()->sync($marcaIds);


        //redireccionar a la vista de maquinas
        return redirect()->route('maquinas.index', $maquina->id)->with('success', 'Maquina actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $maquina = Maquina::findOrFail($id);

            // Eliminar las relaciones en la tabla pivot antes de eliminar la máquina
            $maquina->marcas()->detach();
            $maquina->terceros()->detach();



            // Eliminar la máquina
            $maquina->delete();

            // Redireccionar o mostrar un mensaje de éxito
            return redirect()->route('maquinas.index')->with('success', 'Máquina eliminada correctamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error al eliminar la máquina');
        }
    }
}
