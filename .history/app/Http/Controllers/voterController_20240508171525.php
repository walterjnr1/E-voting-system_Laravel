<?php

namespace App\Http\Controllers;

use App\Models\API\tblvoter;
use Illuminate\Http\Request;

class voterController extends Controller
{
    public function voterRecordView()
    {
        $data = tblvoter::all();
        return view('admin.voters.voter_record', ['page_name' => 'Voter Records','data' => $data]);
    }
    public function voterRecordView()
    {
        $data = tblvoter::all();
        return view('admin.voters.voter_record', ['page_name' => 'Voter Records','data' => $data]);
    }
}
