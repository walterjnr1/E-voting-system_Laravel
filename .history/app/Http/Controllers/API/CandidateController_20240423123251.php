<?php


namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\API\tblotp;
use App\Models\API\tblcandidate;
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

            $candidate = tblcandidate::where('phone', $phone)->first();

            $email =  $voter->email;
      

//send otp email
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
<title>OTP |$appname </title>
</head>
<body>
<p>Hello $fullname ,</p>
       
<p>  Your OTP code is :$otp  .</p>

<p>$appname</p>        
</body>
</html>
";

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'OTP | '.$appname.'';
$mail->Body    = $message;
$mail->send();

        //Add to OTP table
        tblotp::create([
            'code' => $otp,
            'voterID' => $voter->voterID,

        ]);
        //End of otp table
       $token = $voter->createToken('register')->plainTextToken;
        return response()->json(['success' => true, 'message' => 'OTP sent to your Phone and Email', 'token' => $token], 200);
    }
}
