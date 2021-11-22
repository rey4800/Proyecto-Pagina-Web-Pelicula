<?php $__env->startSection('contenido'); ?>

<div class="container bg-white p-6 my-3 ">
  <div class="row text-center">
    <h2>RENTA DE LA PELICULA</h2>
  </div>
  <div class="row">
    <div class="col-md-4 g-6">
      <h4><u>Detalles de la Pelicula</u></h4>
      <div class="form-group mb-3">
        <label ><b>Titulo de la Pelicula: </b><?php echo e($pelicula->titulo); ?></label><br>
        <label ><b>Renta de la Pelicula x7 dias: </b>$<?php echo e($pelicula->precio_al); ?></label><br>
        <label ><b>Disponibles: </b><?php echo e($pelicula->stock); ?></label><br>
      </div>
      <img src="<?php echo e(asset($pelicula->imagen)); ?>" class='w-100'>
    </div>
    <div class="col-md-4">
     
    <form action="<?php echo e(url('/peliculas/'.$pelicula->id.'/rent')); ?>" method="post">
      <?php echo csrf_field(); ?>
        <div class="form-row m-3">
          <h4><u>Informacion de pago</u></h4>
        <div class="form-group col-md-3">
          <label for="nombre">Monto ($):</label>
          <input type="text" class="form-control" id="precio_al" name="precio_al"   value="<?php echo e($pelicula->precio_al); ?>"  readonly>
        </div><br>

        <div class="form-group ">
          <label for="nombre">Propietario de la tarjeta</label>
          <input type="text" class="form-control" id="nombre"  placeholder="Juan Carlos..." oninput="validacion.multi2()">
        </div>
        <div class="alert alert-danger mb-2"  style="display:block" role="alert" id="mensaje1"  >
          Rellena el campo 
        </div><br>
        
        <div class="form-group ">
          <label for="tarjeta">Número de Tarjeta</label>
          <input type="text" class="form-control" id="tarjeta"  placeholder="0000-0000-0000-0000"  oninput="validacion.multi2()">
        </div>
        <div class="alert alert-danger mb-2"  style="display:block" role="alert" id="mensaje2">
          Rellena el campo 
        </div><br>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="">Fecha de Vencimiento</label>
          </div>
          <div class="form-group col-md-4">
            <select id="mes"  class="form-control" oninput="validacion.multi2()" >
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
          </div>
          <div class="alert alert-danger mb-2"  style="display:block" role="alert" id="mensaje3">
            Rellena el campo 
          </div><br>

          <div class="form-group col-md-4">
            <select id="anio"  class="form-control" oninput="validacion.multi2()" >
              <option selected>Año</option>
              <option>2022</option>
              <option>2023</option>
              <option>2024</option>
              <option>2025</option>
              <option>2026</option>
              <option>2027</option>
            </select>
          </div>
          <div class="alert alert-danger mb-2"  style="display:block" role="alert" id="mensaje4">
            Rellena el campo 
          </div><br>

          <div class="form-group col-md-2">
            <label for="cvv">CVV</label>
            <input type="number" step="000" class="form-control" id="cvv" oninput="validacion.multi2()" >
          </div>
        </div><br><div class="alert alert-danger mb-2"  style="display:block" role="alert" id="mensaje5">
            Rellena el campo 
          </div><br>

        <button disabled type="submit"  class="btn btn-primary" id="comprar"  onclick="return confirm('Quieres Alquilar la Pelicula <?php echo e($pelicula->titulo); ?>?')">Alquilar</button>
        </div>
      </form>
    </div>
    <div class="col-md-4">
      <div class="text-center"><h4><u>Terminos y condiciones</u></h4></div>
      
    </div>
    
  </div>
  
</div>




<script  src="<?php echo e(asset('js/renta.js')); ?>"></script>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\movie\resources\views/rent/create.blade.php ENDPATH**/ ?>