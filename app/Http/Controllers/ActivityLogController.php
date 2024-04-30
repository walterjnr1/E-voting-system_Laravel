<?php

namespace App\Http\Controllers;

use App\Models\activity_log;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function ActivityLogrecord()
    {
    
        $data = activity_log::all();
        return view('admin.activityLog.activityLog', ['page_name' => 'Activity Log', 'data' => $data]);
  
    }
}
