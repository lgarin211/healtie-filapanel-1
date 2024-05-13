<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dfood extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode', 'name', 'natrium', 'fat', 'sugar', 'kcal', 'poster', 'etc',
    ];

    protected $casts = [

    ];
}
