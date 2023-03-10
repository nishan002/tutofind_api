<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/register', [App\Http\Controllers\Auth\UserAuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\Auth\UserAuthController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\UserAuthController::class, 'logout']);


Route::get('/job_board', [App\Http\Controllers\Admin\JobBoardController::class, 'index']);
Route::post('/job_board', [App\Http\Controllers\Admin\JobBoardController::class, 'store']);
Route::get('/job_board/{id}', [App\Http\Controllers\Admin\JobBoardController::class, 'edit']);
Route::put('/job_board/{id}', [App\Http\Controllers\Admin\JobBoardController::class, 'update']);
Route::delete('/job_board/{id}', [App\Http\Controllers\Admin\JobBoardController::class, 'destroy']);


Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
Route::post('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
Route::get('/categories/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
Route::put('/categories/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
Route::delete('/categories/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

Route::get('/subjects', [App\Http\Controllers\Admin\SubjectController::class, 'index']);
Route::post('/subjects', [App\Http\Controllers\Admin\SubjectController::class, 'store']);
Route::get('/subjects/{id}', [App\Http\Controllers\Admin\SubjectController::class, 'edit']);
Route::put('/subjects/{id}', [App\Http\Controllers\Admin\SubjectController::class, 'update']);
Route::delete('/subjects/{id}', [App\Http\Controllers\Admin\SubjectController::class, 'destroy']);

Route::get('/student_classes', [App\Http\Controllers\Admin\StudentClassController::class, 'index']);
Route::post('/student_classes', [App\Http\Controllers\Admin\StudentClassController::class, 'store']);
Route::get('/student_classes/{id}', [App\Http\Controllers\Admin\StudentClassController::class, 'edit']);
Route::put('/student_classes/{id}', [App\Http\Controllers\Admin\StudentClassController::class, 'update']);
Route::delete('/student_classes/{id}', [App\Http\Controllers\Admin\StudentClassController::class, 'destroy']);

Route::get('/tuition_related_info', [App\Http\Controllers\Admin\TuitionRelatedInfoController::class, 'index']);
Route::post('/tuition_related_info', [App\Http\Controllers\Admin\TuitionRelatedInfoController::class, 'store']);
Route::get('/tuition_related_info/{id}', [App\Http\Controllers\Admin\TuitionRelatedInfoController::class, 'edit']);
Route::put('/tuition_related_info/{id}', [App\Http\Controllers\Admin\TuitionRelatedInfoController::class, 'update']);
Route::delete('/tuition_related_info/{id}', [App\Http\Controllers\Admin\TuitionRelatedInfoController::class, 'destroy']);
