
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="id">

<?php echo $__env->make('templates.component.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	
<body>
<!-- header -->
<?php echo $__env->make('templates.component.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- //header -->
<!-- bootstrap-pop-up -->
<?php echo $__env->make('templates.component.login', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- //bootstrap-pop-up -->
<!-- nav -->
<?php echo $__env->make('templates.component.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- //nav -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav>
</div>
<?php if(session('success')): ?>
  <div class="container" style="margin-top:15px"><div class="alert alert-success"><?php echo e(session('success')); ?></div></div>
<?php endif; ?>
<?php if(session('error')): ?>
  <div class="container" style="margin-top:15px"><div class="alert alert-danger"><?php echo e(session('error')); ?></div></div>
<?php endif; ?>
<!-- /w3l-medile-movies-grids -->
<?php echo $__env->yieldContent('content'); ?>
	<!-- //comedy-w3l-agileits -->
<!-- footer -->
	<?php echo $__env->make('templates/component/footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->

<script src="<?php echo e(asset('template/js/bootstrap.min.js')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
<script>
	$(document).ready(function(){
		$(".dropdown").hover(            
			function() {
				$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
				$(this).toggleClass('open');        
			},
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
					}
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
		</script>
<!-- //here ends scrolling icon -->
<?php if(session('open_login') || $errors->login->any() || $errors->register->any()): ?>
<script>
  // buka modal login otomatis (setelah error validasi / saat diminta login)
  $(document).ready(function () {
    $('#myModal').modal('show');
    <?php if($errors->register->any()): ?>
      $('.toggle').click(); // tampilkan form register
    <?php endif; ?>
  });
</script>
<?php endif; ?>
</body>
</html><?php /**PATH C:\Users\zabran\laravel-kelas-xii-fixed (3)\laravel-kelas-xii-main\resources\views/templates/index.blade.php ENDPATH**/ ?>