<?php


namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\API\tblcandidate;
use App\Models\API\tblvoter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once 'vendor/autoload.php';



class CandidateController extends Controller
{
    public function registerCandidate(Request $request)
    {

        $request->validate([
           
            'party' => 'required|string|max:59',
            'office' => 'required|string|max:59',
            'voterID' => 'required|string|max:12|unique:tblcandidates',
        ], [
            'voterID.unique' => "Sorry, You already Apply ",
        ]);

        $voter = tblvoter::where('voterID', $request->voterID)->first();
            $email =  $voter->email;
            $fullname =  $voter->fullname;
        
            $candidate = tblcandidate::create([
            'voterID' => $request->voterID, 
            'candidateID' => "C".rand(10200, 90002),
            'candidateName' => $fullname, 
            'count' => 0, 
            'office' => $request->office,
            'party' => $request->party, 
            'status' => "1",
            'election_year' => date('Y'), 

             ]);

               $voter = tblvoter::where('voterID', $request->voterID)->first();
            $email =  $voter->email;
            $fullname =  $voter->fullname;

            $candidate = tblcandidate::where('voterID', $request->voterID)->first();
            $candidateID =  $candidate->candidateID;
            $office =  $candidate->office;
            $party =  $candidate->party;

            //send success message via email
            $appname= env('APP_NAME');  
            $email_server="SMTP.GMAIL.COM";
            $email_username="ADMISSION.MANSENSHS@GMAIL.COM";
            $app_password="XMVLDREPYHGKJFKF";
            $port=465;
            $email_website = "ADMISSION.MANSENSHS@GMAIL.COM";
            $mail = new PHPMailer(true);
            
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $email_server;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $email_username;                     //SMTP username
            $mail->Password   = $app_password;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
             $mail->Port       = $port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
            //Recipients
            $mail->setFrom($email_website, $appname);
            $mail->addAddress($email,$fullname);     //Add a recipient
            
            $message = "
            <html>
            <head>
            <title>Candidate Registration |$appname </title>
            </head>
            <body>
            <p>Hello $fullname ,</p>
                   
            <p>  Your Candidate registration with our E-voting App is complete. Your applications ,data and credentials will be verified by us.</p>
            
            <p>  <strong>Candidate ID :$candidateID  </strong></p>
            <p>  <strong>Office Contesting for :$office </strong></p>
            <p>  <strong>Party :$party </strong></p>
            
            <p>Thanks once again</p>
            
            <p>Regards</p>        
            <p>$appname</p>        
            </body>
            </html>
            ";
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Candidate Registration | '.$appname.'';
            $mail->Body    = $message;
            $mail->send();

        
       $token = $candidate->createToken('register_candidate')->plainTextToken;
        return response()->json(['success' => true, 'message' => 'Candidate Registration Is Complete', 'token' => $token], 201);
    }
    public function chk_if_candidate(Request $request)
    {
        $voterID = $request->voterID;
        $voterRecord = tblcandidate::where('voterID', $voterID)->first();
        if (!$voterRecord) {
            return response()->json(['success' => false, 'message' => 'Sorry, You are not yet a Candidate'], 404);
        } else{
            return response()->json(['success' => true, 'message' => 'Candidate exist'], 201);

        }
}

public function getPresidentCandidateDetails(Request $request)
{
    $candidates = DB::table('tblcandidates')
        ->join('tblpartys', 'tblcandidates.party', '=', 'tblpartys.id')
        ->where('tblcandidates.office', 'President') // add this line
        ->select('tblcandidates.*', 'tblpartys.*')
        ->get();
    if ($candidates) {
        return response()->json($candidates, 201);
    }
}

public function getGovernorCandidateDetails(Request $request)
{
    $candidates = DB::table('tblcandidates')
        ->join('tblpartys', 'tblcandidates.party', '=', 'tblpartys.id')
        ->where('tblcandidates.office', 'Governor')
        ->select('tblcandidates.*', 'tblpartys.*')
        ->get();
    if ($candidates) {
        return response()->json($candidates, 201);
    }
}
public function getCandidateDetails(Request $request)
{
    $candidates = DB::table('tblcandidates')
        ->join('tblvoters', 'tblcandidates.party', '=', 'tblpartys.id')
        ->select('tblcandidates.*', 'tblpartys.*')
        ->get();
    if ($candidates) {
        return response()->json($candidates, 201);
    }
}
public function getAllParties()
{
    $parties = DB::table('tblpartys')->select('name', 'logo')->get();
    return response()->json($parties, 201);
}

public function selectGovernor()
{
    $candidates = tblcandidate::where('office', 'Governor')->where('status', 1)->get();
    return response()->json($candidates, 201);
}

public function selectPresident()
{
    $candidates = tblcandidate::where('office', 'President')->where('status', 1)->get();
    return response()->json($candidates, 201);
}



}
