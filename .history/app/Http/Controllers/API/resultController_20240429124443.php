<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class resultController extends Controller
{
    public function getpresidentResult()
    {
        $parties = DB::table('tblpartys')->select('name', 'logo')->get();
        return response()->json($parties, 201);
    }
}
