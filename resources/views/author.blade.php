<x-layout>
	<div class = "row g-0 mt-5">
        <div class="align-items-center">
            <h1 class="display-4 fs-3 my-5"> 
            <a href="/index" class="nd" style="text-decoration: none">
                <img src="../img/back-arrow.PNG" width="35">
            </a>
            {{$key->name}}
            </h1>
        </div>
		

		<div class="d-flex pt-3 align-items-start">
			@if (count($books) == 0)
				<div class="alert alert-warning text-center p-5" role="alert">
					<img src="../img/empty.png" width="100">
					<br>
					<p class="fw-bolder">We dont have books from {{$key->name}} for now</p>
				</div>

			@else
			<div class="pdf-list d-flex flex-wrap" style="width: 80%;">
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
			<div class="category" style="width: 200px">

				<div class="list-group" style="width: 200px">
					<p class="list-group-item list-group-item-action active fw-bold m-0">Type</p>
					@foreach ($types as $type)
						<a href="/type/{{$type->id}}"
						class="list-group-item list-group-item-action">{{$type->name}}</a>
					@endforeach
				</div>

				<div class="list-group mt-5" style="width: 200px">
					<p class="list-group-item list-group-item-action active fw-bold m-0">Category</p>
					@foreach ($categories as $category)
						<a href="/category/{{$category->id}}"
						class="list-group-item list-group-item-action">{{$category->name}}</a>
					@endforeach
				</div>

				<div class="list-group mt-5" style="width: 200px">
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