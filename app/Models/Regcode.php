<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regcode extends Model
{
    protected $fillable = ['email','code'];
    protected $gaurded = ['is_valid'];
    use HasFactory;
}
