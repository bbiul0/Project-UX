<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="d-flex justify-content-center align-items-center"
        style="min-height: 100vh;">
        <form class="p-5 rounded shadow" id="form-log"
            style="max-width: 30rem; width: 100%"
            method="POST"
            action="<?php echo e(route('loginCustomer.signup')); ?>">
        <?php echo csrf_field(); ?>

        <h1 class="text-center display-4 pb-5">REGISTER</h1>

        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger alert-dismissable fade show fw-bold" role="alert">
                    <?php echo e($error); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissable fade show fw-bold" role="alert">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
        
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Full Name</label>
                <input type="text" class="form-control" name = "fullname" id="exampleInputName" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
    
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name = "password"  id="exampleInputPassword1" required>
            </div>
    
            <div class="d-flex justify-content-between mt-3">
                <div>
                    <button type="submit" class="log-btn btn btn-outline-success" name="btnregister">Register User</button>
                    <a class="log-btn btn btn-outline-primary" href="/loginCustomer">Login</a>
                </div>
                
                <a class="log-btn btn btn-outline-secondary" href="/index">Store</a>
            </div>

        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\chynt\laragon\www\Bookstore\resources\views/signup.blade.php ENDPATH**/ ?>