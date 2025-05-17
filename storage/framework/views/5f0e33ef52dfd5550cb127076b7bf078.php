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
                <table>
                    <tr>
                        <th>Phone Number</th>
                        <th>Number of Guests</th>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                    <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($book->phone); ?></td>
                        <td><?php echo e($book->guest); ?></td>
                        <td><?php echo e($book->date); ?></td>
                        <td><?php echo e($book->time); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>    
        </div>
    </div>
    <!-- JavaScript files-->
    <?php echo $__env->make('admin.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\Restaurant_Management_System\resources\views/admin/reservation.blade.php ENDPATH**/ ?>