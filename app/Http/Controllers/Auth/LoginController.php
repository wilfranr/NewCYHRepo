<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// Agregar el facade Request
use Illuminate\Http\Request;
// Agregar el modelo Trm
use App\Models\Trm;
// Agregar el modelo Empresa
use App\Models\Empresa;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function authenticated(Request $request, $trm)
    {
        // Obtener la fecha de la última actualización de TRM desde la base de datos
        $lastTrmUpdate = Trm::all()->first()->updated_at;
        //dd($lastTrmUpdate);

        // Verificar si ha pasado al menos 7 días desde la última actualización
        if ($lastTrmUpdate === null || now()->diffInDays($lastTrmUpdate) >= 7) {
            // Mostrar la alerta de Swal para solicitar la TRM
            session()->flash('show_trm_request', true);
        }

        //obtener el valor de trm
        $trm = Trm::all()->first()->trm;
        
        //guardar el valor de trm en la sesion
        session(['trm' => $trm]);

        //obtener el valor de siglas empresa
        $siglasEmpresa = Empresa::all()->first()->siglas;

        //guardar el valor de siglas en la sesion
        session(['siglas' => $siglasEmpresa]);

    }
}
