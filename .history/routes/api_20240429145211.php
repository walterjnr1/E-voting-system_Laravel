<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\VoterController;
use App\Http\Controllers\API\CandidateController;
use App\Http\Controllers\API\resultController;
use App\Http\Controllers\API\voteController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//voter route
Route::post('/registerVoter', [VoterController::class,'registerVoter'])->name('registervoter.post');
Route::post('/validateVoterRegisterOTP', [VoterController::class,'validateVoterRegisterOTP'])->name('validateVoterRegisterOTP.post');
Route::post('/resendOtp', [VoterController::class,'resendOtp'])->name('resendOtp.post');
Route::post('/validateVoterOTP', [VoterController::class,'validateVoterOTP'])->name('validateVoterOTP.post');
Route::post('/login', [VoterController::class,'login'])->name('voterlogin.post');
Route::post('/validateLoginOTP', [VoterController::class,'validateLoginOTP'])->name('validateLoginOTP.post');
Route::post('/deleteAccount', [VoterController::class,'deleteAccount'])->name('deleteAccount.post');
Route::get('/getVoterDetails', [VoterController::class,'getVoterDetails'])->name('getVoterDetails.Get');

//candidate route
Route::post('/registerCandidate', [CandidateController::class,'registerCandidate'])->name('registerCandidate.post');
Route::post('/validateCandidate', [CandidateController::class,'chk_if_candidate'])->name('chk_if_candidate.post');
Route::get('/getCandidateDetails', [CandidateController::class,'getCandidateDetails'])->name('getCandidateDetails.Get');
Route::get('/getAllParties', [CandidateController::class,'getAllParties'])->name('getAllParties.Get');
Route::get('/selectGovernor', [CandidateController::class,'selectGovernor'])->name('selectGovernor.Get');
Route::get('/selectPresident', [CandidateController::class,'selectPresident'])->name('selectPresident.Get');

//vote route
Route::post('/vote_President', [voteController::class,'vote_President'])->name('vote_President.post');
Route::post('/vote_Governor', [voteController::class,'vote_Governor'])->name('vote_Governor.post');

//result route
Route::get('/getPresidentResult', [resultController::class,'getPresidentResult'])->name('getPresidentResult.Get');
Route::get('/getGovernorResult', [resultController::class,'getGovernorResult'])->name('getGovernorResult.Get');
