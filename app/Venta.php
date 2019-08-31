<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Venta extends Model
{
    protected $fillable = [
      'orden_de_compra','id_mueble','id_usuario','estado'
    ];





}
