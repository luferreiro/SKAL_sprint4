@extends('layouts.master')
@section('contenido')


      <html lang="es" dir="ltr">
      <div class="card-body">
          <form action="/confirmar_mueble" method="post">
              @csrf
            <p>¿Esta seguro que quiere eliminar al mueble seleccionado?</p>
            <input type="submit" name="borrar" value="Si">
            <input type="submit" name="borrar" value="No">
            <input type="hidden" name="id" value={{$mueble->id}}>
         </form>


      </div>












    <br>
    <br>
    <div class="spacer"></div>

  @endsection
