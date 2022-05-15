
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Edit task</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('task/' .$tasks->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($tasks->id); ?>" id="id" />
        <label>Task</label></br>
        <input type="text" name="task" id="task" value="<?php echo e($tasks->task); ?>" class="form-control"></br>
        <label>Done</label></br>
        <input type="checkbox" name="done" id="done" value="<?php echo e($tasks->done); ?>" class="form-check-input"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('task.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tasks\resources\views/task/edit.blade.php ENDPATH**/ ?>