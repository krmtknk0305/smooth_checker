<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timer extends Model
{
    use HasFactory;
    protected $table = 'timer';
    protected $fillable = [
        'seat_name',
        'course_name',
        'start',
        'limit_time',
    ];
}
