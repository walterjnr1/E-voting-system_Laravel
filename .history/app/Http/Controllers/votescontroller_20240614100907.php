<?php

namespace App\Http\Controllers;
use App\Models\tblvote;
use Illuminate\Http\Request;

$votes = tblvote::join('tblvoter', 'tblvote.voterID', '=', 'tblvoter.voterID')
                    ->get();
class votescontroller extends Controller
{
    public function votesRecordView()
{
    $votes_data = tblvote::join('tblvoters', 'tblvotes.voterID', '=', 'tblvoters.voterID','tblvotes.candidateID', '=', 'tblcandidates.candidateID')
                    ->select('tblvote.*', 'tblvoter.*') // Select all columns from both tables
                    ->get();
    
    return view('admin.votes.votes_record', ['page_name' => 'Vote(s) Records','data' => $votes_data]);
}
    
}
