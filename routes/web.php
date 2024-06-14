<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;



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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route untuk menampilkan student
Route::get('admin/student',[StudentController::class,'index']);

//Route untuk menampilkan course
Route::get('admin/courses',[CoursesController::class,'index']);

//Route untuk
Route::get('admin/student/create',[StudentController::class,'create']);

//Route untuk mengirim data student
Route::post('admin/student/store',[StudentController::class,'store']);

//Route untuk menampilkan halaman edit student
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

//Route untuk menyimpan hasil update student 
Route::put('admin/student/update/{id}', [StudentController::class, 'update']);

//Route untuk menghapus student
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);

Route::get('admin/courses/create',[CoursesController::class,'create']);

Route::post('admin/courses/store',[CoursesController::class,'store']);

Route::get('admin/courses/edit/{id}', [CoursesController::class, 'edit']);

Route::put('admin/courses/update/{id}', [CoursesController::class, 'update']);

Route::delete('admin/courses/delete/{id}', [CoursesController::class, 'destroy']);
});

require __DIR__.'/auth.php';
