<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SleepTrack extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal', 'start', 'wake', 'esensi', 'deskpoin',
    ];

    protected $casts = [

    ];
}
