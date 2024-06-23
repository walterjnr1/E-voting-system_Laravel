<?php

namespace App\Http\Controllers;
use App\Models\tblvote;
use Illuminate\Http\Request;


class votescontroller extends Controller
{
    public function votesRecordView()
    {
        $data = tblvote::leftjoin('tblvoters', 'tblvoters.voterID', '=', 'tblvotes.voterID')
        ->leftjoin('tblcandidates', 'tblvotes.candidateID', '=', 'tblcandidates.candidateID')
        ->select('tblvotes.*', 'tblvoters.*', 'tblcandidates.*') // Select all columns from all three tables
        ->get();
        
        return view('admin.votes.votes_record', ['page_name' => 'Vote(s) Records','data' => $data]);
    }
    public function ViewAllVotesRecords($id)
    {
    
    }
    
}
