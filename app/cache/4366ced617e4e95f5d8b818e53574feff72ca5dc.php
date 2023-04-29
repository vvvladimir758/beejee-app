

<?php $__env->startSection('title'); ?>
    Основная
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
     
           <table class="table">
  <thead>
    <tr>
      <th scope="col"><a href="<?php echo e($sitePath); ?>main/<?php echo e($page); ?>/task_id/<?php echo e($orderType == 'desc' ? 'asc' : 'desc'); ?>">#</a></th>
      <th scope="col"><a href="<?php echo e($sitePath); ?>main/<?php echo e($page); ?>/name/<?php echo e($orderType == 'desc' ? 'asc' : 'desc'); ?>">Автор</a></th>
      <th scope="col"><a href="<?php echo e($sitePath); ?>main/<?php echo e($page); ?>/descripition/<?php echo e($orderType == 'desc' ? 'asc' : 'desc'); ?>">Текст</a></th>
      <th scope="col"><a href="<?php echo e($sitePath); ?>main/<?php echo e($page); ?>/status/<?php echo e($orderType == 'desc' ? 'asc' : 'desc'); ?>">Статус</a></th>
      <?php if(isset($admin) && $admin==1): ?>
       <th scope="col">Действия</th>
      <?php endif; ?>
    </tr>
  </thead>
  <tbody>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($task->task_id); ?></td>
            <td><?php echo e($task->name); ?></td>
            <td><?php echo e($task->descripition); ?></td>
            <td><?php echo e($task->status == 0 ? 'на выполнение' : 'выполнено '); ?></td>
      <?php if(isset($admin) && $admin==1): ?>
       <td><a href="<?php echo e($sitePath); ?>edit_task/<?php echo e($task->task_id); ?>">
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
</a></th>
      <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
    
    
           <nav aria-label="Page navigation example">
  <ul class="pagination">
   <li class="page-item"><a class="page-link" href="<?php echo e($sitePath); ?>main/<?php echo e(($page-1) > 0 ? ($page-1) : 1); ?>"><</a></li>
  <?php $__currentLoopData = $pageCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
    <li class="page-item"><a class="page-link <?php echo e($page == $n ? 'active' : ''); ?>" href="<?php echo e($sitePath); ?>main/<?php echo e($n); ?>"><?php echo e($n); ?></a></li>
 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <li class="page-item"><a class="page-link" href="<?php echo e($sitePath); ?>main/ <?php echo e(($page+1) < count($pageCount) ? ($page+1) : count($pageCount)); ?>">></a></li>
  </ul>
</nav> 
            
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\localhost\beejee\app\views/main.blade.php ENDPATH**/ ?>