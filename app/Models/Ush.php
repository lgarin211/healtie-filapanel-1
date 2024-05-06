<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ush extends Model
{
    use HasFactory;

    protected $fillable = [
        'alamat', 'tanggal_lahir', 'tujuan', 'profilepaat',
    ];

    protected $casts = [

    ];
}
