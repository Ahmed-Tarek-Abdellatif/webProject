<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FinancesCntroller;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/forgot_password', function () {
    return view('forgot_password');
})->name('forgot_password');

Route::get('/finances', function () {
    return view('finances');
})->name('finances');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/petition', function () {
    return view('petition');
})->name('petition');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/TAmain', function () {
    return view('TAmain');
})->name('TAmain');

Route::get('/TAcourses', function () {
    return view('TAcourses');
})->name('TAcourses');

Route::get('/Regstd', function () {
    return view('Regstd');
})->name('Regstd');

Route::get('/stdedit', function () {
    return view('stdedit');
})->name('stdedit');

Route::get('/applyedit', function () {
    return view('applyedit');
})->name('applyedit');

Route::get('/TAfaq', function () {
    return view('TAfaq');
})->name('TAfaq');

Route::get('/Regcourse', function () {
    return view('Regcourse');
})->name('Regcourse');
// Remove duplicate root route definition
// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();


Route::get('/student/{id}', [StudentController::class, 'infoshow']);

Route::get('/main', [LoginController::class, 'infoshow'])->name('main');
Route::get('/TAmain', [LoginController::class, 'TAinfoshow'])->name('TAmain');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/Login', [LoginController::class, 'login'])->name('login');
Route::post('/Login', [FinancesCntroller::class, 'fin'])->name('web');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/Regstd', [StudentController::class, 'register'])->name('register');

Route::get('/course-info', [CourseController::class, 'showCourseInfoForm'])->name('course.info');
Route::post('/course-info', [CourseController::class, 'createCourse'])->name('course.create');

Route::get('/stdedit', [StudentController::class, 'showAllStudents'])->name('students.index');



Route::get('/{id}/stdedit', [StudentController::class, 'stdedit'])->name('students.edit');
Route::get('/studentedit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/applyedit/{id}', [StudentController::class, 'stdupdate'])->name('students.update');
