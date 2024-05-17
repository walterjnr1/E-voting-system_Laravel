<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voterController extends Controller
{
    public function voterRecordView()
    {
        return view('admin.voters.voter_record', ['page_name' => 'Voter Record']);
    }

}
