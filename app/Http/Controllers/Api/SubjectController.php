<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\ApiController;
use App\Models\Subject;

class SubjectController extends ApiController
{
    protected $model = Subject::class;
    protected $validationRules = ['subject_name' => 'required','course_id'=>'required'];
}
