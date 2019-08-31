<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mueble;
use \App\Venta;
use Session;
use Auth;

class VentaController extends Controller
{
  public function ventas(){
      //De esta forma estoy llamando a mi modelo y ademas el método all(), me trae todos los datos de esa tabla
      $ventas=venta::paginate(20);
      foreach ($ventas as $key => $venta) {
      $ventas_prolijo
      }
      $Nombre=usuario($venta['id'])->nombre;
      $Apellido=usuario($venta['id'])->apellido;
      $Email=ususario($venta['id'])->email;
      $Linea_de_mueble=mueble($venta['id'])->nombre;
      $Precio=mueble($venta['id'])->precio
      return view('ventas')->with('ventas' ,$ventas);
  }

  public function usuario($id){
    $venta = venta::find($id);
    $id_usuario=$venta['id_usuario'];
    $usuario=User::find($id_usuario);
    return $usuario;

  }

  public function mueble($id){
    $venta = venta::find($id);
    $id_mueble=$venta['id_mueble'];
    $mueble=Mueble::find[$id_mueble];
    return $mueble;

  }


}
