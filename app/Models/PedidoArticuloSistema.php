<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoArticuloSistema extends Model
{
    use HasFactory;
    protected $table = 'pedido_articulo_sistema';
    protected $fillable = [
        'id',
        'pedido_id',
        'articulo_id',
        'sistema_id',
        'created_at',
        'updated_at'
    ];
    
}
