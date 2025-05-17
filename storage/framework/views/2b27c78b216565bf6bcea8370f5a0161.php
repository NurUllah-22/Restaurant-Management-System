<!DOCTYPE html>
<html>
    <head>
        <base href="/public"> 
        <?php echo $__env->make('admin.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->make('admin.add_food_css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <style>
            .div_deg
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
                <h1>Update Food</h1>
                <form action="<?php echo e(url('edit_food', $food->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="div_deg">
                        <label for="">Food Title</label>
                        <input type="text" name="title" value="<?php echo e($food->title); ?>">
                    </div>
                    <div class="div_deg">
                        <label for="">Food Details</label>
                        <textarea name="details" id=""><?php echo e($food->detail); ?></textarea>
                    </div>
                    <div class="div_deg">
                        <label for="">Price</label>
                        <input type="text" name="price" value="<?php echo e($food->price); ?>">
                    </div>
                    <div class="div_deg">
                        <label for="">Current Image</label>
                        <img width="150px" src="food_images/<?php echo e($food->image); ?>" alt="">
                    </div>
                    <div class="div_deg">
                        <label for="">Change Image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="div_deg">
                        <input class="btn btn-warning" type="submit" value="Update Food">
                    </div>
                </form>
            </div>    
        </div>
    </div>
    <!-- JavaScript files-->
    <?php echo $__env->make('admin.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\Restaurant_Management_System\resources\views/admin/update_food.blade.php ENDPATH**/ ?>