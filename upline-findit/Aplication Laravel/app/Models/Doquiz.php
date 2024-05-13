<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doquiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'ushid', 'score', 'desk',
    ];

    protected $casts = [

    ];
}
