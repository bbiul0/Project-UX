<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    public function books() {
        return $this->hasMany(Book::class);
    }
}
