<?php $__env->startSection('title','จัดการฐานข้อมูล'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">

<div class="row"> 
    <div class="col-md-12"> <br /> 
    <h3 align="center">แก้ไขข้อมูลผู้ใช้ระบบ</h3> <br /> 
        <?php if(count($errors) > 0): ?> 
            <div class="alert alert-danger"> 
            <ul> <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <li><?php echo e($error); ?></li> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </ul> 
            </div> 
        <?php endif; ?> 
    <form method="post" action="<?php echo e(action('UsersController@update', $id)); ?>"> 
        <?php echo e(csrf_field()); ?> 
    <div class="form-group"> 
        <input type="text" name="fname" class="form-control" placeholder="ป้อนชื่อ" value="<?php echo e($user->fname); ?>"/> 
    </div> 
    <div class="form-group"> 
        <input type="text" name="lname" class="form-control" placeholder="ป้อนนามสกุล"  value="<?php echo e($user->lname); ?>"/> 
    </div> 
    <div class="form-group"> 
        <input type="submit" class="btn btn-primary" value="อัพเดท"/> 
    </div> 
        <input type="hidden" name="_method" value="PATCH" /> 
</form> 
</div> 
</div> 
</div> 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Larevel\besiclaravel\resources\views/user/edit.blade.php ENDPATH**/ ?>