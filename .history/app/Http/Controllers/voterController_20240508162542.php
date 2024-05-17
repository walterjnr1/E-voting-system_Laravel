<?php

namespace App\Http\Controllers;

use App\Models\API\tblvoter;
use Illuminate\Http\Request;

class voterController extends Controller
{
    public function voterRecordView()
    {
        $data = tblvoter::all();
        return view('admin.voters.voter_record', ['page_name' => 'Voter Record','data' => $data]);

      //  $data = User::all();
       // return view('admin.auth.Admin_record', ['page_name' => 'Admin Records', 'data' => $data]);
    }

}
