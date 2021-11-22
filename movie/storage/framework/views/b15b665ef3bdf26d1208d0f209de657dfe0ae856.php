 

 <?php $__env->startSection('contenidoPrincipal'); ?>
 
 <div class="row vh-100 row-cols-1 row-cols-md-2 g-1 m-0" style="width: 100%;" >
     <!-------------------------------- Parte izquierda ---------------------------------------->
     <div class="col m-0" style="  background-image: linear-gradient(35deg,#000000,#2b2e53,#2F3F80,#161569,#5A4894,#A950A1,#FF7CAE);
                 background-size: 500%;">
         <div class="row row-vh-100 row-cols-md-vh-50 g-1  align-items-center h-100" >
         
             <div class="text-center">
                 
                 <!--<img class="mb-3" src="img/ues.png" style="width: 50%;">-->
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
                     
                     <div class="border bg-white ">
                         
                         <div style="background-color: rgba(59,168,231,255);">
                             <h3 class="text-center p-3 text-white">Nuevo Usuario</h3>
                         </div>
                         <?php if(isset($_GET["code"]) && $_GET["code"]=="error"): ?>
 
                            <div class= "alert alert-danger">Error el correo electronico ya esta registrado</div>

                            <?php endif; ?>
                         <!--------------------formulario----------------------------->
                         <form class="m-2" method="post">
                         <?php echo csrf_field(); ?>
                             <div class="mb-3">
                                 <label for="" class="form-label">Nombre</label>
                                 <input id="name" name="name" type="text" class="form-control" >
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
                                 <input id="email" name="email" type="email" class="form-control" >
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
                                 <input id="password" name="password" type="password" class="form-control" >
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
                                 <label for="" class="form-label">Contraseña</label>
                                 <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" >
                             </div>
 
                             <div class="d-grid gap-2 col-5 mx-auto text-white">
                             <input  id="registrar" class="btn btn-info text-white" type="submit" value="REGISTRARSE" onclick="return validacion()" ><br><br>
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
 
 

 <script>

function validacion() {
   
   let name = document.querySelector("#name").value;
   let email = document.querySelector("#email").value;
 
   let password = document.querySelector("#password").value;
   let password2 = document.querySelector("#password_confirmation").value;

   if (name.length === 0) {
       alert("El nombre no debe estar vacio")
       return false;
       
   }

   if (email.length === 0) {
       alert("El email no debe estar vacio")
       
       
       return false;

   }

   if (password.length === 0) {
       alert("El password no debe estar vacio")
       return false;
       
   }

   if (password2.length === 0) {
       alert("La confirmacion de contraseña no debe estar vacia")
       return false;
       
   }
    if (password != password2) 
    {
       alert("Las contraseñas no son iguales1")
       return false;
    }


  
}
 </script>
 <?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\20\movie\resources\views/auth/register.blade.php ENDPATH**/ ?>