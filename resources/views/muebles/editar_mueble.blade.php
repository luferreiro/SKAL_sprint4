@extends('layouts.master')
@section('contenido')

  <section class="principal">
       <article id="muebles">
           <div class="muebles">

             <form  action="" method="POST" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
               <h2>Editar Mueble</h2>
               <br>
               <br>
               <div class="form-row">
                <div  class="form-group col-4 offset-4 ">
                    @if (count($errors)>0)
                        <ul class="alert alert-danger" >
                            @foreach ($errors->all() as $error)

                                <li>{{$error}} </li>

                            @endforeach
                        </ul>
                    @endif

                    <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $mueble->nombre }}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="precio">Precio</label>
                    <input class="form-control" type="number" name="precio" id="precio" value="{{$mueble->precio}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="material">Material</label>
                    <input class="form-control" type="text" name="material" id="material" value="{{$mueble->material}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="alto">Alto</label>
                    <input class="form-control" type="number" name="alto" id="alto" value="{{$mueble->alto}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="ancho">Ancho</label>
                    <input class="form-control" type="number" name="ancho" id="ancho" value="{{$mueble->ancho}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="profundidad">Profundidad</label>
                    <input class="form-control" type="number" name="profundidad" id="profundidad" value="{{$mueble->profundidad}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="color">Color</label>
                    <input class="form-control" type="text" name="color" id="color" value="{{$mueble->color}}"/>
                </div>

                <div class="form-group col-4 offset-4">
                    <input type="submit" class="btn btn-primary" value="Modificar Mueble">
                </div>
            </div>
            <br>
            <a class="form-group col-4 offset-4" href="/abmmuebles">Volver</a>
            </form>

          </div>












    <br>
    <br>
    <div class="spacer"></div>

  @endsection
