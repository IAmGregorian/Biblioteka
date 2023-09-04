<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function picture(){
        return $this->belongsTo(Books::class,'books_has_pictures', 'books_id', 'pictures_id');
    }
}
