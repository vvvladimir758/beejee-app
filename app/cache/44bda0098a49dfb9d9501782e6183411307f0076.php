

<?php $__env->startSection('title'); ?>
    This is the extended title
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    This is the new context
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\localhost\beejee\app\views/test.blade.php ENDPATH**/ ?>