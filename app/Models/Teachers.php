<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description'
    ];

    public function user_id()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
