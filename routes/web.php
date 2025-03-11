<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    // return redirect()->route('students.index');
    return redirect()->route('teachers.index');
});

// students
Route::get('/students_excel', [StudentController::class, 'excel']);
Route::get('/students_hello', [StudentController::class, 'sayHello']);
Route::resource('students', StudentController::class);

// teachers
Route::resource('teachers', TeacherController::class);
