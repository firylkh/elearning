<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

/** Jenis Method HTTP:
*1. Get = menamoilkan halaman 
*2. Post = mengirim data
*3. Put = meng-update data
*4. Delete = menghapus data 
*/

//route untuk menampilkan teks 
Route::get('/salam/{nama}', function($nama){
    return "Assalamualaikum $nama";
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);

//Route untuk menampilkan student
Route::get('admin/student',[StudentController::class,'index']);

//Route untuk menampilkan course
Route::get('admin/courses',[CoursesController::class,'index']);

//Route untuk
Route::get('admin/student/create',[StudentController::class,'create']);

//Route untuk mengirim data student
Route::post('admin/student/store',[StudentController::class,'store']);