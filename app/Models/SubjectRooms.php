<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectRooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'teach_id',
        'room_id',
        'sun_day',
        'mon_day',
        'tue_day',
        'wed_day',
        'thu_day',
        'fri_day',
        'sat_day',
        'room_date',
        'room_time',
        'is_active',
    ];

    public function subject_id()
    {
        return $this->belongsTo(Subjects::class, 'subject_id');
    }
    public function teach_id()
    {
        return $this->belongsTo(Teachers::class, 'teach_id');
    }
    public function room_id()
    {
        return $this->belongsTo(ClassRooms::class, 'room_id');
    }
}
