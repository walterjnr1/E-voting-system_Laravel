<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\VoterController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/registerVoter', [VoterController::class,'registerVoter'])->name('registervoter.post');
Route::post('/resendLoginOTP', [VoterController::class,'resendLoginOTP'])->name('resendLoginOTP.post');
Route::post('/validateloginOTP', [VoterController::class,'validateloginOTP'])->name('validateloginOTP.post');
Route::post('/login', [VoterController::class,'login'])->name('userlogin.post');