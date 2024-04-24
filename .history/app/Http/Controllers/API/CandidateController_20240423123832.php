<?php


namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\API\tblcandidate;
use App\Models\API\tblvoter;
use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once 'vendor/autoload.php';
class CandidateController extends Controller
{
    public function registerCandidate(Request $request)
    {
            $request->validate([
            'office' => 'required|string|max:59',
            'party' => 'required|string|max:59',
             ]);

            $candidate = tblcandidate::create([
            'voterID' => $request->voterID, 
            'candidateID' => "C".rand(10200, 90002),
            'count' => $request->count, 
            'office' => $request->office,
            'party' => $request->party, 
            'status' => "1", 
            ]);

            $candidate = tblvoter::where('voterID', $candidate->voterID)->first();

            $email =  $candidate->email;
            $fullname =  $candidate->fullname;

//send success message via email
            $appname="Secured Mobile-based E-voting System using 2FA security";  
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
                   
            <p>  Your Candidate registration with our E-voting App is complete. Your app</p>
            
            <p>  <strong>Candidate ID is :$candidate->candidateID  .</strong></p>
            <p>  <strong>Office Contesting for is :$candidate->office .</strong></p>
            <p>  <strong>Party :$candidate->party .</strong></p>
            
            <p>Thanks</p>
            
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
        return response()->json(['success' => true, 'message' => 'Candidate Registration Is Complete', 'token' => $token], 200);
    }
}