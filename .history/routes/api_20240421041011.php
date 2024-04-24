<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\VoterController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [VoterController::class,'register'])->name('register.post');
Route::post('/resend', [VoterController::class,'resendOTP'])->name('resendOTP.post');
Route::post('/OTP', [VoterController::class,'validateOTP'])->name('validateOTP.post');
Route::post('/login', [VoterController::class,'login'])->name('userlogin.post');