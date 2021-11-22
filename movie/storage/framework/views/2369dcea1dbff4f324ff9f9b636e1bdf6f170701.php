<?php $__env->startSection('contenido'); ?>
    


<?php $__env->startSection('contenidoPrincipal'); ?>
<div class="container" >
    
    <form action="<?php echo e(url('peliculas/'.$pelicula->id.'/cancelar')); ?>" method="get">
        <?php echo csrf_field(); ?>
        <?php echo e(method_field('DELETE')); ?>

       <button type="submit" class="btn btn-primary"  name="devolver" id="devolver">Pagar todas las multas</button>
       </form>


    <table id="peliculas" class="table table-dark table-striped mt-4" >
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Precio de Alquiler</th>
                <th scope="col">Fecha Limite de Entrega</th>
                <th scope="col">Fecha en la que fue Entregada</th>
                <th scope="col">Multa</th>
                <th scope="col">Monto</th>    
              
            </tr>
            <tbody>
                <?php $__currentLoopData = $multa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($multa->titulo); ?></td>
                    <td><?php echo e($multa->precio_al); ?></td>
                    <td><?php echo e($multa->fecha_f); ?></td>
                    <td><?php echo e($multa->fecha_e); ?></td>
                    <td><?php echo e($multa->multa); ?></td>
                    <td><?php echo e($multa->monto_multa); ?></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </thead>
    </table>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\movie\resources\views/rent/show.blade.php ENDPATH**/ ?>