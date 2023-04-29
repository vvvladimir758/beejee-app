

<?php $__env->startSection('title'); ?>
    Основная
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<form method="POST" action="<?php echo e($sitePath); ?>store_task">
<div class="mb-3 mt-5">
<label for="exampleFormControlInput1" class="form-label">Имя</label>
<input type="text" name="name" class="form-control"  value="<?php echo e($name ?? ''); ?>" placeholder="Просто Вася (без Просто только)">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Email</label>
<input type="email" name="email" class="form-control" value="<?php echo e($email ?? ''); ?>" placeholder="name@example.com">
</div>
<div class="mb-3">
<label for="exampleFormControlTextarea1" class="form-label">Текст задачи</label>
<textarea class="form-control" name="descripition"   rows="3"><?php echo e($descripition ?? ''); ?></textarea>
</div>

<button class="btn btn-primary" type="submit">отправить</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\localhost\beejee\app\views/create.blade.php ENDPATH**/ ?>