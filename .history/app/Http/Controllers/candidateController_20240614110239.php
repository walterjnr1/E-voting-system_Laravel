<?php

namespace App\Http\Controllers;
use App\Models\tblcandidate;
use Illuminate\Http\Request;

class candidateController extends Controller
{
    public function votesRecordView()
    {
        $votes_data = tblcandidate::join('tblvoters', 'tblvoters.voterID', '=', 'tblcandidate.voterID')
                        ->select('tblvotes.*', 'tblvoters.*', 'tblcandidates.*') // Select all columns from all three tables
                        ->get();
        
        return view('admin.votes.votes_record', ['page_name' => 'Vote(s) Records','data' => $votes_data]);
    }
}
