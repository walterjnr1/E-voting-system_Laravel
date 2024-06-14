<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class candidateController extends Controller
{
    public function votesRecordView()
    {
       
        
        return view('admin.votes.votes_record', ['page_name' => 'Vote(s) Records','data' => $votes_data]);
    }
}
