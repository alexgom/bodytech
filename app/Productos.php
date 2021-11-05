<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';
    protected $camposTable = array('nombreProducto','descripcionProducto','valorUnitarioProducto','cantidadProducto');
    protected $fillable = [
        'nombreProducto','descripcionProducto','valorUnitarioProducto','cantidadProducto',
    ];
}
