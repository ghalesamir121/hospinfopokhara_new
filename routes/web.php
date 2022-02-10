<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubAdminController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/add_hospital_view', [AdminController::class, 'addhospital']);
Route::post('/register_hospital', [AdminController::class, 'register']);


// Route::get('shift_date',[AdminController::class,'shiftdata'])->name('shiftdata');



Route::get('/add_doctor_view', [SubAdminController::class, 'addview']);
Route::post('/upload_doctor', [SubAdminController::class, 'upload']);

Route::get('/add_bed_view', [SubAdminController::class, 'bedview']);
Route::post('/add_bed', [SubAdminController::class, 'add']);

Route::get('/approve', [AdminController::class, 'approve']);
Route::get('/delete/{id}',[SubAdminController::class, 'delete_function']);

Route::get('/deletehospital', [AdminController::class, 'deletehospital']);
Route::get('/click_delete/{id}',[AdminController::class, 'delete_hospital']);