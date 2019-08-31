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
                Orden de Compra
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
                Línea del Mueble
            </th>
            <th>
                Precio
            </th>
            <th>
                Estado de la Compra
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ventas as $key => $venta):
        $Nombre=usuario($venta['id'])->nombre;
        $Apellido=usuario($venta['id'])->apellido;
        $Email=ususario($venta['id'])->email;
        $Linea_de_mueble=mueble($venta['id'])->nombre;
        $Precio=mueble($venta['id'])->precio
        ?>
        <tr>
            <td>
                <?= $Nombre;?>
            </td>
            <td>
                <?= $Apellido;?>
            </td>
            <td>
                <?= $Email;?>
            </td>
            <td>
                <?= $Linea_de_mueble;?>
            </td>
            <td>
                <?= $Precio;?>
            </td>
            <td>
                <?= $venta['estado'];?>
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
