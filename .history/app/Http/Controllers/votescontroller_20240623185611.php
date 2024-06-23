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
        $data = tblv::join('tblvoters', 'tblvoters.voterID', '=', 'tblcandidates.voterID')
        ->select('tblvoters.*', 'tblcandidates.*') // Select all columns from all two tables
        ->where('tblcandidates.id', '=', $id)
        ->get();
        return view('admin.candidates.viewAllCandidate', ['page_name' => ' Complete Candidate Details','data' => $data]);

    }
    
}
