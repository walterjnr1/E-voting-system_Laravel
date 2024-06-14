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
        select data from tblvote and tblvote models where tblvote.voterID = tblvoter.voterID;
    }
    
}
