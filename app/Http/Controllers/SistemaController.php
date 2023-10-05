<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sistemas;
use App\Models\Lista;

class SistemaController extends Controller
{
    public function index()
    {
        $sistemas = Sistemas::all();

        return view('sistemas.index', compact('sistemas'));
    }

    public function create()
    {
        $sistemas = Sistemas::all();
        return view('sistemas.create', compact('sistemas'));
    }

    public function store(Request $request)
    {
        $sistemas = new Sistemas();
        $sistemas->nombre = $request->nombre;
        $sistemas->descripcion = $request->descripcion;

        //amacenar imagen si viene
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name = time() . '_' . $file->getClientOriginalName();
            $filepath = $file->storeAs('public/sistemas', $name);
            $sistemas->imagen = $name;
        } else {
            $sistemas->imagen = 'no-imagen.jpg';
        }
        $sistemas->save();

        //guardar en la tabla listas
        $lista = New Lista();
        $lista->nombre = $request->nombre;
        $lista->tipo = 'sistema';
        $lista->definicion = $request->descripcion;
        $lista->foto = $sistemas->imagen;
        $lista->save();


        return redirect()->route('sistemas.index')->with('message', 'Sistema creado con exito!!');
    }

    public function edit($id)
    {
        $sistema = Sistemas::all()->where('id', $id)->first();

        //Traer todas las maquinas que manejen este sistema
        $maquinas = $sistema->maquinas;

        //Traer todas las marcas que manejen este sistema
        $marcas = $sistema->marcas;

        //Traer todos los proveedores que manejen este sistema
        $proveedores = $sistema->terceros;

        //obtener el sistema anterior
        $previous = Sistemas::where('id', '<', $sistema->id)->orderBy('id', 'desc')->first();

        //obtener el sistema siguiente
        $next = Sistemas::where('id', '>', $sistema->id)->orderBy('id', 'asc')->first();

        return view('sistemas.edit', compact('sistema', 'maquinas', 'marcas', 'proveedores', 'previous', 'next'));
    }

    public function update(Request $request, $id)
    {
        $sistemas = Sistemas::find($id);
        $sistemas->nombre = $request->nombre;
        $sistemas->descripcion = $request->descripcion;
        
        //amacenar imagen si viene
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name = time() . '_' . $file->getClientOriginalName();
            $filepath = $file->storeAs('public/sistemas', $name);
            $sistemas->imagen = $name;
        }else{
            $sistemas->imagen = 'no-imagen.jpg';
        }

        $sistemas->save();

        return redirect()->route('sistemas.index')->with('message', 'Sistema actualizado con exito!!');
    }

    public function destroy($id)
    {
        $sistemas = Sistemas::find($id);
        $sistemas->delete();

        return redirect()->route('sistemas.index')->with('message', 'Sistema eliminado con exito!!');
    }
}
