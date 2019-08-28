@extends('layouts.master')

@section('assets')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/footer.css')}}">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link rel="stylesheet" href="{{asset('css/carrito.css')}}">
@endsection

@section('contenido')
<div class="container col-10">
  <section class="row">
    @if (session()->get('user.cart'))
      <article class="col-12">
      <br>
        <section class="table-responsive">
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col" class="text-center">Nombre</th>
              <th scope="col" class="text-center">Material</th>
              <th scope="col" class="text-center">Color</th>
              <th scope="col" class="text-center">Precio</th>
              <th scope="col" class="text-center">Eliminar</th>
              <th scope="col"></th>
            </tr>
          </thead>
            <tbody>
              @php
              $total = 0;
              @endphp
              @foreach (session()->get('user.cart') as $mueble)
              @php
              $total = $total + $mueble['precio'];
              @endphp
            <tr class="text-center">
              <td class="">{{$mueble['nombre']}}</td>
              <td class="">{{$mueble['material']}}</td>
              <td class="">{{$mueble['color']}}</td>
              <td class="text-center">$ {{$mueble['precio']}}</td>
              <td class=""><a href='{{route('cart.remove', $mueble['id'])}}'><i class="far fa-trash-alt" style=color:orange></i> </a> </td>
            </tr>
              @endforeach
            <tr>
              <td></td>
              <td></td>
              <td><strong>Total</strong></td>
              <td class="text-center" id="total"><strong>$ {{$total}}</strong></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </section>
    </article>
      <section class="col mb-2">
        <article class="row">
          <section class="col-sm-12  col-md-6">
            <a href='/' class="btn btn-block btn-outline-warning text-uppercase">Continuar Comprando</a>
          </section>
          <section class="col-sm-12 col-md-6 text-right">
            <a href='/confirmar_compra' class="btn btn-block btn-warning text-uppercase">Finalizar Compra</a>
          </section>
        </article>
          <br>
      </section>
            @else
            <div class='container mb-5 mt-5'>
              <h2 class='text-center mb-5 mt-5'>No tenes nada en el carrito</h2>
                <br>
                <br>
                <br>
                <br>
                <br>
                <section class="col-sm-12  col-md-6">
                  <a href='/' class="btn btn-outline-warning btn-lg">Volver</a>
                </section>
            </div>
            @endif
  </section>
</div>


<script src ="{{asset('js/cart.js')}}"></script>
@endsection
