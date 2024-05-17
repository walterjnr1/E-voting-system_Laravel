<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\voterController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\CountController;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    ///$data = ['page_name' => 'Home','greeting' => 'Hi there, Welcome'];
    //return view('admin/home/index')->with($data);
    return view('admin/home/index', ['page_name' => 'Home','greeting' => 'Welcome Back']);

})->middleware('auth');

Route::get('/login', [AuthController::class,'loginView'])->name('login');
Route::post('/login', [AuthController::class,'loginPost'])->name('login.post');
Route::get('/ForgotPassword',[AuthController::class,'forgotView'])->name('forgot.view');
Route::post('/ForgotPassword',[AuthController::class,'forgotPost'])->name('forgot.post');
Route::get('/ResetPassword/{token}',[AuthController::class,'ResetPasswordView'])->name('ResetPassword.view');
Route::post('/ResetPassword/{token}',[AuthController::class,'ResetPasswordPost'])->name('ResetPassword.post');Route::middleware('auth')->group(function () {
   
Route::get('/Admin.registration', [AuthController::class,'AdminRegistrationView'])->name('registration.view');
Route::post('/Admin.registration', [AuthController::class,'AdminRegistrationPost'])->name('registration.post');

Route::get('/Admin_record', [AuthController::class,'Admin_recordView'])->name('Admin_record.view');
Route::get('/delete.Admin/{id}', [AuthController::class,'DeleteAdmin'])->name('delete.Admin');
Route::get('/enable_disable.Admin/{id}', [AuthController::class,'enable_disable_Admin'])->name('enable_disable.Admin');

Route::get('/logout',[AdminController::class,'logout'])->name('logout');

Route::get('/profile', [AdminController::class,'profileView'])->name('profile.view');
Route::post('/profile', [AdminController::class,'profilePost'])->name('profile.post');

Route::get('/ChangePassword', [AdminController::class,'changePasswordView'])->name('changePassword.view');
Route::post('/ChangePassword', [AdminController::class,'changePasswordPost'])->name('changePassword.post');
});


Route::middleware('auth')->group(function () {
   
    Route::get('/ActivityLog.Record', [ActivityLogController::class,'ActivityLogrecord'])->name('ActivityLog.view');
});

Route::middleware('auth')->group(function () {
   
    Route::get('/countrecord', [CountController::class,'countUsers'])->name('countrecord');

});

Route::middleware('auth')->group(function () {
 Route::get('/voterRecord', [voterController::class,'voterRecordView'])->name('voterRecord.view');
 
});