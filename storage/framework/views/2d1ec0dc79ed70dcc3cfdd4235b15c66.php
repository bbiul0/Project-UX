
<div class="mt-auto d-flex justify-content-between">
    <?php if(auth()->guard()->check()): ?>
        <a class="c-btn btn btn-outline-primary" href="/buy/<?php echo e($book->id); ?>">Buy Book</a>
    <?php else: ?>
        <a class="c-btn btn btn-outline-primary" href="<?php echo e(route('loginCustomer.loginPage')); ?>">Buy Book?</a>
    <?php endif; ?>
        <button type="button" class="c-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo e($book->id); ?>">
            More Info
        </button>
</div><?php /**PATH C:\Users\chynt\laragon\www\Bookstore\resources\views/components/card-buttons.blade.php ENDPATH**/ ?>