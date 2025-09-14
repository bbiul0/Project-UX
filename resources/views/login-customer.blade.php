<x-layout>
	<div class="d-flex justify-content-center align-items-center"
			style="min-height: 100vh;">
			<form class="p-5 rounded shadow" id="form-log"
				style="max-width: 30rem; width: 100%"
				method="POST"
				action="{{route('loginCustomer.auth')}}">
			@csrf

			<h1 class="text-center display-4 pb-5">LOGIN CUSTOMER</h1>

			@if ($errors->any())
				@foreach ($errors->all() as $error)
					<div class="alert alert-danger alert-dismissable fade show fw-bold" role="alert">
						{{$error}}
					</div>
				@endforeach
			@endif

			@if (session('error'))
				<div class="alert alert-danger alert-dismissable fade show fw-bold" role="alert">
					{{session('error')}}
				</div>
			@endif

			@if (session('success'))
				<div class="alert alert-success alert-dismissable fade show fw-bold" role="alert">
					{{session('success')}}
				</div>
            @endif
			
			<div class="mb-3">
				<label for="InputEmail" 
					class="form-label">Email Address</label>
				<input type="email" 
					class="form-control" 
					name="email" 
					id="InputEmail" 
					aria-describedby="emailHelp"
					value="{{old('email')}}">
			</div>

			<div class="mb-3">
				<label for="InputPassword" 
					class="form-label">Password</label>
				<input type="password" 
					class="form-control" 
					name="password" 
					id="InputPassword"
					value="{{old('password')}}">
			</div>
			<button type="submit" class="log-btn btn btn-outline-primary">Login</button>
			
			<a class = "log-btn btn btn-outline-secondary" href="/index">Store</a>
			</form>
		</div>
</x-layout>