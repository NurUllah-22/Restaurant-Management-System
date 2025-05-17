<!DOCTYPE html>
<html>
    <head> 
        <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('admin.add_food_css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </head>
  <body>
    <?php echo $__env->make('admin.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>    
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div>
                    <h1>All Foods</h1>
                    <table>
                        <tr>
                            <th class="Food">Food Title</th>
                            <th class="Food">Food Details</th>
                            <th class="Food">Price</th>
                            <th class="Food">Food Image</th>
                            <th class="Food">Delete</th>
                            <th class="Food">Update</th>
                        </tr>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($data->title); ?></td>
                            <td"><?php echo e($data->detail); ?></td>
                            <td><?php echo e($data->price); ?></td>
                            <td>
                                <img width="150px" src="food_images/<?php echo e($data->image); ?>" alt="food image">
                            </td>
                            <td>
                                <a class="btn btn-danger" 
                                onclick="return confirm('Are you sure you want to delete this food?')" 
                                href="<?php echo e(url('delete_food', $data->id)); ?>">Delete</a>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="<?php echo e(url('update_food', $data->id)); ?>">Update</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>    
        </div>
    </div>
    <!-- JavaScript files-->
    <?php echo $__env->make('admin.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\Restaurant_Management_System\resources\views/admin/show_food.blade.php ENDPATH**/ ?>