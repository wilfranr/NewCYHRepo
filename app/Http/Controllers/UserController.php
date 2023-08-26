<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        // referencia a la vista index
        $users = User::all();
        $admin = User::where('role', 'admin')->get();
        $analistaPartes = User::where('role', 'partes')->get();
        $auxiliarLogistica = User::where('role', 'logistica')->get();
        $vendedor = User::where('role', 'vendedor')->get();
        $superadmin = User::where('role', 'superadmin')->get();

        return view('users.index', compact('users', 'admin', 'analistaPartes', 'auxiliarLogistica', 'vendedor', 'superadmin')
        );
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request, $user, $id)
    {
            // validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);

        $user = User::create($validated);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
    //metodo show
    public function show(User $user, $id)
    {
        // referencia a la vista show
        $user = User::find($id);
        return view('users.show', compact('user'));
    }
    

    public function edit(User $user, $id)
    {
            // referencia a la vista edit
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
            // validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,
            'password' => 'nullable|min:8',
        ]);

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    public function destroy($id)
    {
            // referencia a la vista destroy
        $user = User::find($id);

        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }
}
