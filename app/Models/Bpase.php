<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpase extends Model
{
    use HasFactory;

    protected $fillable = [
        'height', 'weight', 'bmi', 'goals', 'periode', 'ushid',
    ];

    protected $casts = [

    ];
}
