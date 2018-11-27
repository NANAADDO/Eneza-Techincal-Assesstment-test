<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\ApiController;
use App\Models\Content;

class ContentController extends ApiController
{
    protected $model = Content::class;
    protected $validationRules = ['content'=> 'required','subject_id'=> 'required', 'content_type'=> 'required'];
}
