<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public $timestamps = false;
    protected $table = 'users';

    protected $fillable = [
        'full_name',
        'email',
        'password',
        
    ];

    public function Books() {
        return $this->belongsToMany(Book::class, 'buybook', 'user_id', 'book_id');
    }

    public function wishlistedBooks() {
        return $this->belongsToMany(Book::class, 'wishlists', 'user_id', 'book_id');
    }

}
