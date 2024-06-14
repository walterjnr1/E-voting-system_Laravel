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
            ->join('tblvoters', 'tblvotes.voter_id', '=', 'tblvoter.id')
            ->join('tblcandidate', 'tblvote.candidate_id', '=', 'tblcandidate.id')
            ->select('tblvote.*', 'tblvoter.fullname as candidate_name', 'tblcandidate.*')
            ->get();
    
        // You can then return the data or perform any other operations as needed
        return $data;
    }
    
}
