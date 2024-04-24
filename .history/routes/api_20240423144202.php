<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\VoterController;
use App\Http\Controllers\API\CandidateController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//voter route
Route::post('/registerVoter', [VoterController::class,'registerVoter'])->name('registervoter.post');
Route::post('/validateVoterRegisterOTP', [VoterController::class,'validateVoterRegisterOTP'])->name('validateVoterRegisterOTP.post');
Route::post('/resendOtp', [VoterController::class,'resendOtp'])->name('resendOtp.post');
Route::post('/validateVoterOTP', [VoterController::class,'validateVoterOTP'])->name('validateVoterOTP.post');
Route::post('/login', [VoterController::class,'login'])->name('voterlogin.post');
Route::post('/validateLoginOTP', [VoterController::class,'validateLoginOTP'])->name('validateLoginOTP.post');
Route::post('/deleteAccount', [VoterController::class,'deleteAccount'])->name('deleteAccount.post');
Route::post('/GetDetails', [VoterController::class,'GetDetails'])->name('GetDetails.View');

//candidate route
Route::post('/registerCandidate', [CandidateController::class,'registerCandidate'])->name('registerCandidate.post');
