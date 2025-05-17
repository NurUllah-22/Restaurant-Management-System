<!DOCTYPE html>
<html>
    <head> 
        <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('admin.add_food_css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <style>
            .add_div_deg
            {
                padding: 10px;
            }
        </style>
    </head>
  <body>
    <?php echo $__env->make('admin.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('admin.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>    
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <form action="<?php echo e(url('upload_food')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="add_div_deg">
                        <label for="">Food Title</label>
                        <input type="text" name="title" required>
                    </div>
                    <div class="add_div_deg">
                        <label for="">Food Details</label>
                        <textarea name="details" cols="70" rows="5" required></textarea>
                    </div>
                    <div class="add_div_deg">
                        <label for="">Food Image</label>
                        <input type="file" name="img" required>
                    </div>
                    <div class="add_div_deg">
                        <label for="">Price</label>
                        <input type="text" name="price" required>
                    </div>
                    <div class="add_div_deg">
                        <input type="submit" value="Add Food" class='btn btn-warning'>
                    </div>
                </form>
            </div>    
        </div>
    </div>
    <!-- JavaScript files-->
    <?php echo $__env->make('admin.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\Restaurant_Management_System\resources\views/admin/add_food.blade.php ENDPATH**/ ?>