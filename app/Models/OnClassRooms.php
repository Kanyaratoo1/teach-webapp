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
        'on_day',
        'at_date',
        'at_time',
        'rounds',
        'is_absent',
    ];

    public function student_id()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function room_id()
    {
        return $this->belongsTo(SubjectRooms::class, 'room_id');
    }
}
