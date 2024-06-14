<?php

namespace App\Http\Controllers;
use App\Models\tblvote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class votescontroller extends Controller
{
    public function votesRecordView()
    {
        $data = DB::table('tblvotes')
            ->join('tblvoters', 'tblvotes.voterID', '=', 'tblvoters.voterID')
            ->join('tblcandidate', 'tblvote.candidate_id', '=', 'tblcandidates.id')
            ->select('tblvote.*', 'tblvoter.fullname as candidate_name', 'tblcandidate.*')
            ->get();
    
        // You can then return the data or perform any other operations as needed
        return $data;
    }
    
}
