<x-layout>
	<div class = "row g-0 mt-5 pt-3">
		@if ($book == NULL)
			<div class="alert alert-warning text-center p-5" role="alert">
				<img src="../img/empty.png" width="100">
				<br>
				<p>This Book Is Not Available</p>
			</div>
		@else
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img src="../uploads/cover/{{$book->cover}}" class="card-img-top">
						
						<div class="card-body">
							<button id="pay-button" type='button' class='form-control btn btn-outline-success'>Buy Book</button>
						</div>
					</div>
					
					<div class="col-md-9">
						<h3 class="card-title">{{$book->title}}</h3>
						<p class="card-text fw-bold">
							By:
							@foreach ($authors as $author)
								@if ($author->id == $book->author_id)
									{{$author->name}}
									@break
								@endif
							@endforeach
							<br>

							Category:
							@foreach ($categories as $category)
								@if ($category->id == $book->category_id)
									{{$category->name}}
									@break
								@endif
							@endforeach
							<br>

							<h4>Price: Rp.{{$book->price}}</h4>
							
							<br>

							<p class="card-text">{{$book->description}}</p>
							
						</p>
					</div>
				</div>
			</div>

		<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{config('services.midtrans.client_key')}}"></script>

		<script>
		document.getElementById('pay-button').addEventListener('click', function () {
			fetch('/get-snap-token', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				},
				body: JSON.stringify({
					price: {{ $book->price }},
					book_id: {{ $book->id }}
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
									'X-CSRF-TOKEN': '{{ csrf_token() }}'
								},
								body: JSON.stringify({
									idbook: {{ $book->id }}
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
		@endif

	</div> <!-- Row Div -->
</x-layout>
	

</body>
</html>