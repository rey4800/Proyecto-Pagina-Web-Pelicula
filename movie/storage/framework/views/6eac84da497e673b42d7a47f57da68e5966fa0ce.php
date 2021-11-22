<?php $__env->startSection('contenido'); ?>
    


<div class="container bg-white p-6 mt-3" style="width: 50%;">

<br><h3>Alquiler de Pelicula</h3><br>
<h5><u>Detalles de la Pelicula</u></h5>

<div class="form-group ">
  <label ><b>Titulo de la Pelicula: </b><?php echo e($pelicula->titulo); ?></label><br>
  <label ><b>Precio de Alquiler x 7 dias: </b>$<?php echo e($pelicula->precio_al); ?></label><br>
  <label ><b>Disponibles: </b><?php echo e($pelicula->stock); ?></label><br>
</div><br>



    <form action="<?php echo e(url('/peliculas/'.$pelicula->id.'/rent')); ?>" method="post">
      <?php echo csrf_field(); ?>
        <div class="form-row m-3">

     

        <br><h5><u>Informacion de Pago</u></h5><br>

        <div class="form-group col-md-3">
          <label for="nombre">Monto ($):</label>
          <input type="text" class="form-control" id="precio_al" name="precio_al"   value="<?php echo e($pelicula->precio_al); ?>"  readonly>
        </div><br>

        <div class="form-group ">
          <label for="nombre">Propietario de la tarjeta</label>
          <input type="text" class="form-control" id="nombre"  placeholder="Juan Carlos...">
        </div><br>
        
        <div class="form-group col-md-5">
          <label for="tarjeta">Número de Tarjeta</label>
          <input type="text" class="form-control" id="tarjeta"  placeholder="0000-0000-0000-0000">
        </div><br>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="">Fecha de Vencimiento</label>
          </div>
          <div class="form-group col-md-4">
            <select id="mes"  class="form-control">
              <option selected>Mes</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
            </select>
          </div><br>

          <div class="form-group col-md-4">
            <select id="anio"  class="form-control">
              <option selected>Año</option>
              <option>2022</option>
              <option>2023</option>
              <option>2024</option>
              <option>2025</option>
              <option>2026</option>
              <option>2027</option>
            </select>
          </div><br>

          <div class="form-group col-md-2">
            <label for="cvv">CVV</label>
            <input type="number" step="000" class="form-control" id="cvv" >
          </div>
        </div><br><br>

        <button type="submit"  class="btn btn-primary" id="comprar"  onclick="return confirm('Quieres Alquilar la Pelicula <?php echo e($pelicula->titulo); ?>?')">Alquilar</button>
      </form>


      
</div>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\20\movie\resources\views/rent/create.blade.php ENDPATH**/ ?>