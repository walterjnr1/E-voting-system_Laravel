<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\API\tblcandidate;


class resultController extends Controller
    {
    public function getPresidentResult()
    {
    
        $candidates = tblcandidate::where('office', 'Governor')->get();
        return response()->json($candidates, 201);
    
    }
    }
