<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    //index
    public function index(){
        $repuestos = ['repuesto1', 'repuesto2', 'repuesto3', 'repuesto4', 'repuesto5', 'repuesto6'];
        $kits = ['kit1', 'kit2', 'kit3', 'kit4', 'kit5', 'kit6'];
        return view('pruebas.index', array(
            'repuestos' => $repuestos,
            'kits' => $kits
        ));
    }
}
