@extends('layouts.master')
@section('contenido')

  <section class="principal">
       <article id="usuarios">
           <div class="usuarios">

             <form  action="" method="POST" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
               <h2>Editar Usuarios</h2>
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
                    <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $usuario->nombre }}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="apellido">Apellido</label>
                    <input class="form-control" type="text" name="apellido" id="apellido" value="{{$usuario->apellido}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{$usuario->email}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="perfil">Perfil</label>
                    <input class="form-control" type="text" name="perfil" id="perfil" value="{{$usuario->perfil}}"/>
                </div>

                <div class="form-group col-4 offset-4">
                    <input type="submit" class="btn btn-primary" value="Modificar Usuario">
                </div>

            </div>
            <br>
            <a class="form-group col-4 offset-4" href="/abmusuarios">Volver</a>
            </form>

          </div>


      </article>
  </section>


  <br>
  <br>
  <div class="spacer"></div>



@endsection
