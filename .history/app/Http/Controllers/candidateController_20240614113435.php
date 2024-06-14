<?php

namespace App\Http\Controllers;
use App\Models\tblcandidate;
use Illuminate\Http\Request;

class candidateController extends Controller
{
    public function candidatesRecordView()
    {
        $candidates_data = tblcandidate::join('tblvoters', 'tblvoters.voterID', '=', 'tblcandidates.voterID')
                        ->select('tblvoters.*', 'tblcandidates.*') // Select all columns from all two tables
                        ->get();
        
        return view('admin.candidates.candidate_record', ['page_name' => 'Candidate(s) Records','data' => $candidates_data]);
    }
    public function DeleteCandidate($id)
    {
        $deldata = tblvoter::find($id);
        $deldata->delete();
        return back()->withSuccess('Voter Deleted Successfully ');
           }

    public function enable_disable_Voter($id)
    {
        $voter = tblvoter::find($id);

        if ($voter->status == 1) {
            $voter->status = 0;
        } else {
            $voter->status = 1;
        }
        $voter->save();

    return back()->withSuccess('Voter Status Changed Successfully ');
    }
}
