<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        // Obtiene una lista de todas las empresas y muestra la vista de índice
        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
    }

    public function create()
    {
        // Muestra el formulario de creación de una nueva empresa
        return view('empresas.create');
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario y crea una nueva empresa en la base de datos
        // (Deberás implementar esta lógica)
    }

    public function show(Empresa $empresa)
    {
        // Muestra los detalles de una empresa específica
        return view('empresas.show', compact('empresa'));
    }

    public function edit(Empresa $empresa)
    {
        // Muestra el formulario de edición de una empresa específica
        $empresa = Empresa::find($empresa->id);
        // usuario

        return view('empresas.edit', compact('empresa'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:100',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
            'correo' => 'required|email',
            'nit' => 'required|string',
            'ciudad' => 'required|string',
            'pais' => 'required|string',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta las reglas de validación para el logo
            'user_id' => 'required|integer',
        ]);

        // Obtener la empresa a actualizar
        $empresa = Empresa::findOrFail($id);

        // Actualizar los datos de la empresa
        $empresa->nombre = $request->nombre;
        $empresa->direccion = $request->direccion;
        $empresa->telefono = $request->telefono;
        $empresa->email = $request->correo;
        $empresa->nit = $request->nit;
        $empresa->ciudad = $request->ciudad;
        $empresa->pais = $request->pais;

        // Actualizar el logo si se proporciona uno nuevo
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public'); // Ajusta la ubicación y el disco de almacenamiento según tu configuración
            $empresa->logo = $logoPath;
        }

        $empresa->save();

        // Redirigir a la vista de la empresa con un mensaje de éxito
        return redirect()->route('empresas.edit', $empresa->id)->with('success', 'Los datos de la empresa se han actualizado correctamente.');
    }


    public function destroy(Empresa $empresa)
    {
        // Elimina una empresa específica de la base de datos
        // (Deberás implementar esta lógica)
    }
}
