<?php

namespace App\Http\Controllers;
use App\Models\tblvote;
use Illuminate\Http\Request;


class votescontroller extends Controller
{
    public function votesRecordView()
{
    $votes_data = tblvote::join('tblvoter', 'tblvote.voterID', '=', 'tblvoter.voterID')
                    ->join('tblcandidate', 'tblvote.candidateID', '=', 'tblcandidate.candidateID')
                    ->select('tblvote.*', 'tblvoter.*', 'tblcandidate.*') // Select all columns from all three tables
                    ->get();
    
    return view('admin.votes.votes_record', ['page_name' => 'Vote(s) Records','data' => $votes_data]);
}
    
}
