<?php $__env->startSection('title', 'Title'); ?>

<?php $__env->startSection('header'); ?>
    @parent
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	//content
    <p><?php echo e($var); ?></p>   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.Master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>