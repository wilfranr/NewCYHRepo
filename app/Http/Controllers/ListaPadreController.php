<?php

namespace App\Http\Controllers;

use App\Models\ListaPadre;
use App\Http\Requests\StoreListaPadreRequest;
use App\Http\Requests\UpdateListaPadreRequest;

class ListaPadreController extends Controller
{
    public function index()
    {
        // consulta para obtener todas las listas
        $listasPadre = ListaPadre::all();
        return view('listasPadre.index', compact('listasPadre'));
    }

    public function create()
    {
        // consulta para obtener todas las listas padre
        return view('listasPadre.create');
    }

    public function store(StoreListaPadreRequest $request)
    {
        // validar los datos del formulario
        $listasPadre = new ListaPadre();
        $listasPadre->nombre = $request->nombre;
        $listasPadre->save();
        return redirect()->route('listasPadre.index')->with('success', 'La lista ha sido creada exitosamente.');
    }

    public function edit($id)
    {
        $listaPadre = ListaPadre::findOrFail($id);

        //obtener anterior lista
        $previous = ListaPadre::where('id', '<', $listaPadre->id)->orderBy('id','desc')->first();

        //obtener siguiente lista
        $next = ListaPadre::where('id', '>', $listaPadre->id)->orderBy('id', 'asc')->first();

        return view('listasPadre.edit', compact('listaPadre', 'previous', 'next'));
    }

    public function update(UpdateListaPadreRequest $request, $id)
    {
        // consulta para obtener todas las listas padre
        $listaPadre = ListaPadre::findOrFail($id);
        $listaPadre->nombre = $request->nombre;
        $listaPadre->save();
        return redirect()->route('listasPadre.index')->with('success', 'La lista ha sido actualizada exitosamente.');
    }
    public function destroy(ListaPadre $listaPadre)
    {
        // consulta para obtener todas las listas padre
        $listaPadre->delete();
        return redirect()->route('listasPadre.index')->with('success', 'La lista ha sido eliminada exitosamente.');
    }
}
