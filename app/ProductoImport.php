<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoImport extends Model
{
    protected $fillable = [
       'producto_id' => $row[0],  
       'valor_total' => $row[1], 
       'cantidad' => $row[2],
       'cliente_identificacion' => $row[3],
       'estado' => $row[4]
    ];
}
