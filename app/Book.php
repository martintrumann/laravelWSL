<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model {
    protected $table = 'Book';

    public function author() {
        return $this->belongsToMany(Author::class, 'Book_Author');
    }
}
