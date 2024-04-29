<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\API\tblvote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\API\tblcandidate;
use function Symfony\Component\Clock\now;

class voteController extends Controller
{
    public function vote_President(Request $request)
{
    $candidateID = $request->input('candidateID');
    $voterID = $request->input('voterID');

    $voteRecord = DB::table('tblvotes')->where('voterID', $voterID)->where('election_type', 'President')->first();
    if ($voteRecord) {
        return response()->json(['success' => false, 'message' => ' You have already Casted your vote for this type of Election'], 404);
    } else {

        //update candidate count
        $candidate = tblcandidate::where('candidateID', $candidateID)->first();
        $candidate->count = $candidate->count + 1;
        $candidate->save();


        tblvote::create([
            'voterID' => $voterID,
            'candidateID' => $candidateID,
            'vote_time' => now(),
            'election_type' => 'President',
        ]);
        
        return response()->json(['success' => true, 'message' => 'You Voted successfully'], 201);
    }
    
}


public function vote_Governor(Request $request)
{
    $candidateID = $request->input('candidateID');
    $voterID = $request->input('voterID');

    $voteRecord = DB::table('tblvotes')->where('voterID', $voterID)->where('election_type', 'Governor')->first();
    if ($voteRecord) {
        return response()->json(['success' => false, 'message' => ' You have already Casted your vote for this type of Election'], 404);
    } else {

        //update candidate count
        $candidate = tblcandidate::where('candidateID', $candidateID)->first();
        $candidate->count = $candidate->count + 1;
        $candidate->save();


        tblvote::create([
            'voterID' => $voterID,
            'candidateID' => $candidateID,
            'vote_time' => now(),
            'election_type' => 'President',
        ]);
        
        return response()->json(['success' => true, 'message' => 'You Voted successfully'], 201);
    }
}
}
