<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"></div>
          <div class="title">
            <h1 class="h5">Group 7</h1>
            <p>Restaurant Owner</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="<?php echo e(url('home')); ?>"> <i class="icon-home"></i>Home </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">
                   <i class="icon-windows"></i>Food</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="<?php echo e(url('add_food')); ?>">Add Food</a></li>
                    <li><a href="<?php echo e(url('view_food')); ?>">View Food</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo e(url('orders')); ?>"> <i class="icon-logout"></i>Orders</a></li>
                <li><a href="<?php echo e(url('reservation')); ?>"> <i class="icon-logout"></i>Reservations</a></li>
      </nav>
      <!-- Sidebar Navigation end--><?php /**PATH C:\xampp\htdocs\Restaurant_Management_System\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>