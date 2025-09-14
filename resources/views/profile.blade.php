@auth
    <x-layout>

        <section id="home">
            <div class = "row g-0 mt-3 pt-2 pb-3">
                <div class = "row g-0 mt-5 pt-4 pb-5 rounded-start" style="background-color: rgb(46, 163, 187);">
                    <img class="img-fluid rounded-circle mx-auto mt-4 mb-2" 
                    style="width: 150px; height: 150px;" src="img/profile_default.jpg">
                    <h1 class = "display-4 text-light fw-bolder text-center">{{auth()->user()->full_name}}</h1>
                    <h3 class = "text-light fw-bolder text-center">ーーーー⭐ーーーー</h3>
                    <h5 class = "text-center text-light">{{auth()->user()->email}}</h5>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="d-flex pt-3 ">
                @if ($books == NULL)
                    <div class="alert alert-warning text-center p-5" role="alert">
                        <img src="../img/empty.png" width="100"> <br> You haven't buy a book
                    </div>
                @else
                    <div class="d-flex flex-wrap justify-content-center gap-5" style="100%">
                        @foreach ($books as $book)
                            <div class="card d-flex flex-column h-auto m-1 book-card" data-id="{{$book->id}}" style="width: 18rem;">
                                <img src="../uploads/cover/{{$book->cover}}" alt="{{$book->title}}" class="card-img-top" style="height: 25rem; object-fit: fill;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{$book->title}}</h5>
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
                                    
                                    <div class="mt-auto d-flex justify-content-between">
                                        <a href="uploads/files/{{$book->file}}" class="btn btn-success fw-bolder" target="_blank">Open</a>
                                        <a href="uploads/files/{{$book->file}}" class="btn btn-primary fw-bolder" 
                                        download={{$book->title}} target="_blank">Download</a>
                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

    </x-layout>
@else
@endauth