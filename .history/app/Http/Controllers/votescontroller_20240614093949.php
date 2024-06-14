<?php

namespace App\Http\Controllers;
use App\Models\API\tblvote;
use Illuminate\Http\Request;

class votescontroller extends Controller
{
    public function votesRecordView()
    {
        $data = tblvote::all();
        return view('admin.voters.votes_record', ['page_name' => 'Vote(s) Records','data' => $data]);
    }
    public function ViewVoterRecords($id)
    {
        $data = tblvote::where('id', '=', $id)->get(); // replace 'ome_id_value' with the actual ID value
        return view('admin.voters.viewAllVoter', ['page_name' => 'Voter Complete Details','data' => $data]);
    }
}
