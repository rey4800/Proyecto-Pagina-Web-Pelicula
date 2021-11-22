

<?php if(Auth::check() ==null): ?>


<form action="<?php echo e(url('/login')); ?>" method='get'>
    <button type="submit" class="btn btn-success" name="comprar" value="comprar" id="comprar">Comprar</button>
 
</form>

    
<?php else: ?>
    

        <form action="<?php echo e(url('peliculas/'.$pelicula->id.'/buy')); ?>" method='get'>
            <?php echo csrf_field(); ?>
         
            <button type="submit" class="btn btn-success" name="comprar" value="comprar" id="comprar">Comprar</button>
            </form>
    
    

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\13\movie\resources\views/pelicula/compra.blade.php ENDPATH**/ ?>