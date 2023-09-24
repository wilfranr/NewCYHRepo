<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;
use App\Models\ListaPadre;
use App\Models\Marca;
use App\Models\Sistemas;



class ListaController extends Controller
{
    public function index()
    {
        // consulta para obtener todas las listas
        $listas = Lista::all();
        $listasPadre = ListaPadre::all();
        return view('listas.index', compact('listas', 'listasPadre'));
    }

    public function create()
    {
        // consulta para obtener todas las listas padre
        $listasPadre = ListaPadre::all();
        return view('listas.create', compact('listasPadre'));
    }

    public function store(Request $request)
    {
        // validar los datos del formulario
        $request->validate([
            'tipo' => 'required',
            'nombre' => 'required',
            'definicion' => 'required',
            'fotoLista' => 'image|nullable',
            'fotoMedida' => 'image|nullable'
        ]);

        $lista = new Lista;
        $lista->tipo = $request->tipo;
        $lista->nombre = $request->nombre;
        $lista->definicion = $request->definicion;
        // dd($lista->tipo);

        // Procesar la foto de la lista, si se proporcionó
        if ($request->hasFile('fotoLista')) {
            $foto = $request->file('fotoLista');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $filepath = $foto->storeAs('public/listas', $filename);
            $lista->foto = $filename;
        } else {
            $lista->foto = 'no-imagen.jpg';
        }

        $lista->save();

        //Si viene tipo = marca, entonces se debe crear un registro en la tabla marcas
        if ($request->tipo == 'Marca') {
            $marca = new Marca;
            $marca->nombre = $request->nombre;
            $marca->save();
        }

        //si viene tipo = sistema, entonces se debe crear un registro en la tabla sistemas
        if ($request->tipo == 'Sistema') {
            $sistema = new Sistemas;
            $sistema->nombre = $request->nombre;
            $sistema->save();
        }

        return redirect()->route('listas.index')->with('success', 'La lista ha sido creada exitosamente.');
    }

    public function show($id)
    {
        $lista = Lista::findOrFail($id);
        return view('listas.show', compact('lista'));
    }


    public function edit($id)
    {
        $lista = Lista::findOrFail($id);

        // Obtener la lista anterior
        $previous = Lista::where('id', '<', $lista->id)->orderBy('id', 'desc')->first();

        // Obtener el artículo siguiente
        $next = Lista::where('id', '>', $lista->id)->orderBy('id', 'asc')->first();


        $listasPadre = ListaPadre::all();
        return view('listas.edit', compact('lista', 'listasPadre', 'previous', 'next'));
    }


    public function update(Request $request, Lista $lista, $id)
    {
        $lista = Lista::findOrFail($id);
        $request->validate([
            'tipo' => 'required',
            'nombre' => 'required',
            'definicion' => 'required'
        ]);

        $lista->tipo = $request->tipo;
        $lista->nombre = $request->nombre;
        $lista->definicion = $request->definicion;

        // Procesar la foto de la lista, si se proporcionó
        if ($request->hasFile('fotoLista')) {
            $foto = $request->file('fotoLista');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $filepath = $foto->storeAs('public/listas', $filename);
            $lista->foto = $filename;
        }

        $lista->save();

        //Si viene tipo = marca, entonces se debe ACTUALIZAR un registro en la tabla marcas
        if ($request->tipo == 'Marca') {
            $marca = Marca::where('nombre', $request->nombre)->first();
            $marca->nombre = $request->nombre;
            $marca->save();
        }

        return redirect()->route('listas.index')->with('success', 'La lista ha sido actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $lista = Lista::findOrFail($id);
        //si viene tipo = marca, entonces se debe eliminar el registro en la tabla marcas
        if ($lista->tipo == 'Marca') {
            $marca = Marca::where('nombre', $lista->nombre)->first();
            $marca->delete();
        }
        // Eliminar la lista
        if ($lista) {
            $lista->delete();
            return redirect()->route('listas.index')->with('success', 'La lista ha sido eliminada exitosamente.');
        } else {
            return redirect()->route('listas.index')->with('error', 'La lista no pudo ser eliminada.');
        }

        
    }
}
