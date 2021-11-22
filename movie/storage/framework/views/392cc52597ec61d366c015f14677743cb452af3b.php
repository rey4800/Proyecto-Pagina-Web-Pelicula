

<?php if(Auth::check() ==null): ?>


<form action="<?php echo e(url('/login')); ?>" method='get'>
  

    <button type="submit" class="btn btn-outline-light" name="like" value="like">Me gusta</button>
</form>

    
<?php else: ?>
    

    <?php if($pelicula->bandera<=0): ?>

        <form action="<?php echo e(url('peliculas/'.$pelicula->id.'/like')); ?>" method='get'>
            <?php echo csrf_field(); ?>

            <button type="submit" class="btn btn-outline-light" name="like" value="like">Me gusta</button>
            </form>
    
        <?php else: ?>

            <form action="<?php echo e(url('peliculas/'.$pelicula->id.'/like')); ?>" method='get'>
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-light" name="like" value="like"> Quitar me gusta</button>
            </form>
    
    <?php endif; ?>


<?php endif; ?>


    


<?php /**PATH C:\xampp\htdocs\13\movie\resources\views/pelicula/like.blade.php ENDPATH**/ ?>