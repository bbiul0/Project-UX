<div class="mt-auto d-flex justify-content-between <?php if(auth()->guard()->check()): ?> align-items-center <?php endif; ?> gap-2">
    <?php if(auth()->guard()->check()): ?>
        <a class="c-btn btn btn-outline-primary" href="/buy/<?php echo e($book->id); ?>">Buy Book</a>

        <!-- Wishlist Star Button -->
        <?php if(in_array($book->id, $wishlist)): ?>
            <form method="POST" action="<?php echo e(route('wishlist.remove', ['user_id' => Auth::id(), 'book_id' => $book->id])); ?>" class="d-flex justify-content-center">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="c-btn btn p-0 border-0" onclick="return confirm('Are you sure?')">
                    
                    <span class="bi bi-bookmark-fill" style="font-size: 1.5rem; "></span>
                </button>
            </form>
        <?php else: ?>
            <form method="POST" action="<?php echo e(route('wishlist', ['user_id' => Auth::id(), 'book_id' => $book->id])); ?>" class="d-flex justify-content-center">
                <?php echo csrf_field(); ?>
                <button type="submit" class="c-btn btn p-0 border-0">
                    <span class="bi bi-bookmark" style="font-size: 1.5rem; "></span>
                </button>
            </form>
        <?php endif; ?>

    <?php else: ?>
        <a class="c-btn btn btn-outline-primary" href="<?php echo e(route('loginCustomer.loginPage')); ?>">Buy Book?</a>
    <?php endif; ?>

    <button type="button" class="c-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo e($book->id); ?>">
            More Info
    </button>
</div><?php /**PATH C:\Users\chynt\laragon\www\Bookstore git\BookStoreWFD\resources\views/components/card-buttons.blade.php ENDPATH**/ ?>