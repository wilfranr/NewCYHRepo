<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TerceroController;
use App\Models\Proveedor;

class ProveedorController extends TerceroController
{
    // hacemos referencia al modelo Proveedor
    public function __construct()
    {
        parent::__construct();
    }

    // Métodos específicos para proveedores
}

