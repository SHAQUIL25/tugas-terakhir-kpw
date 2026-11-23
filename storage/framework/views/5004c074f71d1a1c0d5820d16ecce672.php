<div class="movies_nav">
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="navbar-header navbar-right">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <nav>
          <ul class="nav navbar-nav">
            <li class="w3_home_act <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>"><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li class="dropdown <?php echo e(request()->routeIs('genre') ? 'active' : ''); ?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
              <ul class="dropdown-menu multi-column columns-3">
                <li>
                  <?php $__currentLoopData = $genres->chunk(7); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><a href="<?php echo e(route('genre', $genre->id)); ?>"><?php echo e($genre->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <div class="clearfix"></div>
                </li>
              </ul>
            </li>
            <li class="w3_home_act <?php echo e(request()->routeIs('movies') ? 'active' : ''); ?>"><a href="<?php echo e(route('movies')); ?>">Movies</a></li>

          </ul>
        </nav>
      </div>
    </nav>	
  </div>
</div><?php /**PATH C:\Users\zabran\laravel-kelas-xii-fixed (3)\laravel-kelas-xii-main\resources\views/templates/component/navbar.blade.php ENDPATH**/ ?>