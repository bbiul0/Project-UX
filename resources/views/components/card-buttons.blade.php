<div class="mt-auto d-flex justify-content-between @auth align-items-center @endauth gap-2">
    @auth
        <a class="c-btn btn btn-outline-primary" href="/buy/{{$book->id}}">Buy Book</a>

        <!-- Wishlist Star Button -->
        @if(in_array($book->id, $wishlist))
            <form method="POST" action="{{ route('wishlist.remove', ['user_id' => Auth::id(), 'book_id' => $book->id]) }}" class="d-flex justify-content-center">
                @csrf
                @method('DELETE')
                <button type="submit" class="c-btn btn p-0 border-0" onclick="return confirm('Are you sure?')">
                    {{-- <span style="font-size: 2rem; color: gold;">★</span> --}}
                    <span class="bi bi-bookmark-fill" style="font-size: 1.5rem; "></span>
                </button>
            </form>
        @else
            <form method="POST" action="{{ route('wishlist', ['user_id' => Auth::id(), 'book_id' => $book->id]) }}" class="d-flex justify-content-center">
                @csrf
                <button type="submit" class="c-btn btn p-0 border-0">
                    <span class="bi bi-bookmark" style="font-size: 1.5rem; "></span>
                </button>
            </form>
        @endif

    @else
        <a class="c-btn btn btn-outline-primary" href="{{route('loginCustomer.loginPage')}}">Buy Book?</a>
    @endauth

    <button type="button" class="c-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$book->id}}">
            More Info
    </button>
</div>