<?php $__env->startSection('css'); ?>
  

    <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('linkyscrip'); ?>
<style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: linear-gradient(35deg,#000000,#2b2e53,#2F3F80,#161569,#5A4894,#A950A1,#FF7CAE);
                background-size: 500%;
                min-height: 100vh;
            }
            .navbar:hover {
                background-color: black;
            }
            .a{
                margin-right: 15px ;
                font-family: street2_medium;
                font-size: 18px;
                font-style: normal;
                text-decoration: none;
                text-transform: none;
                line-height: 20px;
                letter-spacing: 0px;
                
            }
           
        </style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('navbar'); ?>
    <div class="navbar  sticky-top navbar-light"  style="width:100%; height:70px;display:flex;">
      <div class="px-6" style="float:center">
        <a href="<?php echo e(route('home')); ?>"><h3 class="text-white" >TVMOVIE</h3></a>
        
      </div>
      <div class="px-4 " style="float: right;">
        <nav class="text-white px-3">
        <?php if(auth()->check()): ?>
            <span><a class="a text-sm text-red underline">Bienvenido <b><?php echo e(auth()->user()->name); ?></b></a></span>
            <?php if(auth()->user()->role == 'admin'): ?>
              <span><a href="peliculas" class="a text-sm text-red underline">administrar peliculas</a></span>
              <span><a href="<?php echo e(route('compras.index')); ?>" class="a text-sm text-red underline">registro de compras</a></span> 
              <span><a href="<?php echo e(route('alquileres.index')); ?>" class="a text-sm text-red underline">registro de alquileres</a></span> 
            <?php endif; ?>
            <span><a href="<?php echo e(route('login.destroy')); ?>" class="a text-sm text-red underline">Cerrar sesion</a></span>
              

          <?php else: ?>
          <span><a href="<?php echo e(route('register.index')); ?>" class="a text-sm text-red underline">Suscribete</a></span>
          <span><a href="<?php echo e(route('login.index')); ?>" class="a text-sm text-red underline">Iniciar sesión</a></span>
        <?php endif; ?>
        </nav>
      </div>  
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('contenidoPrincipal'); ?>
<div class="container mb-3 bg-white" >
    
    <a href="peliculas/create" class="btn btn-primary m-2">Agregar Pelicula</a>
    <table id="peliculas" class="table table-dark table-striped mt-4" >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Imagen</th>
                <th scope="col">Stock</th>
                <th scope="col">Precio alquiler</th>
                <th scope="col">Precio compra</th>
                <th scope="col">Disponibilidad</th>
                <th scope="col">Likes </th>
                <th scope="col">Acciones</th>
            </tr>
            <tbody>
                <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pelicula->id); ?></td>
                    <td><?php echo e($pelicula->titulo); ?></td>
                    <td><?php echo e($pelicula->descripcion); ?></td>
                    <td>
                        <img src="<?php echo e($pelicula->imagen); ?>" width="60%">
                        </td>
                    <td><?php echo e($pelicula->stock); ?></td>
                    <td><?php echo e($pelicula->precio_al); ?></td>
                    <td><?php echo e($pelicula->precio_com); ?></td>
                    <td><?php echo e($pelicula->disponivilidad); ?></td>
                    <td><?php echo e($pelicula->likes); ?></td>
                    <td>

                        <form action="<?php echo e(url('peliculas/'.$pelicula->id.'/quitar')); ?>" method='get'>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <button type="submit" class="formEliminar btn btn-danger my-2" style="width: 200px;" onclick="return confirm('¿Esta seguro de Quitar esta pelicula de las disponibles?')">Quitar</button>
                           </form>

                    <form action="<?php echo e(route('peliculas.destroy', $pelicula->id)); ?>" method="POST">
                        <a href="peliculas/<?php echo e($pelicula->id); ?>/edit" class="btn btn-info text-white my-2" style="width: 200px;">Editar</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="formEliminar btn btn-danger my-2" style="width: 200px;">Eliminar</button>
                        </form>
                    </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </thead>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scrips'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    
  <script>
        $(document).ready(function() {
            $('#peliculas').DataTable({
                "responsive": true,
                "language": {
          
          "lengthMenu": "Mostrar  _MENU_ registros por paginas",
          "zeroRecords": "NO se encontro ningun registro que coincida",
          "info": "Mostrando _TOTAL_ de _MAX_ resgistros ",
          "infoEmty": "no se encontro ningun registro",
          "search": "Buscar por titulo",
          "infoFiltered": "de un total de _MAX_ registros",
          "paginate": {
            "previous": "Anterior",
            "next": "siguiente"
          }
        }
            });
        } );

</script>  


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\movie\resources\views/pelicula/index.blade.php ENDPATH**/ ?>