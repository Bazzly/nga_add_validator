<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postcodes extends Model
{
    protected $gaurded = ['is_verified', 'user_id'];
    use HasFactory;
}
