<?php

namespace App\Http\Controllers;
use App\Models\tblcandidate;
use Illuminate\Http\Request;

class candidateController extends Controller
{
    public function votesRecordView()
    {
        $votes_data = tblcandidate::join('tblvoters', 'tblvoters.voterID', '=', 'tblcandidates.voterID')
                        ->select('tblvoters.*', 'tblcandidates.*') // Select all columns from all two tables
                        ->get();
        
        return view('admin.votes.candidate_record', ['page_name' => 'Candidate(s) Records','data' => $votes_data]);
    }
}
