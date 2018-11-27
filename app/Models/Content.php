<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
     protected $fillable = [
       'content','subject_id', 'content_type',
    ];
}
