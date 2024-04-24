<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\VoterController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/registerVoter', [VoterController::class,'registerVoter'])->name('registervoter.post');
Route::post('/resendOtp', [VoterController::class,'resendLoginOTP'])->name('resendLoginOTP.post');
Route::post('/validateVoterOTP', [VoterController::class,'validateVoterOTP'])->name('validateVoterOTP.post');
Route::post('/login', [VoterController::class,'login'])->name('voterlogin.post');
Route::post('/validateLoginOTP', [VoterController::class,'validateLoginOTP'])->name('validateLoginOTP.post');
