<header class="header">   
    <nav class="navbar navbar-expand-lg">
    <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
        <div class="close-btn">Close <i class="fa fa-close"></i></div>
        </div>
    </div>
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
        <!-- Navbar Header--><a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase">
                <strong class="text-primary">Admin</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">D</strong>
                <strong>A</strong></div></a>
        <!-- Sidebar Toggle Btn-->
        <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        
        <!-- Log out               -->
        <div class="list-inline-item logout">
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <input class="btn btn-primary" type="submit" value="Logout">
                       
            </form>
        </div>
        </div>
    </div>
    </nav>
</header><?php /**PATH C:\xampp\htdocs\Restaurant_Management_System\resources\views/admin/header.blade.php ENDPATH**/ ?>