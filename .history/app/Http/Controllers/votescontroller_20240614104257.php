<?php

namespace App\Http\Controllers;
use App\Models\tblvote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class votescontroller extends Controller
{
    public function votesRecordView()
    {
        $votes_data = DB::table('tblvotes')
            ->join('tblvoters', 'tblvotes.voterID', '=', 'tblvoters.voterID')
            ->join('tblcandidates', 'tblvotes.candidateID', '=', 'tblcandidates.voterID')
            ->select('tblvotes.*', 'tblvoters.fullname as candidate_name', 'tblcandidates.*')
            ->get();
    
        // You can then return the data or perform any other operations as needed
        return view('admin.votes.votes_record', ['page_name' => 'Vote(s) Records','data' => $votes_data]);
    }
    
}
