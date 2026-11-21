
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

// Existing pages

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/', function(){
    return view('welcome');
});

// Student Routes

Route::get('/Student/insert', [StudentController::class, 'insert']);

Route::get('/Student/fetch', [StudentController::class, 'fetch']);


// Teacher Routes

Route::get('/Teacher/insert', [TeacherController::class, 'insert']);

Route::get('/Teacher/fetch', [TeacherController::class, 'fetch']);

