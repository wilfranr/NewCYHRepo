<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tercero;
use App\Models\Pedido;

class Sistemas extends Model
{
    use HasFactory;
    protected $table = 'sistemas';
    protected $fillable = ['nombre'];

    public function terceros()
    {
        return $this->belongsToMany(Tercero::class, 'tercero_sistema', 'sistema_id', 'tercero_id');
    }

    public function pedidos()
{
    return $this->belongsToMany(Pedido::class, 'pedido_sistema', 'sistema_id', 'pedido_id');
}
}
