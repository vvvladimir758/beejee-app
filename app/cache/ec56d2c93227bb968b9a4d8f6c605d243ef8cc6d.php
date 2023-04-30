<form method="POST" action="<?php echo e($action); ?>">

<?php if(isset($taskId)): ?>
<input type="hidden" name="taskId" value="<?php echo e($taskId); ?>">

<?php endif; ?>

<?php if(isset($userId)): ?>
<input type="hidden" name="userId" value="<?php echo e($userId); ?>">

<?php endif; ?>

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

<?php if(isset($admin) && $admin==1): ?>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="status" <?php echo e($status == 1 ? 'checked' : ' '); ?>>
  <label class="form-check-label" for="flexCheckDefault">
    Выполнено 
  </label>
<?php endif; ?>


<button class="btn btn-primary" type="submit">отправить</button>
</form><?php /**PATH C:\OSPanel\domains\localhost\beejee\app\views/part/task_form.blade.php ENDPATH**/ ?>