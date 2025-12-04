<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
    //
    protected $table ='books';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'synopsis', 'photo', 'publisher', 'release', 'isbn', 'page'];
}
