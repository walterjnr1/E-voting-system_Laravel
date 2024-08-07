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
            $email_website = "support@evoting.com";
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
<style>
    body {
      background-color: #f7f7f7; /* light green background */
      padding: 20px;
    }
  .email-body {
      background-color: #C6F7D0; /* light green background */
      padding: 20px;
      border: 15px solid #34C759; /* thick green border with reduced width */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* add a shade to the background */
      text-align: center; /* center the text */
      position: relative; /* add this to make the watermark work */
    }
  .logo {
      display: block;
      margin: 0 auto; /* center the logo */
      width: 30px; /* set logo width */
      height: 30px; /* set logo height */
    }
  
  </style>
</head>
<body>
  <table width='80%' cellpadding='0' cellspacing='0' border='0'>
    <tr>
      
    </tr>
    <tr>
      <td class='email-body'>
      <img height='90' src=\"https://www.pereztelecoms.ng/uploadImage/Logo/logo.png\" width='108'>

        <p style='text-align: justify;'>Hello ". $fullname. ",</p>
        <p style='text-align: justify;'>Your Candidate registration with our E-voting App is complete. Your applications ,data and credentials will be verified by us..</p>
        <p style='text-align: justify;'> <strong>Candidate ID :$candidateID  </strong></p>
        <p style='text-align: justify;'> <strong><strong>Office Contesting for :$office </strong></p>
        <p style='text-align: justify;'> <strong>Party :$party </strong></p>
       
        <p style='text-align: justify;'>Regards,</p>
        <p style='text-align: justify;'>". $website_name. " Team</p>


        <p>Hello $fullname ,</p>
                   
        <p>  Your Candidate registration with our E-voting App is complete. Your applications ,data and credentials will be verified by us.</p>
        
        <p>  <strong>Candidate ID :$candidateID  </strong></p>
        <p>  <strong>Office Contesting for :$office </strong></p>
        <p>  <strong>Party :$party </strong></p>
        
        <p>Thanks once again</p>
        
        <p>Regards</p>        
        <p>$appname</p>   
      </td>
    </tr>
  </table>
</body>
</html>
";

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
            return response()->json(['success' => false, 'message' => 'Sorry, You are not a Candidate'], 404);
        } else{
            return response()->json(['success' => true, 'message' => 'Candidate exist'], 201);

        }
}

public function getPresidentCandidateDetails(Request $request)
{
    $candidates = DB::table('tblcandidates')
        ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
        ->join('tblpartys', 'tblcandidates.party', '=', 'tblpartys.name')
        ->where('tblcandidates.office', 'President') 
        ->select('tblcandidates.*','tblvoters.*','tblpartys.*')
        ->get();
    if ($candidates) {
        return response()->json($candidates, 201);
    }
}

public function getGovernorCandidateDetails(Request $request)
{
    $candidates = DB::table('tblcandidates')
    ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
    ->join('tblpartys', 'tblcandidates.party', '=', 'tblpartys.name')
    ->where('tblcandidates.office', 'Governor') 
    ->select('tblcandidates.*','tblvoters.*','tblpartys.*')
    ->get();
if ($candidates) {
    return response()->json($candidates, 201);
}
}
public function getCandidateDetails(Request $request)
{
    $voterID = $request->input('voterID');

    $candidate_data = DB::table('tblcandidates')
        ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
        ->where('tblcandidates.voterID', $voterID)
        ->select('tblcandidates.*', 'tblvoters.*')
        ->first();
    if ($candidate_data) {
        return response()->json($candidate_data, 201);
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
public function searchPresident(Request $request)
{
    $searchQuery = $request->input('q');
    $candidates = DB::table('tblcandidates')
        ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
        ->join('tblpartys', 'tblcandidates.party', '=', 'tblpartys.name')
        ->where('tblcandidates.office', 'President')
        ->where('tblcandidates.status', 1)
        ->where(function ($q) use ($searchQuery) {
            $q->where('tblcandidates.candidateName', 'LIKE', "%{$searchQuery}%")
            ->orwhere('tblcandidates.candidateID', 'LIKE', "%{$searchQuery}%")
            ->orwhere('tblvoters.voterID', 'LIKE', "%{$searchQuery}%")
            ->orWhere('tblvoters.fullname', 'LIKE', "%{$searchQuery}%")
         ->orWhere('tblpartys.name', 'LIKE', "%{$searchQuery}%");
        })
        ->select('tblcandidates.*', 'tblvoters.*','tblpartys.*')
        ->get();

    return response()->json($candidates, 201);
}
public function searchGovernor(Request $request)
{
    
    $searchQuery = $request->input('q');

    $candidates = DB::table('tblcandidates')
        ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
        ->join('tblpartys', 'tblcandidates.party', '=', 'tblpartys.name')
        ->where('tblcandidates.office', 'Governor')
        ->where('tblcandidates.status', 1)
        ->where(function ($q) use ($searchQuery) {
            $q->where('tblcandidates.candidateName', 'LIKE', "%{$searchQuery}%")
            ->orwhere('tblcandidates.candidateID', 'LIKE', "%{$searchQuery}%")
            ->orwhere('tblvoters.voterID', 'LIKE', "%{$searchQuery}%")
            ->orWhere('tblvoters.fullname', 'LIKE', "%{$searchQuery}%")
            ->orWhere('tblpartys.name', 'LIKE', "%{$searchQuery}%");
        })
        ->select('tblcandidates.*', 'tblvoters.*', 'tblpartys.*')
        ->get();

    return response()->json($candidates, 201);
}
}
