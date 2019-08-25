<section class="container">
<div class="card-deck row mt-5">
   <?php foreach ($muebles as $key => $mueble) : ?>
     <div class="col-md-4 mb-5">
       <div class="card">
         <img src="/storage/app/public/img/<?= $mueble['foto']?>" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"><?= $mueble['nombre']?>-</h5>
           <p class="card-text">
             Alto: <?= $mueble['alto']?> cm <br>
             Ancho: <?= $mueble['ancho']?> cm<br>
             Profundidad:<?= $mueble['profundidad']?> cm<br>
             Madera: <?= $mueble['material']?> <br>
             Precio: <?= $mueble['precio']?> $<br>
           </p>
         </div>
         <div class="card-footer">EN STOCK</div>
       </div>
     </div>
   <?php endforeach ?>
</div>
</section>
