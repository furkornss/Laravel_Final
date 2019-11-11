<?php $__env->startSection('title','Welcome UsersView'); ?>
<?php $__env->startSection('content'); ?>
 <H1><?php echo e(@name); ?></H1>
 <h2><?php echo e(@title); ?></H2>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Larevel\besiclaravel\resources\views/create/users.blade.php ENDPATH**/ ?>