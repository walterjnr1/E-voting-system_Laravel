<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [VoterController::class,'registerUser'])->name('register.post');
Route::post('/resend', [UserController::class,'resendOTP'])->name('resendOTP.post');
Route::post('/OTP', [UserController::class,'validateOTP'])->name('validateOTP.post');
Route::post('/login', [UserController::class,'login'])->name('userlogin.post');