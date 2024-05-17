<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\API\tblcandidate;


class resultController extends Controller
    {
        public function getPresidentResult()
        {
            $candidates = tblcandidate::where('office', 'President')->where('tblcandidates.status', 1)
                ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
                ->orderBy('count', 'desc')
                ->get();
            return response()->json(['data'=> $candidates], 201);
        }
    public function getGovernorResult()
    {
    
        $candidates = tblcandidate::where('office', 'Governor')->where('tblcandidates.status', 1)
                ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
                ->orderBy('count', 'desc')
                ->get();
            return response()->json(['data'=> $candidates], 201);
    
    }
    }
