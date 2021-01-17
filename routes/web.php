<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('students.courses');
});

Route::get('/courses', 'App\Http\Controllers\CourseController@index')->name('course.index');
Route::get('/mentoring/{id}', 'App\Http\Controllers\MentoringController@index')->name('mentoring.index');
Route::get('/jobs', 'App\Http\Controllers\JobController@index')->name('job.index');
Route::get('/profile', 'App\Http\Controllers\StudentController@profile')->name('student.profile');
Route::get('/students', 'App\Http\Controllers\CompanyController@indexStudent')->name('company.students');
Route::get('/company/profile', 'App\Http\Controllers\CompanyController@profile')->name('company.jobs');

