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
        //$data = tblvoter::where('id', '=', 'ome_id_value')->get(); // replace 'ome_id_value' with the actual ID value
        return view('admin.voters.viewAllVoter', ['page_name' => 'Voter Complete Details','data' => $data]);
    }
}
