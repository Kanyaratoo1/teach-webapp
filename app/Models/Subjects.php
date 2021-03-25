<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'teach_id',
        'subject_title',
        'sun_day',
        'mon_day',
        'tue_day',
        'wed_day',
        'thu_day',
        'fri_day',
        'sat_day',
        'on_date',
        'on_time',
        'is_actived',
    ];

    public function teach_id()
    {
        return $this->belongsTo(Teachers::class,'teach_id');
    }
}
