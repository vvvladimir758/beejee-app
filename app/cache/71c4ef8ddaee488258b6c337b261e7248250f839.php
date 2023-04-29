

<?php $__env->startSection('title'); ?>
    Основная
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   






<form class="row g-3 mt-5" method="POST" action="<?php echo e($sitePath); ?>authentificate">
  <div class="col-auto">
    <label for="staticEmail2" class="">логин</label>
    <input type="text"  name="login" class="form-control" value="">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="">пароль</label>
    <input type="password" name="password" class="form-control"  placeholder="пароль">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-3">войти</button>
  </div>
  *пароль 123 , логин admin 
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\localhost\beejee\app\views/login.blade.php ENDPATH**/ ?>