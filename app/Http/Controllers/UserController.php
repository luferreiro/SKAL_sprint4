<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
  public function index(){
      //De esta forma estoy llamando a mi modelo y ademas el método all(), me trae todos los datos de esa tabla
      $usuarios = User::paginate(10);
      //Ahora que tengo esos datos, se los paso a la vista proximosEstrenos que debo crear y con el llamdo al método with que me ofrece laravel dispongo como parámetros la variable que contendra los datos que va a la vista 'peliculas' y la variable que posee almacenado los datos $peliculas, ojo: esto remplaza a la forma como lo ejecuta Daro en los videos haciendo uso del "concact".
      return view('usuarios/abmusuarios')->with('usuarios',$usuarios);
  }

  public function show($id)
  {
      $usuario = User::find($id);
      return view('usuarios.ver_usuario')->with('usuario',$usuario);
  }

  public function edit($id)
      {
          $usuario = User::find($id);
          return view('usuarios.editar_usuario')
              ->with('usuario', $usuario);
      }

  public function update(Request $request, $id)
  {
    $usuario = User::find($id);
    $changes = array_diff($request->all(), $usuario->toArray());
    $usuario->update($changes);
    return redirect('/abmusuarios');
  }

public function confirmar($id){
  $usuario = User::find($id);
  return view('usuarios.eliminar_usuario')
    ->with('usuario', $usuario);
}

  public function destroy(){
    if($_POST['borrar']=='Si'){
        $id=$_POST['id'];
        $usuarioBorrar = User::find($id);
        $usuarioBorrar->delete();
      }
        return redirect('/abmusuarios');
    }


}
