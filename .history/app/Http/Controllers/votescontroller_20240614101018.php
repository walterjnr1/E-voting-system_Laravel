<?php

namespace App\Http\Controllers;
use App\Models\tblvote;
use Illuminate\Http\Request;


class votescontroller extends Controller
{
    public function votesRecordView()
{
    $votes_data = tblvote::join('tblvoter', 'tblvotes.voterID', '=', 'tblvoters.voterID','tblvotes.candidateID', '=', 'tblcandidates.candidateID')
                    ->select('tblvote.*', 'tblvoter.*') // Select all columns from both tables
                    ->get();
    
    return view('admin.votes.votes_record', ['page_name' => 'Vote(s) Records','data' => $votes_data]);
}
    
}
