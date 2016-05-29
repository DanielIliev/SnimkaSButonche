<!-- <html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link href="/css/app.css" media="all" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    </head>
    <body>    
        <?php echo $__env->make('layouts.Header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php echo $__env->make('layouts.Footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
 -->

 <!DOCTYPE html>
<html lang="bg">
    <head>
        <!-- Meta tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
        <meta name="description" content="Basic Template" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Title -->
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- Links -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
        <link rel="stylesheet" href="<?php echo e(URL::to('src/css/themes/apptheme.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(URL::to('src/css/style.css')); ?>" />
        <link rel="icon" href="<?php echo e(URL::to('favicon.ico')); ?>" />
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
        <?php echo $__env->yieldContent('styles'); ?>
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html>
