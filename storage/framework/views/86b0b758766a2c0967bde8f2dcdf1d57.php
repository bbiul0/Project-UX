<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-light fw-bolder" href="/index">WIBOOK STORE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></spa>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                <li class="nav-item">
                    <a class="btn btn-outline-primary border-0 nav-link text-light rounded fw-bolder" href="/index">Home</a>
                </li>

                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary border-0 nav-link text-light rounded fw-bolder" href="<?php echo e(url('/wishlistPage/' . Auth::id())); ?>">Wishlist</a>
                    </li>
                <?php endif; ?>

                <li class="nav-item">
                    <?php if(auth()->guard()->check()): ?>
                        <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-outline-primary border-0 nav-link text-light rounded fw-bolder" type="submit">Logout</button>
                        </form>
                    <?php else: ?>
                        <a class="btn btn-outline-primary border-0 nav-link text-light rounded fw-bolder" href="/signup">SignUp</a>
                    <?php endif; ?>
                </li>
        
                <li class="nav-item">
                    <?php if(auth()->guard()->check()): ?>
                        <a class="btn btn-outline-primary border-0 nav-link text-light rounded fw-bolder" href="/profile">Profile</a>
                    <?php else: ?>
                        <a class="btn btn-outline-primary border-0 nav-link text-light rounded fw-bolder" href="/loginCustomer">Login</a>
                    <?php endif; ?>
                </li>
            </ul>

            <?php if(Request::is('/') || Request::is('index')): ?>
                <div class="d-flex justify-content-end">
                    <!-- Tombol Dark Mode -->
                    <button id="darkModeToggle" class="btn btn-outline-dark border-0 text-light fw-bolder ms-2">Dark Mode</button>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
    </nav><?php /**PATH C:\Users\chynt\laragon\www\Bookstore git\BookStoreWFD\resources\views/components/navbar.blade.php ENDPATH**/ ?>