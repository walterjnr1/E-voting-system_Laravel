<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoterController extends Controller
{
    public function registerVoter(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:100',
            'password' => 'required|max:455',
            'email' => 'required|email|max:50|unique:customer_mechanics',
            'phone' => 'required|string|max:12',
            'lga' => 'required|string|max:50',
            'state' => 'required|string|max:40',
            'userType' => 'required|string|max:8',
            'balance' => 'required|string|max:20',
            'myReferalCode' => 'string|max:5',
            'referedBy' => 'string|max:5',
            'status' => 'required|string|max:1',
            //'vehicle_count' => 'required|integer|max:8',

        ]);

        $customermechanic = customer_mechanic::create([
            'fullname' => ucwords($request->fullname), // convert fullname to uppercase
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
            'lga' => $request->lga,
            'state' => $request->state,
            'userType' => $request->userType,
            'balance' => $request->balance,
            'myReferalCode' => $request->myReferalCode,
            'referedBy' => $request->referedBy,
            'status' => $request->status,
            'vehicle_count' => $request->vehicle_count,

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
