

<?php $__env->startSection('title'); ?>
    Основная
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php
$action = $sitePath.'update_task';
?>

<?php echo $__env->make('part.task_form',['action'=> $action,'status'=>$status, 'taskId'=>$taskId, 'descripition'=>$descripition,'name'=>$name,'email'=>$email,'userId'=>$userId], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\localhost\beejee\app\views/edit_task.blade.php ENDPATH**/ ?>