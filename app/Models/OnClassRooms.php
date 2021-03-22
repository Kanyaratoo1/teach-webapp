<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnClassRooms extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'room_id',
        'at_date',
        'at_time',
        'rounds',
        'is_absent',
    ];
}
