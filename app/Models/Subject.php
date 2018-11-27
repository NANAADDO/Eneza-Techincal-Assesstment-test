<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   protected $fillable = [
        'subject_name', 'course_id',
    ];
}
