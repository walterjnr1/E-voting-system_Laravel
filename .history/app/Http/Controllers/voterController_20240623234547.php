<?php

namespace App\Http\Controllers;

use App\Models\tblvoter;
use Illuminate\Http\Request;

class voterController extends Controller
{
    public function voterRecordView()
    {
        $data = tblvoter::all();
        return view('admin.voters.voter_record', ['page_name' => 'Voter Records','data' => $data]);
    }
    public function ViewAllVoterRecords($id)
    {
        $data = tblvoter::where('id', '=', $id)->get(); // replace 'ome_id_value' with the actual ID value
        return view('admin.voters.viewAllVoter', ['page_name' => 'Voter Complete Details','data' => $data]);
    }
    public function DeleteVoter($id)
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
