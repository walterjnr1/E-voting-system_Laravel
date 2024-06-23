<?php

namespace App\Http\Controllers;
use App\Models\tblvote;
use Illuminate\Http\Request;


class votescontroller extends Controller
{
    public function votesRecordView()
    {
        $votes_data = tblvote::join('tblvoters', 'tblvoters.voterID', '=', 'tblvotes.voterID')
                        ->join('tblcandidates', 'tblvotes.candidateID', '=', 'tblcandidates.candidateID')
                        ->select('tblvotes.*', 'tblvoters.*', 'tblcandidates.*') // Select all columns from all three tables
                        ->get();
        
        return view('admin.votes.votes_record', ['page_name' => 'Vote(s) Records','data' => $votes_data]);
    }
    public function ViewAllVotesRecords($id)
    {
        $data = tblvote::join('tblvotes', 'tblvotes.voterID', '=', 'tblvoters.voterID')
        ->select('tblvotes.*', 'tblvoters.*') // Select all columns from all two tables
        ->where('tblcandidates.id', '=', $id)
        ->get();
        return view('admin.votes.viewAllVote', ['page_name' => ' Complete Vote Details','data' => $data]);

    }
    
}
