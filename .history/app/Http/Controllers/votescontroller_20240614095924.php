<?php

namespace App\Http\Controllers;
use App\Models\tblvote;
use Illuminate\Http\Request;
$votes = tblvote::join('tblvoter', 'tblvote.voterID', '=', 'tblvoter.voterID')
                    ->get();
class votescontroller extends Controller
{
    public function votesRecordView()
{
    $votes = tblvote::join('tblvoter', 'tblvote.voterID', '=', 'tblvoter.voterID')
                    ->select('tblvote.*', 'tblvoter.*') // Select all columns from both tables
                    ->get();
    
    // Do something with the $votes data
}
    
}
