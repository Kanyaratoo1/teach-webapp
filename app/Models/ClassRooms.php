<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_title',
        'room_code',
        'room_limits',
        'room_actived',
    ];
}
