<?php

namespace App\Http\Controllers;

use App\Models\API\tblvoter;
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
        //$data = tblvoter::find($id);
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
        $user = tblvoter::find($id);

        if ($user->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }

        $user->save();

        //Add to activity log
        $id = Auth::user()->id;
        $row = User::find($id);
        $db_fullname = $row['fullname'];

        activity_log::create([
            'task' => $db_fullname . ' Disable_Enable an Admin on ' . NOW(),
        ]);
        //End of activity log

        return back()->withSuccess('Admin Status Changed Successfully ');
    }
}
