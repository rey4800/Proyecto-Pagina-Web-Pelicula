
<?php if(Auth::check() ==null): ?>


<form action="<?php echo e(url('/login')); ?>" method='get'>
    <button type="submit" class="btn btn-info" name="alquilar" value="alquilar" id="alquilar">Alquilar</button>
 
</form>

    
<?php else: ?>
    

        <form action="#" method='get'>
            <?php echo csrf_field(); ?>
         
            <button type="submit" class="btn btn-info" name="alquilar" value="alquilar" id="alquilar">Alquilar</button>
            </form>
    
    

<?php endif; ?><?php /**PATH C:\xampp\htdocs\movie\resources\views/pelicula/alquilar.blade.php ENDPATH**/ ?>