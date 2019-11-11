 
<?php $__env->startSection('title','Welcome Homepage'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md- 12">
                <br><br>
                <div align="right"><a href="<?php echo e(route('user.create')); ?>" class="btn btn-success">เพิ่มข้อมูล</a></div>
                <?php if(\Session::has('success')): ?> 
                    <div class="alert alert-success"> 
                    <p><?php echo e(\Session::get('success')); ?></p> 
                    </div> 
                <?php endif; ?> 
                <table class="table table-bordered table-striped"> 
                    <tr> 
                        <th>ID</th> 
                        <th>First Name</th> 
                        <th>Last Name</th>
                        <th>EDIT</th> 
                        <th>DELETE</th>
                        
                    </tr> 
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <tr> 
                        <td><?php echo e($row['id']); ?></td> 
                        <td><?php echo e($row['fname']); ?></td> 
                        <td><?php echo e($row['lname']); ?></td> 
                        <td><a href="<?php echo e(action('UsersController@edit', $row['id'])); ?>" class="btn btn-warning">Edit</a></td>
                        <td> 
                            <form method="post" class="delete_form" action="<?php echo e(action('UsersController@destroy',$row['id'])); ?>"> 
                                <?php echo e(csrf_field()); ?> 
                            <input type="hidden" name="_method" value="DELETE" /> 
                            <button type="submit" class="btn btn-danger">Delete</button> 
                            </form> 
                        </td>

                    </tr> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </table> 
            </div>
        </div>
    </div>
    <script type="text/javascript">
            $(document).ready(function(){ 
            $('.delete_form').on('submit', function(){ 
            if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")) { 
                return true; 
            } 
            else { 
                return false; 
            } 
            }); 
        }); 

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Larevel\besiclaravel\resources\views/user/index.blade.php ENDPATH**/ ?>