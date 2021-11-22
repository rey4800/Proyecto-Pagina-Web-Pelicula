<?php $__env->startSection('linkyscrip'); ?>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
        <script>
            window.addEventListener('load',function(){
                document.querySelector('.glider').addEventListener('glider-slide-visible', function(event){
                    var glider = Glider(this);
                    console.log('Slide Visible %s', event.detail.slide)
                });
                document.querySelector('.glider').addEventListener('glider-slide-hidden', function(event){
                    console.log('Slide Hidden %s', event.detail.slide)
                });
                document.querySelector('.glider').addEventListener('glider-refresh', function(event){
                    console.log('Refresh')
                });
                document.querySelector('.glider').addEventListener('glider-loaded', function(event){
                    console.log('Loaded')
                });
                for (let i = 0; i < 3; i++) {
                    
                    window._ = new Glider(document.querySelector('.glider'+[i]), {
                    slidesToShow: 1, //'auto',
                    slidesToScroll: 1,
                    itemWidth: 150,
                    draggable: true,
                    scrollLock: false,
                   
                    rewind: true,
                    arrows: {
                        prev: '.prev'+[i],
                        next: '.next'+[i]
                    },
                    responsive: [
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToScroll: 'auto',
                                itemWidth: 300,
                                slidesToShow: 'auto',
                                exactWidth: true
                            }
                        },
                        {
                            breakpoint: 700,
                            settings: {
                                slidesToScroll: 4,
                                slidesToShow: 4,
                                dots: false,
                                arrows: false,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToScroll: 3,
                                slidesToShow: 3
                            }
                        },
                        {
                            breakpoint: 500,
                            settings: {
                                slidesToScroll: 2,
                                slidesToShow: 2,
                                dots: false,
                                arrows: false,
                                scrollLock: true
                            }
                        }
                    ]
                });
                }
               
            });
        </script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: linear-gradient(35deg,#000000,#2b2e53,#2F3F80,#161569,#5A4894,#A950A1,#FF7CAE);
                background-size: 500%;
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
            .navbar:hover {
                background-color: black;
            }
            .video{
                
                width: 100%; height: 100%; 
                text-align: center;
            }
            .glider-contain {
             
            width: 100%;
            max-width: 95%;
            margin: 20px auto;

            }
            .glider-slide {
                min-height: 150px;
            }
            .glider-slide img {
                padding: 0 10px;
                width: 100%;
            }
            .p{
                font-family: street2_medium; font-size: 22px;font-style: normal;text-decoration: none;text-transform: none;line-height: 34px;letter-spacing: 0px;color: rgb(240, 240, 240);
            }
           
        </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    <div class="navbar  sticky-top navbar-light"  style="width:100%; height:70px;display:flex;position:fixed;">
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
                <!-- Video presentacion-->
                <div class="video">
                    <video autoplay width="100%" height="50px" muted >
                        <source src="<?php echo e(asset('videos/Arcane.mp4')); ?>" type='video/mp4'>
                    </video>
                </div>

            <!-- Carrusel principal --> 

        
            <?php echo $__env->make('pelicula.all', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>







            
            <div class="glider-contain" style="display: none">
                <div class="px-4 text-white"><p class="p">Top El Salvador</p></div>
                <div class="glider glider0">
                    <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($pelicula->id > '0' && $pelicula->id < '15' && $pelicula->disponivilidad == 'si' ): ?>
                        
                        <div class="text-center" style="width: 250px;heigth:300px" >
                        <img style="height: 200px; width:100%" src="<?php echo e($pelicula->imagen); ?>">
                        <p class="text-white"><?php echo e($pelicula->likes); ?> Me gusta</p>
                      <a class="text-white" href="peliculas/<?php echo e($pelicula->id); ?>">Ver mas</a>
                    </div>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                    
                </div>
                <button class="glider-prev prev0">&laquo;</button>
                <button class="glider-next next0">&raquo;</button>
                
            </div>
             <!-- Carrusel Terror --> 
            <div class="glider-contain" style="display: none">
                <div class="px-4 text-white"><p class="p"></p></div>
                <div class="glider glider1">
                    <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($pelicula->id > '16' && $pelicula->id < '30' && $pelicula->disponivilidad == 'si' ): ?>
                      
                      <div class="text-center" style="width: 250px;heigth:300px" ><img style="height: 200px; width:100%" src="<?php echo e($pelicula->imagen); ?>"><a class="text-white" href="#">Ver mas</a></div>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                    
                </div>
            </div>
            
             <!-- Spiderman --> 
            <div class="container" >
                <div class="row">
                    <div class="col-6 align-self-center text-center py-3 text-white">
                        <h1>Spiderman</h1>
                        <h3>Secuela de "Spider-Man: Lejos de casa" basada en los cómics de Stan Lee y Steve Ditko.</h3>
                        <a class="text-danger" href="#">Ver mas</a>
                    </div>
                    <div class="col-6">
                        <div style="width: 100%;">
                            <video  controls width="100%" height="50px" >
                                <source src="<?php echo e(asset('videos/Spiderman.mp4')); ?>" type='video/mp4'>
                            </video>
                        </div>
                    </div>
                    
                </div>
            </div>
             <!-- Carrusel Risa --> 
          
            </div><br><br>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <footer class="bg-light text-center text-lg-start text-white mt-5">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: black;">
                © 2020 Copyright: TVMOVIE
                
            </div>
            <!-- Copyright -->
    </footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\movie\resources\views/home.blade.php ENDPATH**/ ?>