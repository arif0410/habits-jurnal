<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    use HasFactory;

    protected $table = 'habits';

    protected $fillable = [
        'studentName',
        'studentSerial',
        'studentClass',
        'date',
        'morningSport',
        'wakeUpTime',
        'worship',
        'prayer',
        'breakfast',
        'learningActivity',
        'communityActivity',
        'bedtime',
    ];

    // Casting array untuk field checkbox
    protected $casts = [
        'morningSport' => 'array',
        'worship' => 'array',
        'prayer' => 'array',
    ];
}

