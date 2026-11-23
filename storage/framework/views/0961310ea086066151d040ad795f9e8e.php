<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        Sign In & Sign Up
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
      </div>
      <section>
        <div class="modal-body">
          <div class="w3_login_module">
            <div class="module form-module">
              <div class="toggle"><i class="fa fa-times fa-pencil"></i>
              <div class="tooltip">Click Me</div>
              </div>
              <div class="form">
              <h3>Login to your account</h3>
              <?php if($errors->login->any()): ?>
                <div class="alert alert-danger" style="padding:8px;margin-bottom:10px"><?php echo e($errors->login->first()); ?></div>
              <?php elseif(session('open_login')): ?>
                <div class="alert alert-info" style="padding:8px;margin-bottom:10px">Silakan login terlebih dahulu.</div>
              <?php endif; ?>
              <form action="<?php echo e(route('login.post')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <input type="submit" value="Login">
              </form>
              </div>
              <div class="form">
              <h3>Create an account</h3>
              <?php if($errors->register->any()): ?>
                <div class="alert alert-danger" style="padding:8px;margin-bottom:10px">
                  <?php $__currentLoopData = $errors->register->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div><?php echo e($error); ?></div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              <?php endif; ?>
              <form action="<?php echo e(route('register.post')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="text" name="name" placeholder="Nama" required="">
                <input type="email" name="email" placeholder="Email Address" required="">
                <input type="password" name="password" placeholder="Password (min. 8 karakter)" required="">
                <input type="password" name="password_confirmation" placeholder="Ulangi Password" required="">
                <input type="submit" value="Register">
              </form>
              </div>
              
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<script>
  $('.toggle').click(function(){
    // Switches the Icon
    $(this).children('i').toggleClass('fa-pencil');
    // Switches the forms  
    $('.form').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: "toggle"
    }, "slow");
  });
</script><?php /**PATH C:\Users\zabran\laravel-kelas-xii-fixed (3)\laravel-kelas-xii-main\resources\views/templates/component/login.blade.php ENDPATH**/ ?>