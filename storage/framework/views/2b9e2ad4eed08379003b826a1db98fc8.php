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
    <div class = "row g-0 mt-5">
		<div class="d-flex pt-4 align-items-start">
			<?php if(auth()->guard()->check()): ?>
                <div class="mb-5">
                    <h3 class="mb-4">
                        <i class="bi bi-bookmark-star-fill"></i> Your Wishlist
                    </h3>
                    
                    <?php if(count($wishlist) > 0): ?>
                        <div class="pdf-list d-flex flex-wrap" style="width: 110%">
                            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(in_array($book->id, $wishlist)): ?>
                                    <!-- Book card display -->
                                    <div class="card d-flex flex-column h-auto m-1 book-card mb-4" style="width: 18rem;" data-id="<?php echo e($book->id); ?>">
                                        <img src="../uploads/cover/<?php echo e($book->cover); ?>" alt="<?php echo e($book->title); ?>"
                                        class="card-img-top" style="height: 21.875rem; object-fit: fill; border-radius: 5px;">

                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title"> <?php echo e($book->title); ?></h5>

                                            <p class="card-text fw-bold">
                                                By:
                                                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($author->id == $book->author_id): ?>
                                                        <?php echo e($author->name); ?>

                                                        <?php break; ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <br>

                                                Category:
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($category->id == $book->category_id): ?>
                                                        <?php echo e($category->name); ?>

                                                        <?php break; ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <br>

                                                Type:
                                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($type->id == $book->type_id): ?>
                                                        <?php echo e($type->name); ?>

                                                        <?php break; ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <br>

                                                <p class="card-text"><?php echo e(\Illuminate\Support\Str::limit($book->description, 100)); ?></p>
                                            </p>

                                            <?php if (isset($component)) { $__componentOriginal10fe833777080420c0b6410138545d13 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10fe833777080420c0b6410138545d13 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-buttons','data' => ['book' => $book,'wishlist' => $wishlist]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['book' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($book),'wishlist' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($wishlist)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10fe833777080420c0b6410138545d13)): ?>
<?php $attributes = $__attributesOriginal10fe833777080420c0b6410138545d13; ?>
<?php unset($__attributesOriginal10fe833777080420c0b6410138545d13); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10fe833777080420c0b6410138545d13)): ?>
<?php $component = $__componentOriginal10fe833777080420c0b6410138545d13; ?>
<?php unset($__componentOriginal10fe833777080420c0b6410138545d13); ?>
<?php endif; ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-info">
                            You haven't wishlisted any books yet. Click the bookmark icon on books to add them!
                        </div>
                    <?php endif; ?>
                </div>    
            <?php endif; ?>

		

		</div>
	</div> <!-- Row Div -->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\chynt\laragon\www\Bookstore git\BookStoreWFD\resources\views/wishlist.blade.php ENDPATH**/ ?>