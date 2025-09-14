<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\Author;
use App\Models\Type;
use App\Models\Category;
use App\Models\Wishlist;

class StoreController extends Controller
{
    public function storePage() {
        $books = Book::get();
        $authors = Author::get();
        $categories = Category::get();
        $types = Type::get();
        $wishlist = Wishlist::where('user_id', Auth::id())->pluck('book_id')->toArray();
        return view('index', ['books' => $books, 'authors' => $authors, 'categories' => $categories, 'types' => $types, 'wishlist' => $wishlist]);
    }

    public function loginPage() {

        if (Auth::check()) {
            return redirect('index');
        }
        
        return view('login-customer');
    }

    public function signupPage() {

        if (Auth::check()) {
            return redirect('index');
        }
        
        return view('signup');
    }

    public function profilePage() {
        if (Auth::check()) {
            $user = auth()->user();
            $books = $user->Books()->withPivot('tanggal')->orderByDesc('buybook.tanggal')->get();
            $authors = Author::get();
            $categories = Category::get();
            $types = Type::get();
        
            return view('profile', [
                'user' => $user, 
                'books' => $books, 
                'authors' => $authors, 
                'categories' => $categories, 
                'types' => $types]);
        }

        return redirect()->route('loginCustomer.loginPage');
    }

    public function searchPage(Request $r) {
        $books = 
        Book::where('title', 'like', '%' . $r->key . '%')
        ->orWhere('description', 'like', '%' . $r->key . '%')->get();
        $authors = Author::get();
        $categories = Category::get();
        $types = Type::get();
        $wishlist = Wishlist::where('user_id', Auth::id())->pluck('book_id')->toArray();
        
        return view('search', [
            'books' => $books, 
            'authors' => $authors, 
            'categories' => $categories, 
            'types' => $types,
            'wishlist' => $wishlist,
            'key' => $r->key]);
    }

    public function typePage(Request $r) {
        $books = Book::where('type_id', '=', $r->id)->get();
        $authors = Author::get();
        $categories = Category::get();
        $types = Type::get();
        $wishlist = Wishlist::where('user_id', Auth::id())->pluck('book_id')->toArray();
        $key = Type::where('id', '=',  $r->id)->first();
        
        return view('type', [
            'books' => $books, 
            'authors' => $authors, 
            'categories' => $categories, 
            'types' => $types,
            'wishlist' => $wishlist,
            'key' => $key]);
    }

    public function authorPage(Request $r) {
        $books = Book::where('author_id', '=', $r->id)->get();
        $authors = Author::get();
        $categories = Category::get();
        $types = Type::get();
        $wishlist = Wishlist::where('user_id', Auth::id())->pluck('book_id')->toArray();
        $key = Author::where('id', '=',  $r->id)->first();
        
        return view('author', [
            'books' => $books, 
            'authors' => $authors, 
            'categories' => $categories, 
            'types' => $types,
            'wishlist' => $wishlist,
            'key' => $key]);
    }

    public function categoryPage(Request $r) {
        $books = Book::where('category_id', '=', $r->id)->get();
        $authors = Author::get();
        $categories = Category::get();
        $types = Type::get();
        $wishlist = Wishlist::where('user_id', Auth::id())->pluck('book_id')->toArray();
        $key = Category::where('id', '=',  $r->id)->first();
        
        
        return view('category', [
            'books' => $books, 
            'authors' => $authors, 
            'categories' => $categories, 
            'types' => $types,
            'wishlist' => $wishlist,
            'key' => $key]);
    }

    public function buyPage(Request $r) {
        $book = Book::where('id', '=', $r->id)->first();
        $authors = Author::get();
        $categories = Category::get();
        $types = Type::get();
        
        return view('buy', [
            'book' => $book, 
            'authors' => $authors, 
            'categories' => $categories, 
            'types' => $types]);
    }

    public function wishlistPage(Request $r) {
        $books = Book::all();
        $authors = Author::all();
        $categories = Category::all();
        $types = Type::all();
        
        // Get wishlisted book IDs for authenticated user
        $wishlist = [];
        if(auth()->check()) {
            $wishlist = auth()->user()->wishlistedBooks()->pluck('book_id')->toArray();
        }
        
        return view('wishlist', compact('books', 'authors', 'categories', 'types', 'wishlist'));
    }
}