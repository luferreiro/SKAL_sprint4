@extends('layouts.master')
@section('contenido')

  <div class="container">
  <div class="card-body">


    <h2 class="Register">Nuevo Mueble</h2>

      <br>
        <form class="px-4 py-3 mx-auto text-center" action="guardar_mueble" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="header">
            @if (count($errors)>0)
              <ul class="alert alert-danger" >
                @foreach ($errors->all() as $error)
                    <li>{{$error}} </li>
                @endforeach
              </ul>
            @endif
            </div>

            <br>
          <div class="form-group">
            <input name="nombre" type="text" class="form-control" id="nombre" value="" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input name="precio" type="number" class="form-control" id="precio" value="" placeholder="Precio">
          </div>
          <div class="form-group">
            <input name="material" type="text" class="form-control" id="material" value="" placeholder="Material">
          </div>
          <div class="form-group">
            <input name="alto" type="number" class="form-control" id="alto" value="" placeholder="Alto (cm)">
          </div>
          <div class="form-group">
            <input name="ancho" type="number" class="form-control" id="ancho" value="" placeholder="Ancho (cm)">
          </div>
          <div class="form-group">
            <input name="profundidad" type="number" class="form-control" id="profundidad" value="" placeholder="Profundidad (cm)">
          </div>
          <div class="form-group">
            <input name="color" type="text" class="form-control" id="color" value="" placeholder="Color">
          </div>
          <div class="form-group">
            <input name="foto" type="file" class="form-control" id="foto" value="" placeholder="Foto del Mueble">
          </div>
              <button type="submit" class="btn btn-secondary">Registrar Mueble</button>
        </form>


  </div>
  </div>
    <br>
    <br>
    <div class="spacer"></div>

  @endsection
