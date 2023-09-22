<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AttendanceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rotas para Teacher
Route::apiResource('teachers', TeacherController::class);

// Rotas para Student
Route::apiResource('students', StudentController::class);

// Rotas para Course
Route::apiResource('courses', CourseController::class);

// Rotas para Attendance
Route::apiResource('attendances', AttendanceController::class);
