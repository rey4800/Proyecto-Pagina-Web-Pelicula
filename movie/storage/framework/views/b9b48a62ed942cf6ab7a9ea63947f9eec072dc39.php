
<!--- Validamos que este con una sesion activa-->
<?php if(Auth::check() ==null): ?><!-- si no lo esta que los mande al login-->


<form action="<?php echo e(url('/login')); ?>" method='get'>
    <button type="submit" class="btn btn-success" name="comprar" value="comprar" id="comprar">Comprar</button>
 
</form>

    
<?php else: ?><!-- si este es falso que los mande a la compra-->
    

        <form action="<?php echo e(url('peliculas/'.$pelicula->id.'/buy')); ?>" method='get'>
            <?php echo csrf_field(); ?>
         
            <button type="submit" class="btn btn-success" name="comprar" value="comprar" id="comprar">Comprar</button>
            </form>
    
    

<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\movie\resources\views/pelicula/compra.blade.php ENDPATH**/ ?>