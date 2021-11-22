<?php if(Auth::check() ==null): ?>


<form action="<?php echo e(url('/login')); ?>" method='get'>
    <button type="submit" class="btn btn-info" name="alquilar" value="alquilar" id="alquilar">Alquilar</button>
 
</form>

    
<?php else: ?>



<?php if($pelicula->multas <= 0): ?>

            <?php if($pelicula->banderas<=0): ?>

                  <form action="<?php echo e(url('peliculas/'.$pelicula->id.'/rent')); ?>" method='get'>
                     <?php echo csrf_field(); ?>
             
                    <button type="submit" class="btn btn-info" name="alquilar" id="alquilar">Alquilar</button>
                    </form>
    
            <?php else: ?>

            <form action="<?php echo e(url('peliculas/'.$pelicula->id.'/regresar')); ?>" method="get">
                <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-warning" id="alquilar">Pelicula Alquilada</button>
            <br><br><br>
            <label for="" class="form-label">Devolver antes de: </label>
            <br><label class="p-1 mb-3 bg-danger text-white"  ><?php echo e($pelicula->fecha_f); ?></label><br>
             <button type="submit" class="btn btn-primary"  name="devolver" id="devolver">Regresar Pelicula</button>
            </form>
            <br>
    
            <?php endif; ?>
    
    <?php else: ?>

    <?php if($pelicula->banderas>0): ?>
            <form action="<?php echo e(url('peliculas/'.$pelicula->id.'/regresar')); ?>" method="get">
             <?php echo csrf_field(); ?>
             <button type="submit" class="btn btn-warning" id="alquilar">Pelicula Alquilada</button>
            <br><br><br>
             <label for="" class="form-label">Devolver antes de: </label>
             <br><label class="p-1 mb-3 bg-danger text-white"  ><?php echo e($pelicula->fecha_f); ?></label><br>
             <button type="submit" class="btn btn-primary"  name="devolver" id="devolver">Regresar Pelicula</button>
            </form>
            <br>

            <h4>Para volver a alquilar debe pagar las multas</h4>
            <br>
             <form action="<?php echo e(url('peliculas/'.$pelicula->id.'/multas')); ?>" method="get">
                 <?php echo csrf_field(); ?>
                <label for="" class="form-label">Pagar Multa por retraso en devolver la Pelicula: </label>
                <button type="submit" class="btn btn-primary"  name="devolver" id="devolver">Pagar Multas</button>
                </form>
            <br>

                
            <?php else: ?>

            <h4>Para volver a alquilar debe pagar las multas</h4>
            <br>
             <form action="<?php echo e(url('peliculas/'.$pelicula->id.'/multas')); ?>" method="get">
                 <?php echo csrf_field(); ?>
                <label for="" class="form-label">Pagar Multa por retraso en devolver la Pelicula: </label>
                <button type="submit" class="btn btn-primary"  name="devolver" id="devolver">Pagar Multas</button>
                </form>
            <br>
                
            <?php endif; ?>

    
<?php endif; ?>

<?php endif; ?>


<?php /**PATH C:\xampp\htdocs\movie\resources\views/pelicula/rentar.blade.php ENDPATH**/ ?>