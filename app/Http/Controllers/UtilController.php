<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lista;
use App\Models\Sistemas;
use App\Models\Tercero;
use App\Models\Marca;
use App\Models\Maquina;



class UtilController extends Controller
{
    public function crearSistema(Request $request)
    {
        // validar los datos del formulario
        $request->validate([
            'tipo' => 'required',
            'nombre' => 'required',
            'definicion' => 'nullable',
            'fotoLista' => 'image|nullable',
        ], $messages = [
            'tipo.required' => 'El campo tipo es obligatorio.',
            'nombre.required' => 'El campo nombre es obligatorio.',
            'fotoLista.image' => 'El archivo debe ser una imagen.',
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

        //si viene tipo = sistema, entonces se debe crear un registro en la tabla sistemas
        if ($request->tipo == 'Sistema') {
            $sistema = new Sistemas;
            $sistema->nombre = $request->nombre;
            $sistema->save();

            // asociar el sistema al tercero
            $tercero = Tercero::find($request->tercero_id);
            // dd($tercero);
            $tercero->sistemas()->attach($sistema->id);
        }


        return back()->with('success', 'sistema creado exitosamente.');
    }

    public function crearMarca(Request $request)
    {
        // validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'definicion' => 'nullable',
            'fotoLista' => 'image|nullable',
        ], $messages = [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'fotoLista.image' => 'El archivo debe ser una imagen.',
        ]);

        $marca = new Marca;
        $marca->nombre = $request->nombre;
        $marca->descripcion = $request->definicion;

        // Procesar la foto de la lista, si se proporcionó
        if ($request->hasFile('fotoLista')) {
            $foto = $request->file('fotoLista');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $filepath = $foto->storeAs('public/listas', $filename);
            $marca->imagen = $filename;
        } else {
            $marca->imagen = 'no-imagen.jpg';
        }

        $marca->save();

        //crear marca en tabla listas
        $lista = new Lista;
        $lista->tipo = 'Marca';
        $lista->nombre = $request->nombre;
        $lista->definicion = $request->definicion;
        $lista->foto = $marca->imagen;
        $lista->save();

        //si viene tercero
        if ($request->tercero_id) {
            //asociar marca a tercero
            $tercero = Tercero::find($request->tercero_id);
            $tercero->marcas()->attach($marca->id);
        }

        //si viene maquina
        if ($request->maquina_id) {
            //asociar marca a maquina
            $maquina = Maquina::find($request->maquina_id);
            $maquina->marcas()->attach($marca->id);
        }


        return back()->with('success', 'marca creada exitosamente.');
    }
}
