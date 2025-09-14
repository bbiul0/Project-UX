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
	<div class = "row g-0 mt-5 pt-3">
		<?php if($book == NULL): ?>
			<div class="alert alert-warning text-center p-5" role="alert">
				<img src="../img/empty.png" width="100">
				<br>
				<p>This Book Is Not Available</p>
			</div>
		<?php else: ?>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img src="../uploads/cover/<?php echo e($book->cover); ?>" class="card-img-top">
						
						<div class="card-body">
							<button id="pay-button" type='button' class='form-control btn btn-outline-success'>Buy Book</button>
						</div>
					</div>
					
					<div class="col-md-9">
						<h3 class="card-title"><?php echo e($book->title); ?></h3>
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

							<h4>Price: Rp.<?php echo e($book->price); ?></h4>
							
							<br>

							<p class="card-text"><?php echo e($book->description); ?></p>
							
						</p>
					</div>
				</div>
			</div>

		<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo e(config('services.midtrans.client_key')); ?>"></script>

		<script>
		document.getElementById('pay-button').addEventListener('click', function () {
			fetch('/get-snap-token', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
				},
				body: JSON.stringify({
					price: <?php echo e($book->price); ?>,
					book_id: <?php echo e($book->id); ?>

				})
			})
				.then(res => res.json())
				.then(data => {
					snap.pay(data.snap_token, {
						onSuccess: function(result) {
							// Send transaction to Laravel
							fetch('/payment-success', {
								method: 'POST',
								headers: {
									'Content-Type': 'application/json',
									'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
								},
								body: JSON.stringify({
									idbook: <?php echo e($book->id); ?>

								})
							})
							.then(res => res.json())
							.then(data => {
								Swal.fire({
									icon: 'success',
									title: 'Payment Successful!',
									text: data.message,
									confirmButtonText: 'OK'
								}).then(() => {
									window.location.href = '/profile';
								});
							});
						},
						onError: function(result) {
							Swal.fire({
								icon: 'error',
								title: 'Payment Failed',
								text: 'Please try again.'
							});
						},
						onClose: function() {
							Swal.fire({
								icon: 'warning',
								title: 'Payment Cancelled',
								text: 'You closed the payment popup.'
							});
						},
						onPending: function(result) {
							Swal.fire({
								icon: 'info',
								title: 'Payment Pending',
								text: 'Your payment is pending confirmation.'
							});
						}
					});
				});
		});
		</script>
		<?php endif; ?>

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
</html><?php /**PATH C:\Users\chynt\laragon\www\Bookstore\resources\views/buy.blade.php ENDPATH**/ ?>