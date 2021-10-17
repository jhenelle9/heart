<?php

use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

// All Admin Routes
// Get Methods
Route::get('/admin/login',[AdminController::class,'login']);
Route::get('/admin/logout',[AdminController::class,'logout']);
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
Route::get('/admin/applicant',[AdminController::class,'activity']);
Route::get('/admin/payments',[AdminController::class,'pay']);
Route::get('/admin/gallery',[AdminController::class,'media']);
Route::get('/admin/courses',[AdminController::class,'courses']);
Route::get('/admin/add/course',[AdminController::class,'add_course']);
// Post Methods
Route::post('signin',[AdminController::class,'signin']);
Route::post('subject',[AdminController::class,'added_subject']);
Route::post('subject',[AdminController::class,'added_subject']);
