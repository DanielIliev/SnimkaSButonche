<html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
        <?php $__env->startSection('header'); ?>
            //header
        <?php echo $__env->yieldSection(); ?>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        
        <?php $__env->startSection('footer'); ?>
            //header
        <?php echo $__env->yieldSection(); ?>
    </body>
</html>
