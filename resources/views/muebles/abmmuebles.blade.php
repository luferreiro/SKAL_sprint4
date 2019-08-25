@extends('layouts.master')
@section('contenido')

  <br>
  <h2 class="text-center"> Panel de Control: Muebles</h2>
  <br>
  <div class="spacer"></div>


  <div class="card" style="overflow-x:auto;">
    <h3 class="card-header"><a href=/agregar_mueble>+ Agregar Muebles</a></h3>
  <table class="table">

    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Nombre
            </th>
            <th>
                Precio
            </th>
            <th>
                Material
            </th>
            <th>
                Alto
            </th>
            <th>
                Ancho
            </th>
            <th>
                Profundidad
            </th>
            <th>
                Color
            </th>
            <th>
                Ver
            </th>
            <th>
                Editar
            </th>
            <th>
                Eliminar
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($muebles as $key => $mueble) :?>
        <tr>
            <td>
                <?= $mueble['id'];?>
            </td>
            <td>
                <?= $mueble['nombre'];?>
            </td>
            <td>
                <?= $mueble['precio'];?>
            </td>
            <td>
                <?= $mueble['material'];?>
            </td>
            <td>
                <?= $mueble['alto'];?>
            </td>
            <td>
                <?= $mueble['ancho'];?>
            </td>
            <td>
                <?= $mueble['profundidad'];?>
            </td>
            <td>
                <?= $mueble['color'];?>
            </td>
            <td>
                <a href="ver_mueble/{{$mueble->id}}"><i class="fas fa-user-check"></i></a>
            </td>
            <td>
                <a href="editar_mueble/{{$mueble->id}}"><i class="fas fa-user-edit"></i></a>
            </td>
            <td>
                <a href="eliminar_mueble/{{$mueble->id}}"><i class="fas fa-user-slash"></i></a>
            </td>

        </tr>
        <?php endforeach;?>


    </tbody>


  </table>
  {{$muebles->links()}}
  </div>






  <br>
  <br>
  <div class="spacer"></div>



@endsection
