<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CareerController;

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
Route::get('/student',function (){
  return view('welcome');
});
route::get('/admin', function (){
    return view('admin/index');
});
//Route::get('/list/student', [StudentController::class, 'index']);

Route::get('/career', [CareerController::class, 'index']);

route::get('/template',function () {
    return view('template/index');
});
Route::resource('student',studentcontroller::class);
//index , create , store, edit, update , show, destroy ... more functions
//route::resource('career',careercontroller::class)