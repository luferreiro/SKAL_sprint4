@extends('layouts.master')
@section('contenido')

  <br>
  <h2 class="text-center">Detalle de Producto</h2>
  <div class="spacer"></div>
  <div class="row mt-5">
    <div class="col-lg-4 offset-lg-4">
        <div class="card w-100">
            <img class="card-img-top" src=/storage/img/<?= $mueble['foto']?> alt="Foto">
            <ul class="list-group list-group-flush">
              <div class="spacer"></div>
                <li class="list-group-item">Nombre: <?= $mueble['nombre']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Precio: <?= $mueble['precio']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Material: <?= $mueble['material']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Alto: <?= $mueble['alto']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Ancho: <?= $mueble['ancho']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Profundidad: <?= $mueble['profundidad']?></li>
                <div class="spacer"></div>
                <li class="list-group-item">Color: <?= $mueble['color']?></li>
                <div class="spacer"></div>
                
              </ul>
        </div>
        <br>
        <a href="/abmmuebles">Volver</a>
    </div>

</div>
<br>
<br>
<div class="spacer"></div>


@endsection
