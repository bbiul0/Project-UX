<?php if(auth()->guard()->check()): ?>
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

        <section id="home">
            <div class = "row g-0 mt-3 pt-2 pb-3">
                <div class = "row g-0 mt-5 pt-4 pb-5 rounded-start" style="background-color: rgb(46, 163, 187);">
                    <img class="img-fluid rounded-circle mx-auto mt-4 mb-2" 
                    style="width: 150px; height: 150px;" src="img/profile_default.jpg">
                    <h1 class = "display-4 text-light fw-bolder text-center"><?php echo e(auth()->user()->full_name); ?></h1>
                    <h3 class = "text-light fw-bolder text-center">ーーーー⭐ーーーー</h3>
                    <h5 class = "text-center text-light"><?php echo e(auth()->user()->email); ?></h5>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="d-flex pt-3 ">
                <?php if($books == NULL): ?>
                    <div class="alert alert-warning text-center p-5" role="alert">
                        <img src="img/empty.png" width="100"> <br> You haven't buy a book
                    </div>
                <?php else: ?>
                    <div class="d-flex flex-wrap justify-content-center gap-5" style="100%">
                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card d-flex flex-column h-auto m-1 book-card" data-id="<?php echo e($book->id); ?>" style="width: 18rem;">
                                <img src="../uploads/cover/<?php echo e($book->cover); ?>" alt="<?php echo e($book->title); ?>" class="card-img-top" style="height: 25rem; object-fit: fill;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?php echo e($book->title); ?></h5>
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
                                    
                                    <div class="mt-auto d-flex justify-content-between">
                                        <a href="uploads/files/<?php echo e($book->file); ?>" class="btn btn-success fw-bolder" target="_blank">Open</a>
                                        <a href="uploads/files/<?php echo e($book->file); ?>" class="btn btn-primary fw-bolder" 
                                        download=<?php echo e($book->title); ?> target="_blank">Download</a>
                                    </div>
                                    
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
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
<?php endif; ?>
<?php else: ?>
<?php endif; ?><?php /**PATH C:\Users\chynt\laragon\www\Bookstore\resources\views/profile.blade.php ENDPATH**/ ?>