<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voterController extends Controller
{
    public function voterView()
    {
        return view('admin.voters.login', ['page_name' => 'Login Form']);
    }

}
