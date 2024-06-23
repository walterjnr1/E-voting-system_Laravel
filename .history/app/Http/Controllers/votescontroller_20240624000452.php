<?php

namespace App\Http\Controllers;
use App\Models\tblvote;
use Illuminate\Http\Request;


class votescontroller extends Controller
{
    public function votesRecordView()
    {
               
        
        return view('admin.votes.votes_record', ['page_name' => 'Vote(s) Records','data' => $data]);
    }
    public function ViewAllVotesRecords($id)
    {
    $data = tblvote::join('tblvoters', 'tblvoters.voterID', '=', 'tblvotes.voterID')
     ->join('tblcandidates', 'tblvotes.candidateID', '=', 'tblcandidates.candidateID')
    ->select('tblvotes.*', 'tblvoters.*', 'tblcandidates.*') // Select all columns from all three tables
    ->where('tblvotes.id', '=', $id)
    ->get();
        
        return view('admin.votes.viewAllVote', ['page_name' => 'Complete Vote(s) Data','data' => $data]);
    }
    
}
