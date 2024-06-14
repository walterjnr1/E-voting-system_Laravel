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
    
}
