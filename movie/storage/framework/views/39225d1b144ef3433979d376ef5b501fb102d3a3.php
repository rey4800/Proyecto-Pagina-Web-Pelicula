

<?php //si ha iniciado sesion?>
<?php if(auth()->check()): ?>




<?php //si es administrador?>
<?php if(auth()->user()->role == 'admin'): ?>

<div class="container mt-5 text-white">
    <!-- Bloque para buscar peliculas-->
       <div class="row mt-5">
           <div class="col-5">
               
                   <form class="#" action="<?php echo e(url('/buscar')); ?>" method="get">
                     <input class="form-control mr-sm-2" type="input" name="buscar" placeholder="Buscar por titulo" aria-label="Search"><br>
                     <button type="submit" class="btn btn-dark my-2 my-sm-0">Buscar</button>
                   </form><br>

                  <h6>Filtrar</h6>
                   <form class="#" action="<?php echo e(url('/buscar')); ?>" method="get">
                    <select class="form-select"  aria-label="Default select example" name="buscar" onchange="this.form.submit()">
                      <option selected>Todas</option>
                      <option  value="1">Todas</option>
                      <option name value="2">Disponibles</option>
                      <option name value="3">No disponible</option>
                    </select>
                  </form>
           </div>
           
       </div>
   
       <!-- Bloque para mostrar peliculas-->
       <div class="mt-3">
         <h3>PELICULAS</h3>
       </div>
            <div class="row row-cols-1 row-cols-md-4 g-5">
              <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col text-center mt-5">
                  <h5 class="card-title"><?php echo e($pelicula->titulo); ?></h5>
                  <img style="height:300px; width:80%" src="<?php echo e($pelicula->imagen); ?>">
                  <div class="card-body">
                    <p ><?php echo e($pelicula->likes); ?> Me gusta</p>
                    <a  href="peliculas/<?php echo e($pelicula->id); ?>">Ver mas</a>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </div> 
   
   </div>
   


   
<?php //si no es administrador?>
<?php else: ?>

<div class="container mt-5 text-white">
 <!-- Bloque para buscar peliculas-->
    <div class="row mt-5">
        <div class="col-5">
            
                <form class="#" action="<?php echo e(url('/buscar')); ?>" method="get">
                  <input class="form-control mr-sm-2" type="input" name="buscar" placeholder="Buscar por titulo" aria-label="Search"><br>
                  <button type="submit" class="btn btn-dark my-2 my-sm-0">Buscar</button>
                </form>
        </div>
        
    </div>

    <!-- Bloque para mostrar peliculas-->
    <div class="mt-3">
      <h3>PELICULAS</h3>
    </div>
            <div class="row row-cols-1 row-cols-md-4 g-5">
              <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($pelicula->disponivilidad == 'si' ): ?>
                <div class="col text-center mt-5">
                    <h5 class="card-title"><?php echo e($pelicula->titulo); ?></h5>
                    <img style="height:300px; width:80%" src="<?php echo e($pelicula->imagen); ?>">
                    <div class="card-body">
                      <p class="text-white"><?php echo e($pelicula->likes); ?> Me gusta</p>
                      <a class="text-white" href="peliculas/<?php echo e($pelicula->id); ?>">Ver mas</a>
                  </div>
                </div>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </div>  

</div>


<?php endif; ?>

<?php //si no esta logueado?>
<?php else: ?>





<div class="container mt-5 text-white ">
    <!-- Bloque para buscar peliculas-->
       <div class="row mt-5">
           <div class="col-5">
               
                   <form class="#" action="<?php echo e(url('/buscar')); ?>" method="get">
                     <input class="form-control mr-sm-2" type="input" name="buscar" placeholder="Buscar por titulo" aria-label="Search"><br>
                     <button type="submit" class="btn btn-dark my-2 my-sm-0">Buscar</button>
                   </form>
           </div>
           
       </div>
   
       <!-- Bloque para mostrar peliculas-->
        <div class="mt-3">
          <h3>PELICULAS</h3>
        </div>
            <div class="row row-cols-1 row-cols-md-4 g-5">
              <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($pelicula->disponivilidad == 'si' ): ?>
                <div class="col text-center mt-5">
                    <h5 class="card-title"><?php echo e($pelicula->titulo); ?></h5>
                    <img style="height:300px; width:80%" src="<?php echo e($pelicula->imagen); ?>">
                    <div class="card-body">
                      <p class="text-white"><?php echo e($pelicula->likes); ?> Me gusta</p>
                      <a class="text-white" href="peliculas/<?php echo e($pelicula->id); ?>">Ver mas</a>
                  </div>
                </div>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
            </div> 


         
   
   </div>
   


<?php endif; ?>





<?php /**PATH C:\xampp\htdocs\movie\resources\views/pelicula/all.blade.php ENDPATH**/ ?>