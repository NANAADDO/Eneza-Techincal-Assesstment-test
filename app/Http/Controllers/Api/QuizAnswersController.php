<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\ApiController;
use App\Models\QuizAnswers;

class QuizAnswersController extends ApiController
{
    protected $model = QuizAnswers::class;
    protected $validationRules = ['answer'=> 'required','content_id'=> 'required'];
}
