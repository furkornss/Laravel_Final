<?php $__env->startSection('title','จัการฐานข้อมูล'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">

<div class="row"> 
    <div class="col-md-12"> <br /> 
    <h3 align="center">เพิ่มข้อมูลผู้ใช้ระบบ</h3> <br /> 
    <form method="post" action="<?php echo e(url('user')); ?>"> 
        <?php echo e(csrf_field()); ?> 
    <div class="form-group"> 
        <input type="text" name="fname" class="form-control" placeholder="ป้อนชื่อ" /> 
    </div> 
    <div class="form-group"> 
        <input type="text" name="lname" class="form-control" placeholder="ป้อนนามสกุล" /> 
    </div> 
    <div class="form-group"> 
        <input type="submit" class="btn btn-primary" value="บันทึก"/> 
    </div> 
</form> 
</div> 
</div> 
</div> 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Larevel\besiclaravel\resources\views/create.blade.php ENDPATH**/ ?>