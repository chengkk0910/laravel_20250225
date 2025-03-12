<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return redirect()->route('students.index');
    // return redirect()->route('teachers.index');
    // return redirect()->route('cars.index');
});

// students
Route::get('/students_excel', [StudentController::class, 'excel']);
Route::get('/students_hello', [StudentController::class, 'sayHello']);
Route::resource('students', StudentController::class);

// teachers
Route::resource('teachers', TeacherController::class);

// cars
Route::resource('cars', CarController::class);