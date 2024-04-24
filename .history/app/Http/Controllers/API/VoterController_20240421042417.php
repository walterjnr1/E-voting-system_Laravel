<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\API\tblvoter;
use Illuminate\Http\Request;

class VoterController extends Controller
{
    public function registerVoter(Request $request)
    {
        $request->validate([
            'voterID' => 'required|string|max:50',
            'fullname' => 'required|max:59',
            'email' => 'required|email|max:60|unique:tblvoters',
            'maritalstatus' => 'required|string|max:12',
            'sex' => 'required|string|max:10',
            'DOB' => 'required|string|max:25',
            'phone' => 'required|string|max:11',
            'address' => 'required|string|max:60',
            'lga' => 'string|max:40',
            'state' => 'string|max:30',
            'occupation' => 'required|string|max:40',
            'status' => 'required|string|max:1',
            'educational_qualification' => 'required|string|max:10',
            'photo' => 'required|string|max:5000',
        ]);

        $voter = tblvoter::create([
            'voterID' => ucwords($request->voterID),
            'fullname' => ucwords($request->fullname), 
            'email' => ucwords($request->email),
            'maritalstatus' => ucwords($request->maritalstatus), 
            'sex' => ucwords($request->sex),
            'DOB' => ucwords($request->DOB), 
            'phone' => ucwords($request->phone),
            'address' => ucwords($request->address), 
            'lga' => ucwords($request->lga),
            'state' => ucwords($request->state), 
            'occupation' => ucwords($request->occupation),
            'status' => ucwords($request->status), 
            'educational_qualification' => ucwords($request->fullname),
            'fullname' => ucwords($request->fullname), 
            'fullname' => ucwords($request->fullname),
            'fullname' => ucwords($request->fullname), 
            'fullname' => ucwords($request->fullname),
            'fullname' => ucwords($request->fullname), 
            'fullname' => ucwords($request->fullname),
            'fullname' => ucwords($request->fullname), 
            'fullname' => ucwords($request->fullname), 
            'fullname' => ucwords($request->fullname),
            'fullname' => ucwords($request->fullname), 
            
            
            
            
            

        ]);

       
        //send otp via SMS
        $username = 'info.autosyst@gmail.comx'; //Note: urlencodemust be added forusernameand
        $password = 'Integax.sms@2022x'; // passwordas encryption code for security purpose.
        $senderID = 'MechanicHub';
        $fullname =  $customermechanic->fullname;

        $otp = rand(10200, 90002);

        $message = 'Hello, ' . $fullname . ' Your OTP to complete your registration is ' . $otp . '. Please Do not share with anybody';
        $api_url  = 'https://portal.nigeriabulksms.com/api/';
        $data = array('username' => $username, 'password' => $password, 'sender' => $senderID, 'message' => $message, 'mobiles' => $customermechanic->phone);
        $data = http_build_query($data);
        $request = $api_url . '?' . $data;
        $result  = file_get_contents($request);
        $result  = json_decode($result);


        //Add to OTP table
        otpverification::create([
            'code' => $otp,
            'phone' => $customermechanic->phone,

        ]);
        //End of otp table

        //Add to activity log
        activity_log::create([
            'task' => $fullname . '- ' . $customermechanic->userType . ' submitted his data for registration on ' . NOW(),
        ]);

        $token = $customermechanic->createToken('mechanic_hub')->plainTextToken;

        return response()->json(['success' => true, 'message' => 'OTP sent to your Phone', 'token' => $token], 201);
    }


}
