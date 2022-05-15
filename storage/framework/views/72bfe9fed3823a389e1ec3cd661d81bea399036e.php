
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Tasks</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('task')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Task</label></br>
        <input type="text" name="task" id="task" class="form-control"></br>
        <label>Done</label></br>
        <input type="checkbox" name="done" id="done" class="form-check-input" value=""></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('task.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tasks\resources\views/task/create.blade.php ENDPATH**/ ?>