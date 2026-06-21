<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/themify/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/slick-carousel/slick-theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/slick-carousel/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/owl-carousel/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/owl-carousel/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/magnific-popup/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <?php echo $__env->yieldPushContent('style'); ?>
</head>

<body>

    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- JS -->
    <script src="<?php echo e(asset('plugins/jquery/jquery.js')); ?>"></script>

    <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/bootstrap/js/popper.min.js')); ?>"></script>

    <script src="<?php echo e(asset('plugins/owl-carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/slick-carousel/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/magnific-popup/magnific-popup.js')); ?>"></script>

    <script src="<?php echo e(asset('plugins/instafeed-js/instafeed.min.js')); ?>"></script>

    <script src="<?php echo e(asset('plugins/google-map/gmap.js')); ?>"></script>

    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('script'); ?>

</body>

</html>
<?php /**PATH D:\Web_roadmap\Diploma\laravel\task_session26\resources\views/layouts/app_layout.blade.php ENDPATH**/ ?>