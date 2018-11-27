<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\ApiController;
use App\Models\Course;

class CoursesController extends ApiController
{
    protected $model = Course::class;
    protected $validationRules = ['course_name' => 'required'];
}
