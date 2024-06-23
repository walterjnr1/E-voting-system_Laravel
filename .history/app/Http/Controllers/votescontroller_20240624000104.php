<?php

namespace App\Http\Controllers;
use App\Models\tblvote;
use Illuminate\Http\Request;


class votescontroller extends Controller
{
    public function votesRecordView()
    {
        $data = tblvote::all();

        
        return view('admin.votes.votes_record', ['page_name' => 'Vote(s) Records','data' => $data]);
    }
    public function ViewAllVotesRecords($id)
    {
        $data = tblvote::where('id', '=', $id)->get(); // replace 'ome_id_value' with the actual ID value


        return view('admin.votes.viewAllVote', ['page_name' => 'Complete Vote(s) Data','data' => $data]);
    }
    
}
