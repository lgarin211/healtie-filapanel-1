<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trackpase extends Model
{
    use HasFactory;

    protected $fillable = [
        'ushid', 'dfoodid', 'paseline', 'poster',
    ];

    protected $casts = [

    ];
}
