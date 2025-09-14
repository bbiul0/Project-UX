<x-layout>
	<div class = "row g-0 mt-5">
		<form action="{{route('index.search')}}"
			method="GET"
			style="width: 100%; max-width: 30rem">

			<div class="input-group my-5">
				<input type="text"
						class="form-control"
						name="key" id="search"
						placeholder="Search Book..."
						aria-label="Search Book..."
						aria-describedby="basic-addon2">

				<button class="input-group-text
								btn btn-primary"
						id="basic-addon2">
						<img src="img/search.png"
							width="20" style="filter: drop-shadow(0 0 0 black) drop-shadow(0 0 1px black);">
				</button>
			</div>
		</form>

		<div class="d-flex pt-3 align-items-start">
			@if ($books == NULL)
				<div class="alert alert-warning text-center p-5" role="alert">
					<img src="img/empty.png" width="100">
					<br>
					<p>There is no book in the database</p>
				</div>

			@else
			<div class="pdf-list d-flex flex-wrap">
				@foreach ($books as $book)
					<div class="card d-flex flex-column h-auto m-1 book-card mb-4" style="width: 18rem;" data-id="{{$book->id}}">
						<img src="../uploads/cover/{{$book->cover}}" alt="{{$book->title}}"
						class="card-img-top" style="height: 21.875rem; object-fit: fill; border-radius: 5px;">

						<div class="card-body d-flex flex-column">
							<h5 class="card-title"> {{$book->title}}</h5>

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

								Type:
								@foreach ($types as $type)
									@if ($type->id == $book->type_id)
										{{$type->name}}
										@break
									@endif
								@endforeach
								<br>

								<p class="card-text">{{\Illuminate\Support\Str::limit($book->description, 100)}}</p>
							</p>

							<x-card-buttons :book="$book" :wishlist="$wishlist"></x-card-buttons>

						</div>
					</div>

				<x-popup 
					:book="$book"
					:authors="$authors"
					:categories="$categories"
					:types="$types"
					:id="'modal' . $book->id">
				</x-popup>
	
				@endforeach
			</div>
		@endif

		<div class="col-lg-2 ms-auto">
			<div class="category" style="width: 12.5rem">

				<div class="list-group" style="width: 12.5rem">
					<p class="list-group-item list-group-item-action active fw-bold m-0">Type</p>
					@foreach ($types as $type)
						<a href="/type/{{$type->id}}"
						class="list-group-item list-group-item-action">{{$type->name}}</a>
					@endforeach
				</div>

				<div class="list-group mt-5" style="width: 12.5rem">
					<p class="list-group-item list-group-item-action active fw-bold m-0">Category</p>
					@foreach ($categories as $category)
						<a href="/category/{{$category->id}}"
						class="list-group-item list-group-item-action">{{$category->name}}</a>
					@endforeach
				</div>

				<div class="list-group mt-5" style="width: 12.5rem">
					<p class="list-group-item list-group-item-action active fw-bold m-0">Author</p>
					@foreach ($authors as $author)
						<a href="/author/{{$author->id}}" 
						class="list-group-item list-group-item-action">{{$author->name}}</a>
					@endforeach
				</div>

			</div>
		</div>

		</div>
	</div> <!-- Row Div -->
</x-layout>
	

</body>
</html>