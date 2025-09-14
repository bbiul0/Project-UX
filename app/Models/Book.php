<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    public function Author() {
        return $this->belongsTo(Author::class);
    }

    public function Category() {
        return $this->belongsTo(Category::class);
    }
    
    public function Type() {
        return $this->belongsTo(Type::class);
    }

    public function Customers() {
        return $this->belongsToMany(User::class, 'buybook', 'book_id', 'user_id');
    }

    public function wishlistedByUsers() {
        return $this->belongsToMany(User::class, 'wishlists', 'book_id', 'user_id');
    }
}
