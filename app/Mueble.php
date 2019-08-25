<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mueble extends Model
{

protected $fillable = [
    'nombre','precio','material','alto','ancho','profundidad','color','foto'
];

}
