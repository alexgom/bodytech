<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carrito';
    protected $fillable = [
       'producto_id',  'valor_total', 'cantidad','cliente_identificacion','estado'
    ];
}
