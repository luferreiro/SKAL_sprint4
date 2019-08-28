<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mueble;

class CartController extends Controller
{
    public function add($id)
    {
      $mueble =  Mueble::find($id);
      $mueble = [
            'id' => count(session()->get('user.cart')) + 1,
            'id_producto' => $mueble->id,
            "nombre" => $mueble->nombre,
            'material' => $mueble->material,
            'color' => $mueble->color,
            'foto' => $mueble->foto,
            'precio' => $mueble->precio,
      ];
       session()->put("user.cart." . $mueble['id'], $mueble);
       return view('cart');
    }

    public function show(){
        return view('cart');
    }

    public function remove($id)
    {
        session()->pull('user.cart.' . $id, "default");
        return view('cart');
    }
public function confirmar(){
  return view('confirmar_compra');
}

public function finalizar(){
  if($_POST['comprar']=='Si'){
      foreach (session()->get('user.cart') as $mueble){
      $id=$mueble['id'];
      session()->pull('user.cart.' . $id, "default");
    }
    }
      return redirect('/');
  }


}
