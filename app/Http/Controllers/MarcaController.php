<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function show($id)
    {
        $marca = Marca::all()->where('id', $id)->first();
        //TRAER TODAS LAS MAQUINAS QUE PERTENEZCAN A ESTA MARCA
        $maquinas = $marca->maquinas;
        //TRAER TODOS LOS SISTEMAS QUE PERTENEZCAN A ESTA MARCA
        $sistemas = $marca->sistemas;
        //TRAER TODOS LOS PROVEEDORES QUE MANEJEN A ESTA MARCA
        $proveedores = $marca->terceros;


        return view('marcas.show', compact('marca', 'maquinas', 'sistemas', 'proveedores'));
    }

    public function destroy($id)
    {
        $marca = Marca::find($id);
        $marca->delete();
        return redirect()->route('marcas.index');
    }

}
