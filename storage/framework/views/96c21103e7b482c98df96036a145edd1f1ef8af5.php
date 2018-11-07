<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thời Trang</title>
        <base href="<?php echo e(asset('')); ?>">
        <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
        <link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
        <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
        <link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
        <link rel="stylesheet" href="source/assets/dest/css/animate.css">
        <link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
    </head>
    <body>
    	<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
