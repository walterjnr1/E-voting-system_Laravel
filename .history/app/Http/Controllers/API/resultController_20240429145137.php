<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\API\tblcandidate;


class resultController extends Controller
    {
    public function getPresidentResult()
    {
    
        $candidates = tblcandidate::where('office', 'President')->where('status', 1)->orderBy('count', 'desc')->get();
        return response()->json(['data'=> $candidates], 201);
    
    }
    public function getPresidentResult()
    {
    
        $candidates = tblcandidate::where('office', 'President')->where('status', 1)->orderBy('count', 'desc')->get();
        return response()->json(['data'=> $candidates], 201);
    
    }
    }
