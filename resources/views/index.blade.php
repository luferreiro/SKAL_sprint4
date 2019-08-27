@extends('layouts.main')
@section('contenido')

  <section class="container">
  <div class="card-deck row mt-5">
    @php
      @endphp
      @foreach ($muebles as $key => $mueble)
         <div class="col-md-4 mb-5">
         <div class="card">
           <img src=/storage/img/<?= $mueble['foto']?> class="card-img-top" alt="Foto">
           <div class="card-body">
             <h5 class="card-title"><?= $mueble['nombre']?></h5>
             <p class="card-text">
               Alto: <?= $mueble['alto']?> cm <br>
               Ancho: <?= $mueble['ancho']?> cm<br>
               Profundidad: <?= $mueble['profundidad']?> cm<br>
               Madera: <?= $mueble['material']?> <br>
               Precio: $ <?= $mueble['precio']?><br>
             </p>
           </div>
           <div class="card-footer">
             <div><a class="fas fa-shopping-cart" style=color:orange href="{{route('cart.add', ['id' => $mueble->id])}}"></a></div>
             </div>

         </div>
       </div>
     @endforeach
  </div>
    {{$muebles->links()}}
  </section>
@endsection
