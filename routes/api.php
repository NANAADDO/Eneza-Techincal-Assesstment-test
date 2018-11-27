<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
header("Cache-Control: no-cache, must-revalidate");
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');



Route::post('Authentication','API\AuthController@getToken');
Route::group(['middleware'=>'auth:api'],function () {

    Route::resource('Courses','API\CoursesController');
    Route::resource('Subject','API\SubjectController');
    Route::resource('Content','API\ContentController');
    Route::resource('QuizAnswers','API\QuizAnswersController');

});
