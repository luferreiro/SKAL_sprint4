@extends('layouts.master')
@section('contenido')

  <html lang="es" dir="ltr">
  <div class="card-body" style="text-align:justify;">
      <form action="/confirmar_compra" method="post">
          @csrf
        <p>¿Esta seguro que quiere quiere confirmar esta compra?</p>
        <p>En caso de aceptar, nuestro equipo comercial se contactará para programar la entrega.</p>
        <input type="submit" name="comprar" value="Si">
        <input type="submit" name="comprar" value="No">
      </form>


  </div>



@endsection
