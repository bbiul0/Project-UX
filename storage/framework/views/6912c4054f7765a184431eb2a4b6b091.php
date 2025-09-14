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
        <div class="align-items-center">
            <h1 class="display-4 fs-3 my-5"> 
            <a href="/index" class="nd" style="text-decoration: none">
                <img src="../img/back-arrow.PNG" width="35">
            </a>
            <?php echo e($key->name); ?>

            </h1>
        </div>
		

		<div class="d-flex pt-3 align-items-start">
			<?php if(count($books) == 0): ?>
				<div class="alert alert-warning text-center p-5" role="alert">
					<img src="../img/empty.png" width="100">
					<br>
					<p class="fw-bolder">There is no <?php echo e($key->name); ?> book category currently available</p>
				</div>

			<?php else: ?>
			<div class="pdf-list d-flex flex-wrap" style="width: 80%;">
				<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card-buttons','data' => ['book' => $book]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['book' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($book)]); ?> <?php echo $__env->renderComponent(); ?>
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

					<?php if (isset($component)) { $__componentOriginaleb8c89a7efda50450a3a76fb82e931fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleb8c89a7efda50450a3a76fb82e931fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.popup','data' => ['book' => $book,'authors' => $authors,'categories' => $categories,'types' => $types,'id' => 'modal' . $book->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('popup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['book' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($book),'authors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($authors),'categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'types' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($types),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('modal' . $book->id)]); ?>
					 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleb8c89a7efda50450a3a76fb82e931fd)): ?>
<?php $attributes = $__attributesOriginaleb8c89a7efda50450a3a76fb82e931fd; ?>
<?php unset($__attributesOriginaleb8c89a7efda50450a3a76fb82e931fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleb8c89a7efda50450a3a76fb82e931fd)): ?>
<?php $component = $__componentOriginaleb8c89a7efda50450a3a76fb82e931fd; ?>
<?php unset($__componentOriginaleb8c89a7efda50450a3a76fb82e931fd); ?>
<?php endif; ?>

				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		<?php endif; ?>

		<div class="col-lg-2 ms-auto">
			<div class="category" style="width: 200px">

				<div class="list-group" style="width: 200px">
					<p class="list-group-item list-group-item-action active fw-bold m-0">Type</p>
					<?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="/type/<?php echo e($type->id); ?>"
						class="list-group-item list-group-item-action"><?php echo e($type->name); ?></a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

				<div class="list-group mt-5" style="width: 200px">
					<p class="list-group-item list-group-item-action active fw-bold m-0">Category</p>
					<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="/type/<?php echo e($category->id); ?>"
						class="list-group-item list-group-item-action"><?php echo e($category->name); ?></a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

				<div class="list-group mt-5" style="width: 200px">
					<p class="list-group-item list-group-item-action active fw-bold m-0">Author</p>
					<?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="/type/<?php echo e($author->id); ?>" 
						class="list-group-item list-group-item-action"><?php echo e($author->name); ?></a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

			</div>
		</div>

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
<?php endif; ?>
	

</body>
</html><?php /**PATH C:\Users\chynt\laragon\www\Bookstore\resources\views/category.blade.php ENDPATH**/ ?>