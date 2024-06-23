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
        $deldata = tblcandidate::find($id);
        $deldata->delete();
        return back()->withSuccess('Candidate Deleted Successfully ');
           }

    public function enable_disable_Candidate($id)
    {
        $Candidate = tblcandidate::find($id);

        if ($Candidate->status == 1) {
            $Candidate->status = 0;
        } else {
            $Candidate->status = 1;
        }
        $Candidate->save();

    return back()->withSuccess('Candidate Status Changed Successfully ');
    }
    public function ViewAllCandidateRecords($id)
    {
        //$data = tblcandidate::where('id', '=', $id)->get(); // replace 'ome_id_value' with the actual ID value
        //return view('admin.voters.viewAllCandidate', ['page_name' => 'Candidate Complete Details','data' => $data]);


        $data = tblcandidate::join('tblvoters', 'tblvoters.voterID', '=', 'tblcandidates.voterID')
        ->select('tblvoters.*', 'tblcandidates.*') // Select all columns from all two tables
        ->where('tblvoters.voterID', '=', $id)
        ->get();
        return view('admin.voters.viewAllCandidate', ['page_name' => 'Candidate Complete Details','data' => $data]);

    }
}
