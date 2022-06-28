<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regcode extends Model
{
    protected $fillable=['is_valid'];
    use HasFactory;
}
