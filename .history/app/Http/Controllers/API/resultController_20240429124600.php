<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\API\tblcandidate;


class resultController extends Controller
{
    public function getpresidentResult()
    {
    
        $candidates = tblcandidate::where('office', 'Governor')->where('status', 1)->get();
    return response()->json($candidates, 201);
    
    }
    }
