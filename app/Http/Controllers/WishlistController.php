<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{

    public function wishlist(Request $r) {
        $book = new Wishlist();
        $book->user_id = $r->user_id;
        $book->book_id = $r->book_id;
        $book->save();
        return redirect()->back();
    }

    public function removeWishlist(Request $r){
        Wishlist::where('user_id', $r->user_id)->where('book_id', $r->book_id)->delete();

        return redirect()->back()->with('success', 'Book removed from wishlist.');
    }
}