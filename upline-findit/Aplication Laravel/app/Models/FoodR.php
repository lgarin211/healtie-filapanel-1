<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodR extends Model
{
    use HasFactory;

    protected $table = 'food_rs';

    protected $fillable = [
        'poster', 'target', 'desk', 'nutrisi','produk'
    ];

    protected $casts = [

    ];
}
