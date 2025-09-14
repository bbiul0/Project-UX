<div class="modal" tabindex="-1" id="exampleModal<?php echo e($book->id); ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Book Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <div class="row g-0 align-items-start">
            <!-- Image on the left -->
                <div class="col-md-4">
                      <img src="../uploads/cover/<?php echo e($book->cover); ?>" alt="<?php echo e($book->title); ?>" class="img-fluid h-auto">
                </div>
            <!-- Book details on the right -->
            <div class="col-md-8">

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

                        <p class="card-text"><?php echo e($book->description); ?></p>
                    </p>
                </div>

            </div>
          </div>
        </div>

        

      </div>
    </div>
  </div><?php /**PATH C:\Users\chynt\laragon\www\Bookstore\resources\views/components/popup.blade.php ENDPATH**/ ?>