<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    CONST CREATED_AT = 'rented_at';
    CONST UPDATED_AT = null;

    protected $table = 'rent';

}
