
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Tasks</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Task : <?php echo e($tasks->task); ?></h5>
        <p class="card-text">Done : <?php echo e($tasks->done); ?></p>
  </div>
      
    </hr>
  
  </div>
</div>
<?php echo $__env->make('task.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tasks\resources\views/task/show.blade.php ENDPATH**/ ?>