<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    // define la tabla proveedores
    use HasFactory;
    
    public function compras()
    {
        // referencia a la tabla compras
        return $this->hasMany(Compra::class);
    }

}
