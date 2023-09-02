<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tercero;
use App\Models\Pedido;

class Sistemas extends Model
{
    // Utiliza el trait HasFactory para simplificar la creación de instancias del modelo.
    use HasFactory;
    // Indica la tabla de la base de datos a la que este modelo está asociado.
    protected $table = 'sistemas';
     // Define los campos que pueden ser asignados en masa.  
    protected $fillable = ['nombre'];
    // Define una relación "muchos a muchos" con el modelo Tercero.
    public function terceros()
    {
        return $this->belongsToMany(Tercero::class, 'tercero_sistema', 'sistema_id', 'tercero_id');
    }

    // Define otra relación "muchos a muchos" con el modelo Pedido.
    public function pedidos()
{
    return $this->belongsToMany(Pedido::class, 'pedido_sistema', 'sistema_id', 'pedido_id');
}
}
