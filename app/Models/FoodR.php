<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodR extends Model
{
    use HasFactory;

    protected $fillable = [
        'poster', 'target', 'desk', 'nutrisi',
    ];

    protected $casts = [

    ];
}
