@extends('layouts.master')
@section('contenido')


  <br>
  <h2 class="text-center"> Panel de Control: Usuarios</h2>
  <br>
  <div class="spacer"></div>


  <div class="card" style="overflow-x:auto;">
    <h3 class="card-header">Usuarios</h3>
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
                Apellido
            </th>
            <th>
                E-mail
            </th>
            <th>
                Perfil
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
        <?php foreach ($usuarios as $key => $usuario) :?>
        <tr>
            <td>
                <?= $usuario['id'];?>
            </td>
            <td>
                <?= $usuario['nombre'];?>
            </td>
            <td>
                <?= $usuario['apellido'];?>
            </td>
            <td>
                <?= $usuario['email'];?>
            </td>
            <td>
                <?= $usuario['perfil'];?>
            </td>
            <td>
                <a href="ver_usuario/{{$usuario->id}}"><i class="fas fa-user-check"></i></a>
            </td>
            <td>
                <a href="/editar_usuario/{{$usuario->id}}/update"><i class="fas fa-user-edit"></i></a>
            </td>
            <td>
                <a href="/eliminar_usuario/{{$usuario->id}}"><i class="fas fa-user-slash"></i></a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
  </table>
  </div>
  <br>
  <br>
  <div class="spacer"></div>



@endsection
