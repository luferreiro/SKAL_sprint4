<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mueble;
use App\Cart;
use Session;

class MuebleController extends Controller
{
  // Aquí creo mi función que se encargará de buscar los datos en la tabla, valiendome de algo que me ofrece Laravel, llamado Eloquent
    //procedo a crear la función index
    public function index(){
        //De esta forma estoy llamando a mi modelo y ademas el método all(), me trae todos los datos de esa tabla
        $muebles=mueble::paginate(9);
        //Ahora que tengo esos datos, se los paso a la vista proximosEstrenos que debo crear y con el llamdo al método with que me ofrece laravel dispongo como parámetros la variable que contendra los datos que va a la vista 'peliculas' y la variable que posee almacenado los datos $peliculas, ojo: esto remplaza a la forma como lo ejecuta Daro en los videos haciendo uso del "concact".
        return view('index')->with('muebles' ,$muebles);
    }

    public function abm(){
        //De esta forma estoy llamando a mi modelo y ademas el método all(), me trae todos los datos de esa tabla
        $muebles=mueble::paginate(20);
        //Ahora que tengo esos datos, se los paso a la vista proximosEstrenos que debo crear y con el llamdo al método with que me ofrece laravel dispongo como parámetros la variable que contendra los datos que va a la vista 'peliculas' y la variable que posee almacenado los datos $peliculas, ojo: esto remplaza a la forma como lo ejecuta Daro en los videos haciendo uso del "concact".
        return view('muebles.abmmuebles')->with('muebles' ,$muebles);
    }

    public function show($id){
        //Aquí almaceno en una variable el detalle, sólo del registro seleccionado
        $mueble = Mueble::find($id);
        //Aquí retorno a la vista el detalle de la película seleccionada
        return view('muebles.ver_mueble')->with('mueble',$mueble);

    }
    public function agregar(){
      return view('muebles.agregar_mueble');
    }

    public function save(Request $request){
      $reglas =[
      'nombre' => 'required|string',
      'precio' => 'required|numeric',
      'material' => 'required|string',
      'alto' => 'required|numeric',
      'ancho' => 'required|numeric',
      'cantidad' => 'numeric',
      'profundidad' => 'required|numeric',
      'color' => 'required|string',
      'foto' => 'required|file',
    ];
    $mensajes = [
      'required' => 'El campo :attribute es obligatorio',
      'string' =>'El campo :attribute es de tipo texto',
      'file'=>'El tipo de archivo no es compatible',
      //'unique' => 'El campo :attribute ya existe',
      'numeric' => 'El campo :attribute debe ser numérico',
      'date' => 'El campo :attribute debe ser una fecha válida'
    ];
    $this->validate($request,$reglas,$mensajes);

    if ($request->file('foto')){
      $rutaArchivo=$request->file('foto')->store('public/img');
      $nombreArchivo=basename($rutaArchivo);
    }

    Mueble::create([
      'nombre' => $_POST['nombre'],
      'precio' => $_POST['precio'],
      'material' => $_POST['material'],
      'alto' => $_POST['alto'],
      'ancho' => $_POST['ancho'],
      'profundidad' => $_POST['profundidad'],
      'color' => $_POST['color'],
      'foto' => $nombreArchivo,
    ]);

    return redirect('abmmuebles');
    }

public function editar($id){
  $mueble = Mueble::find($id);
  return view('muebles.editar_mueble')->with('mueble', $mueble);
}

public function update(Request $request, $id){
  $mueble = Mueble::find($id);
  $changes = array_diff($request->all(), $mueble->toArray());

  $mueble->update($changes);
  return redirect('/abmmuebles');
}

public function confirmar($id){
  $mueble = Mueble::find($id);
  return view('muebles.eliminar_mueble')
    ->with('mueble', $mueble);
}

  public function destroy(){
    if($_POST['borrar']=='Si'){
        $id=$_POST['id'];
        $muebleBorrar = Mueble::find($id);
        $muebleBorrar->delete();
      }
        return redirect('/abmmuebles');
    }

  public function getAddToCart(Request $request, $id){
      $mueble = Mueble::find($id);
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($mueble, $mueble->id);

      $request->session()->put('cart', $cart);
      dd($request->session()->get('cart'));
      return redirect()->route('index');
  }

}
