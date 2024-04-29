<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\API\tblcandidate;


class resultController extends Controller
    {
    public function getPresidentResult()
    {
    
        $candidates = tblcandidate::where('office', 'President')->where('status', 1)->get();
        return response()->json(['success' => true,'message' => 'OTP sent to your Email and Phone','data'=> $candidates], 201);
    
    }
    }
