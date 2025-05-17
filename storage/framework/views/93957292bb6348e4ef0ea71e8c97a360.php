<!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">Book a Table</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="<?php echo e(url('/')); ?>">
                <img src="assets/imgs/logo.svg" class="brand-img" alt="">
                <span class="brand-txt">Food Hut</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Food Items<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('my_cart')); ?>">Cart</a>
                </li>
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input class="btn btn-primary ml-xl-4" type="submit" value="Logout">
                </form>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a>
                </li>
                <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
   <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Food Hut</h1>
            <h2 class="display-4 mb-5">Always fresh &amp; Delightful</h2>
            <a class="btn btn-lg btn-primary" href="#gallary">View Our gallary</a>
        </div>
    </header><?php /**PATH C:\xampp\htdocs\Restaurant_Management_System\resources\views/home/header.blade.php ENDPATH**/ ?>