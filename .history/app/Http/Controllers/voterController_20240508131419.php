<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voterController extends Controller
{
    public function voterView()
    {
        return view('admin.voters.voter_records', ['page_name' => 'Login Form']);
    }

}
