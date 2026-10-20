<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get ('/', function () {
    return redirect ()->route('student.index');
});
Route::resource('student', StudentController::class);