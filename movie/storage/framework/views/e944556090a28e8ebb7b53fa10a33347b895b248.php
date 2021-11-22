 

 <?php $__env->startSection('contenidoPrincipal'); ?>
 
 <div class="row vh-100 row-cols-1 row-cols-md-2 g-1 m-0" style="width: 100%;" >
     <!-------------------------------- Parte izquierda ---------------------------------------->
     <div class="col m-0" style="  background-image: linear-gradient(35deg,#000000,#2b2e53,#2F3F80,#161569,#5A4894,#A950A1,#FF7CAE);
                 background-size: 500%;">
         <div class="row row-vh-100 row-cols-md-vh-50 g-1  align-items-center h-100" >
         
             <div class="text-center">
                 
                 
                 <a href="<?php echo e(route('home')); ?>"><h1 class="text-center text-white "> TV MOVIE</h1></a>
             </div>   
         </div>
     </div>
     <!-------------------------------- parte derecha ---------------------------------------->
     <div class="col m-0" style=" background: url(img/4.jpg) no-repeat;
     background-size: cover;">
         <div class="row  row-vh-100 row-cols-md-vh-50 g-1 align-items-center justify-content-center h-100">
                 <div class="col-8 col-md-6 text  ">
                     <div class="text-center">
                         <img class="mb-3 text-center" src="img/lg.png" style="width: 40%;">
                     </div>
                     
                     <div class="border bg-white mb-3">
                         
                         <div style="background-color: rgba(59,168,231,255);">
                             <h3 class="text-center p-3 text-white">Nuevo Usuario</h3>
                         </div>
                         <?php if(isset($_GET["code"]) && $_GET["code"]=="error"): ?>
 
                            <div class= "alert alert-danger">Error el correo electronico ya esta registrado</div>

                            <?php endif; ?>
                         <!--------------------formulario----------------------------->
                         <form class="m-2 " method="post">
                         <?php echo csrf_field(); ?>
                             <div class="mb-3">
                                 <label for="" class="form-label">Nombre</label>
                                 <input id="name" name="name" type="text" class="form-control"   oninput="validacion.multi()">
                             </div>
                              <!--div oculto para hacer las validaciones-->
                             <div class="alert alert-danger mb-2"  style="display:block" role="alert" id="mensaje1">
                                Rellena el campo 
                            </div>
                             <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <p class="border border-danger border-3 rounded text-danger"> <?php echo e($message); ?></p>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
 
                             <div class="mb-3">
                                 <label for="" class="form-label">Email</label>
                                 <input id="email" name="email" type="email" class="form-control"  oninput="validacion.multi()">
                             </div>
                              <!--div oculto para hacer las validaciones-->
                             <div class="alert alert-danger mb-2"  style="display:block" role="alert" id="mensaje2">
                                Rellena el campo 
                            </div>
                             <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <p class="border border-danger border-3 rounded text-danger"> <?php echo e($message); ?></p>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                             
                             
                             <div class="mb-3">
                                 <label for="" class="form-label">Contraseña</label>
                                 <input id="password" name="password" type="password" class="form-control"  oninput="validacion.multi()" >
                             </div>
                              <!--div oculto para hacer las validaciones-->
                             <div class="alert alert-danger mb-2"  style="display:block" role="alert" id="mensaje3">
                                Rellena el campo 
                            </div>
                             <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <p class="border border-danger border-3 rounded text-danger"> <?php echo e($message); ?></p>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                             <div class="mb-3">
                                 <label for="" class="form-label">Repita Contraseña</label>
                                 <input id="password_confirmation" name="password_confirmation" type="password" class="form-control"  oninput="validacion.multi()" >
                             </div>
                             <div class="alert alert-danger mb-2"  style="display:block" role="alert" id="mensaje4">Rellena el campo</div>
                             <div class="alert alert-danger mb-2"  style="display:none" role="alert" id="mensaje5"></div>
                             <div class="alert alert-danger mb-2"  style="display:none" role="alert" id="mensaje6"></div>
 
                             <div class="d-grid gap-2 col-5 mx-auto text-white">
                             <input  id="registrar" class="btn btn-info text-white" type="submit" value="REGISTRARSE" disabled >
                             </div>
                         <hr>
                         <div class="text-center">
                             <p>¿Ya tienes cuenta?  <a href="<?php echo e(route('login.index')); ?>">¡Ingresa aqui!</a> </p>
                         </div>
                         </form>
                     </div>
                 </div>  
         </div>
     </div>
 </div>
 
 <script src="<?php echo e(asset('js/register.js')); ?>"></script>


 <?php $__env->stopSection(); ?>




<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\movie\resources\views/auth/register.blade.php ENDPATH**/ ?>