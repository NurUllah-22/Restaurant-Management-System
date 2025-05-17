<!-- BLOG Section  -->
    <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">Our Current Menu</h2>
        <div class="row justify-content-center">
            
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img height="200px" src="food_images/<?php echo e($data->image); ?>" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary"><?php echo e($data->price); ?></a></h1>
                                <h4 class="pt20 pb20"><?php echo e($data->title); ?></h4>
                                <p class="text-white"><?php echo e($data->detail); ?></p>
                            </div>
                        <form action="<?php echo e(url('add_cart', $data->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input value="1" name="qty" required type="number" min="1">
                            <input class="btn btn-info" type="submit" value="Add to Cart">
                        </form>
                        <br>
                        <br>
                        <br>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
            </div>
        </div>
    </div><?php /**PATH C:\xampp\htdocs\Restaurant_Management_System\resources\views/home/blog.blade.php ENDPATH**/ ?>