<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

    <section class="slider mt-4">
	<div class="container-fluid">
		<div class="row no-gutters">
			<div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">


	            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="slider-item">
    <div class="slider-item-content">

        <div class="post-thumb mb-4">
            <a href="#">
                <img src="<?php echo e(asset($slider['image'])); ?>" class="img-fluid">
            </a>
        </div>

        <div class="slider-post-content">
            <span class="cat-name"><?php echo e($slider['category']); ?></span>

            <h3 class="post-title mt-1">
                <a href="#"><?php echo e($slider['title']); ?></a>
            </h3>

            <span class="text-muted"><?php echo e($slider['date']); ?></span>
        </div>

    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
		</div>
	</div>
</section>

<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">

	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-lg-3 col-md-6">
    <article class="post-grid mb-5">

        <a class="post-thumb mb-4 d-block" href="#">
            <img src="<?php echo e(asset($post['image'])); ?>" class="img-fluid w-100">
        </a>

        <span class="cat-name"><?php echo e($post['category']); ?></span>

        <h3 class="post-title mt-1">
            <a href="#"><?php echo e($post['title']); ?></a>
        </h3>

        <span class="text-muted"><?php echo e($post['date']); ?></span>

    </article>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
			</div>

			<div class="m-auto">
				<div class="pagination mt-5 pt-4">
					<ul class="list-inline ">
						<li class="list-inline-item"><a href="#" class="active">1</a></li>
						<li class="list-inline-item"><a href="#">2</a></li>
						<li class="list-inline-item"><a href="#">3</a></li>
						<li class="list-inline-item"><a href="#" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="footer-2 section-padding gray-bg pb-5">
	<div class="container">
		<div class="row justify-content-center">
	      <div class="col-lg-6">
	        <div class="subscribe-footer text-center">
	          <div class="form-group mb-0">
	          		<h2 class="mb-3">Subscribe Newsletter</h2>
	              	<p class="mb-4">Subscribe my Newsletter for new blog posts , tips and info.<p>
	              	<div class="form-group form-row align-items-center mb-0">
					    <div class="col-sm-9">
					      <input type="email" class="form-control" placeholder="Email Address">
					    </div>
					    <div class="col-sm-3">
					      <a href="#" class="btn btn-dark ">Subscribe</a>
					    </div>
				  	</div>
	            </div>
	        </div>
	      </div>
	    </div>

		<div class="footer-btm mt-5 pt-4 border-top">
			<div class="row">
				<div class="col-lg-12">
					<ul class="list-inline footer-socials-2 text-center">
		              <li class="list-inline-item"><a href="#">Privacy policy</a></li>
		              <li class="list-inline-item"><a href="#">Support</a></li>
		              <li class="list-inline-item"><a href="#">About</a></li>
		              <li class="list-inline-item"><a href="#">Contact</a></li>
		              <li class="list-inline-item"><a href="#">Terms</a></li>
		              <li class="list-inline-item"><a href="#">Category</a></li>
		            </ul>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="copyright text-center ">
						@ copyright all reserved to <a href="https://themefisher.com/">themefisher.com</a>-2019
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Web_roadmap\Diploma\laravel\task_session26\resources\views/home.blade.php ENDPATH**/ ?>