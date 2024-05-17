<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voterController extends Controller
{
    public function loginView()
    {
        return view('admin.auth.login', ['page_name' => 'Login Form']);
    }

}
