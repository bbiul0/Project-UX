<div class="modal" tabindex="-1" id="exampleModal{{$book->id}}">
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
                      <img src="../uploads/cover/{{$book->cover}}" alt="{{$book->title}}" class="img-fluid h-auto">
                </div>
            <!-- Book details on the right -->
            <div class="col-md-8">

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

                        <p class="card-text">{{$book->description}}</p>
                    </p>
                </div>

            </div>
          </div>
        </div>

        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary fw-bolder" data-bs-dismiss="modal">Close</button>
        </div> --}}

      </div>
    </div>
  </div>