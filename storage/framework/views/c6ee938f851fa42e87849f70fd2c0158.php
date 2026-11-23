<div class="header">
  <div class="container">
    <div class="w3layouts_logo">
      <a href="<?php echo e(route('home')); ?>"><h1>One<span>Movies</span></h1></a>
    </div>
    <div class="w3_search">
      <form action="<?php echo e(route('movies')); ?>" method="get">
        <input type="text" name="q" value="<?php echo e(request('q')); ?>" placeholder="Search" required="">
        <input type="submit" value="Go">
      </form>
    </div>
    <div class="w3l_sign_in_register">
      <ul>
        <?php if(auth()->guard()->check()): ?>
          <?php if(auth()->user()->isAdmin()): ?>
            <li><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
          <?php endif; ?>
          <li><a href="<?php echo e(route('watchlist.index')); ?>"><i class="fa fa-bookmark"></i> Watchlist</a></li>
          <li><a href="<?php echo e(route('profile.show')); ?>"><?php echo e(auth()->user()->name); ?></a></li>
          <li>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display:none"><?php echo csrf_field(); ?></form>
          </li>
        <?php else: ?>
          <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<?php /**PATH C:\Users\zabran\laravel-kelas-xii-fixed (3)\laravel-kelas-xii-main\resources\views/templates/component/header.blade.php ENDPATH**/ ?>