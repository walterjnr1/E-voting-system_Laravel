<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\API\tblotp;
use App\Models\API\tblvoter;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\voterRequest;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpSuccessMail ;
use App\Http\Requests\voterOTPRequest;
class VoterController extends Controller
{
    public function registerVoter(voterRequest $request)
    {
        //check if voter exist
        $voter = tblvoter::where('voterid', $request->voter)->first();
        if ($voter) {
            return response()->json(['message' => 'Voter already exist'], 400);
        }

        //upload voter photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploadImage/Profile/'), $filename);
            $photoPath = 'uploadImage/Profile/' . $filename;
        } else {
            $photoPath = null;
        }

        $voter = tblvoter::create([
            'voterID' => 'V' . rand(10200, 90002),
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
            'status' => '0',
            'educational_qualification' => '0',
            'image' => $photoPath,
        ]);


        $otp = rand(10200, 90002);
        $message = 'Hello, ' . $voter->fullname . ' Your OTP to complete your registration is ' . $otp . '. Please Do not share with anybody';
        $api_url = 'https://portal.nigeriabulksms.com/api/';
        $data = ['username' => env('SMS_USERNAME'), 'password' => env('SMS_PASSWORD'), 'sender' => env('SMS_SENDER_ID'), 'message' => $message, 'mobiles' => $request->phone];
        $data = http_build_query($data);
        $request = $api_url . '?' . $data;
        $result = file_get_contents($request);
        $result = json_decode($result);

        //send otp via email
        Mail::to($voter->email)->send(new OtpMail($otp, $voter->fullname));

        tblotp::create([
            'code' => $otp,
            'voterID' => $voter->voterID,
        ]);
        return response()->json(['success' => true, 'message' => 'OTP sent to your Phone and Email'], 201);
    }

    public function validateVoterRegisterOTP(voterOTPRequest $request)
    {
        $otp = $request->otp;
        $phone = $request->phone;

        $voterRecord = tblvoter::where('phone', $phone)->first();
        if (!$voterRecord) {
            return response()->json(['success' => false, 'message' => 'No voter record found'], 404);
        }

        $voterID = $voterRecord->voterID;
        $otpRecord = tblotp::where('code', $otp)
            ->where('voterID', $voterID)
            ->where('created_at', '>=', now()->subMinutes(50)) // Only consider OTPs created in the last 15 minutes
            ->first();
        if ($otpRecord) {
            DB::update('update tblvoters set status =? where phone =?', ['1', $phone]);

            //send success email
            Mail::to($voterRecord->email)->send(new OtpSuccessMail($voterRecord->fullname,$voterRecord->voterID));

            $otpRecord->delete();

            $token = $otpRecord->createToken('otp')->plainTextToken;
            return response()->json(['success' => true, 'message' => 'Your Registration is Now complete', 'token' => $token], 201);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid OTP or OTP has expired'], 401);
        }
    }
    public function login(Request $request)
    {
        //$user_auth = Auth::user();
        $voter = tblvoter::where('voterID', $request->voterID)
            ->where('status', 1)
            ->first();

        if (!$voter) {
            return response()->json(
                [
                    'message' => 'Invalid Voter ID or Account disabled',
                ],
                401,
            );
        } elseif ($voter->status == '0') {
            return response()->json(['success' => false, 'message' => 'Account disabled'], 403);
        }


        //send otp via SMS
        $otp = rand(10200, 90002);
        $message = 'Hello, ' . $voter->fullname . ' Your OTP to complete your registration is ' . $otp . '. Please Do not share with anybody';
        $api_url = 'https://portal.nigeriabulksms.com/api/';
        $data = ['username' => env('SMS_USERNAME'), 'password' => env('SMS_PASSWORD'), 'sender' => $env('SMS_SENDER_ID'), 'message' => $message, 'mobiles' => $voter->phone];
        $data = http_build_query($data);
        $request = $api_url . '?' . $data;
        $result = file_get_contents($request);
        $result = json_decode($result);

        //send otp email
        Mail::to($voter->email)->send(new OtpSuccessMail($voter->fullname,$voterRecord->voterID));

        tblotp::create([
            'code' => $otp,
            'voterID' => $voter->voterID,
        ]);

        $token = $voter->createToken('Auth_login')->plainTextToken;
        return response()->json(['success' => true, 'message' => 'Login Is successful', 'token' => $token], 201);
    }

    public function validateLoginOTP(Request $request)
    {
        $otp = $request->otp;
        $voterID = $request->voterID;

        $voterRecord = tblvoter::where('voterID', $voterID)->first();
        if (!$voterRecord) {
            // Return an error response if no voter record is found for the given phone number
            return response()->json(['success' => false, 'message' => 'No voter record found'], 404);
        }
        // Get the OTP record for the user from the database
        $otpRecord = tblotp::where('code', $otp)
            ->where('voterID', $voterID)
            ->where('created_at', '>=', now()->subMinutes(50)) // Only consider OTPs created in the last 15 minutes
            ->first();
        // Check if the OTP record exists and has not expired
        if ($otpRecord) {
            // If the OTP is valid, delete the record from the database
            $otpRecord->delete();

            $token = $otpRecord->createToken('otplogin')->plainTextToken;
            // Return a success response
            return response()->json(['success' => true, 'message' => 'Login Is succcessful', 'token' => $token], 201);
        } else {
            // Return an error response
            return response()->json(['success' => false, 'message' => 'Invalid OTP or OTP has expired'], 401);
        }
    }
    public function resendOtp(Request $request)
    {
        $voterID = $request->voterID;
        $voterRecord = tblvoter::where('voterID', $voterID)->first();

        $phone = $voterRecord->phone;
        $email = $voterRecord->email;
        $fullname = $voterRecord->fullname;

        //send otp via SMS
        $username = 'info.autosyst@gmail.com'; //Note: urlencodemust be added forusernameand
        $password = 'Integax.sms@2022'; // passwordas encryption code for security purpose.
        $senderID = 'E-Voting';

        $otp = rand(10200, 90002);

        $message = 'Hello, ' . $fullname . ' Your OTP to complete your registration is ' . $otp . '. Please Do not share with anybody';
        $api_url = 'https://portal.nigeriabulksms.com/api/';
        $data = ['username' => $username, 'password' => $password, 'sender' => $senderID, 'message' => $message, 'mobiles' => $phone];
        $data = http_build_query($data);
        $request = $api_url . '?' . $data;
        $result = file_get_contents($request);
        $result = json_decode($result);

        //send otp email

        tblotp::create([
            'code' => $otp,
            'voterID' => $voterID,
        ]);

        $token = $voterRecord->createToken('resend')->plainTextToken;
        return response()->json(['success' => true, 'message' => 'OTP sent to your Email and Phone', 'token' => $token], 201);
    }

    public function deleteAccount(Request $request)
    {
        $voterID = $request->voterID;
        $voterRecord = tblvoter::where('voterID', $voterID)->first();
        if (!$voterRecord) {
            return response()->json(['success' => false, 'message' => 'No voter record found'], 404);
        } else {
            $voterRecord->delete();

            $token = $voterRecord->createToken('deleteaccount')->plainTextToken;
            return response()->json(['success' => true, 'message' => 'Account Deleted successfully', 'token' => $token], 200);
        }
    }

    public function getVoterDetails(Request $request)
    {
        $voterID = $request->input('voterID');
        $voterDetails = tblvoter::where('voterID', $voterID)->first();

        if ($voterDetails) {
            return response()->json($voterDetails, 201);
        }
    }
}
