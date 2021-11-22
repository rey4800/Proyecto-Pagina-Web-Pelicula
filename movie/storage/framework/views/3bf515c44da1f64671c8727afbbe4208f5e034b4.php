<?php $__env->startSection('contenido'); ?>
    


<div class="container bg-white p-6 mt-3" style="width: 50%;">

<br><h3>Comprar Pelicula</h3><br>
<h5><u>Detalles de la Pelicula</u></h5>

<div class="form-group ">
  <label ><b>Titulo de la Pelicula: </b><?php echo e($pelicula->titulo); ?></label><br>
  <label ><b>Precio de la Pelicula: </b>$<?php echo e($pelicula->precio_com); ?></label><br>
  <label ><b>Disponibles: </b><?php echo e($pelicula->stock); ?></label><br>
</div><br>

 <!--campos ocultos para hacer las validaciones-->
 <div class="form-group col-md-1">
  <input type="hidden" class="form-control" id="stock" name="stock" value="<?php echo e($pelicula->stock); ?>">
</div>


<div class="form-group col-md-1">
  <input type="hidden" class="form-control" id="precio" name="precio" value="<?php echo e($pelicula->precio_com); ?>">
</div>

    <form action="<?php echo e(url('/peliculas/'.$pelicula->id.'/buy')); ?>" method="post">
      <?php echo csrf_field(); ?>
        <div class="form-row m-3">

          <div class="form-group col-md-4">
            
            <label for="cantidad">Cantidad que desea comprar</label>
            <input type="number"   class="form-control" id="cantidad" name="cantidad" oninput="validacion.multi()" value="1">
          </div>

          <div class="alert alert-danger"  style="display:none" role="alert" id="mensajeCantidad">
          La cantidad no puede superar el stock
          </div>
        

         
  

        <br><h5><u>Informacion de Pago</u></h5><br>

        <div class="form-group col-md-3">
          <label for="nombre">Total</label>
          <input type="text" class="form-control" id="total" name="total" placeholder="" value="<?php echo e($pelicula->precio_com); ?>">
        </div><br>

        <div class="form-group ">
          <label for="nombre">Propietario de la tarjeta</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Juan Carlos">
        </div><br>
        
        <div class="form-group col-md-5">
          <label for="tarjeta">Número de Tarjeta</label>
          <input type="text" class="form-control" id="tarjeta" name="tarjeta" placeholder="0000-0000-0000-00000">
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

        <button type="submit"  class="btn btn-primary" id="comprar"  onclick="return confirm('Quieres Realizar la compra?')">Realizar Compra</button>
      </form>


      
</div>


<script  src="<?php echo e(asset('js/compras.js')); ?>"></script>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\13\movie\resources\views/buy/create.blade.php ENDPATH**/ ?>