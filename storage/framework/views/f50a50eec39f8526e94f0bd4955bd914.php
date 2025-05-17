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
                  <th class="order">Customer's Name</th>
                  <th class="order">Email</th>
                  <th class="order">Phone Number</th>
                  <th class="order">Address</th>
                  <th class="order">Food Title</th>
                  <th class="order">Quantity</th>
                  <th class="order">Price</th>
                  <th class="order">Image</th>
                  <th class="order">Delivery_status</th>
                  <th class="order">Change status</th>
                </tr>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                  <td><?php echo e($data->name); ?></td>
                  <td><?php echo e($data->email); ?></td>
                  <td><?php echo e($data->phone); ?></td>
                  <td><?php echo e($data->address); ?></td>
                  <td><?php echo e($data->title); ?></td>
                  <td><?php echo e($data->quantity); ?></td>
                  <td><?php echo e($data->price); ?></td>
                  <td>
                    <img width="100px" src="food_images/<?php echo e($data->image); ?>" alt="">
                  </td>
                  <td><?php echo e($data->delivery_status); ?></td>
                  <td>
                    <a class="btn btn-info" href="<?php echo e(url('on_the_way', $data->id)); ?>">On the way</a>
                    <a class="btn btn-warning" href="<?php echo e(url('delivered', $data->id)); ?>">Delivered</a>
                    <a class="btn btn-danger" href="<?php echo e(url('cancelled', $data->id)); ?>">Cancelled</a>
                  </td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>
            </div>    
        </div>
    </div>
    <!-- JavaScript files-->
    <?php echo $__env->make('admin.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\Restaurant_Management_System\resources\views/admin/orders.blade.php ENDPATH**/ ?>