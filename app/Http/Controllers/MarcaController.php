<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Lista;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index', compact('marcas'));
    }

    public function edit($id)
    {
        $marca = Marca::all()->where('id', $id)->first();
        //TRAER TODAS LAS MAQUINAS QUE PERTENEZCAN A ESTA MARCA
        $maquinas = $marca->maquinas;
        //TRAER TODOS LOS SISTEMAS QUE PERTENEZCAN A ESTA MARCA
        $sistemas = $marca->sistemas;
        //TRAER TODOS LOS PROVEEDORES QUE MANEJEN A ESTA MARCA
        $proveedores = $marca->terceros;

        //Obtener la marca anterior
        $previous = Marca::where('id', '<', $marca->id)->orderBy('id', 'desc')->first();

        //Obtener la marca siguiente
        $next = Marca::where('id', '>', $marca->id)->orderBy('id', 'asc')->first();


        return view('marcas.edit', compact('marca', 'maquinas', 'sistemas', 'proveedores', 'previous', 'next'));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(Request $request)
    {
        $marca = new Marca();
        $marca->nombre = $request->nombre;
        $marca->descripcion = $request->descripcion;

        //almacenar imagen si viene
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $name = time() . '_' . $file->getClientOriginalName();
            $filepath = $file->storeAs('public/marcas', $name);
            $marca->imagen = $name;
        }else{
            $marca->imagen = 'no-imagen.jpg';
        }

        $marca->save();
        //guardar en la tabla listas
        $lista = New Lista();
        $lista->nombre = $request->nombre;
        $lista->tipo = 'Marca';
        $lista->definicion = $request->descripcion;
        $lista->foto = $marca->imagen;
        $lista->save();



        return redirect()->route('marcas.index')->with('success', 'Marca creada');
    }

    public function show($id)
    {
        $marca = Marca::find($id);
        return view('marcas.show', compact('marca'));
    }

    public function update(Request $request, $id)
    {
        $marca = Marca::find($id);
        $marca->nombre = $request->nombre;
        
        if ($request->descripcion != null) {
            $marca->descripcion = $request->descripcion;
        }


        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time() . '_' . $file->getClientOriginalName();
            $filepath = $file->storeAs('public/marcas', $name);
            $marca->imagen = $name;
        }
        $marca->save();
        return redirect()->route('marcas.index');
    }

    public function destroy($id)
    {
        $marca = Marca::find($id);
        $marca->delete();
        return redirect()->route('marcas.index')->with('success', 'Marca eliminada');
    }

}
