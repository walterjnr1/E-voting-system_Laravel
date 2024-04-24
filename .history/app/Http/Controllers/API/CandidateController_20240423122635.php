<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function registerVoter(Request $request)
    {
         $request->validate([
            'office' => 'required|string|max:59',
            'party' => 'required|email|max:60|unique:tblvoters',
        ]);

        $image = $_FILES['image']['name'] ?? ''; 
       
        //make image path
         $imagePath = 'uploadImage/Profile/'.$image; 
          $tmp_name = $_FILES['image']['tmp_name']; 
    
        //move image to images folder
        move_uploaded_file($tmp_name, $imagePath);
        $image = "uploadImage/Profile/" .rand(10200, 90002). ".".$_FILES['image']['name'] ; 

        $voter = tblvoter::create([
            'voterID' => "V".rand(10200, 90002),
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
            'status' => "1", 
            'educational_qualification' => ucwords($request->educational_qualification),
            'image' => $image , 
             ]);

        $email =  $voter->email;
        //send otp via SMS
        $username = 'info.autosyst@gmail.com'; //Note: urlencodemust be added forusernameand
        $password = 'Integax.sms@2022'; // passwordas encryption code for security purpose.
        $senderID = 'E-voting';
        $fullname =  $voter->fullname;

        $otp = rand(10200, 90002);
        $message = 'Hello, ' . $fullname . ' Your OTP to complete your registration is ' . $otp . '. Please Do not share with anybody';
        $api_url  = 'https://portal.nigeriabulksms.com/api/';
        $data = array('username' => $username, 'password' => $password, 'sender' => $senderID, 'message' => $message, 'mobiles' => $voter->phone);
        $data = http_build_query($data);
        $request = $api_url . '?' . $data;
        $result  = file_get_contents($request);
        $result  = json_decode($result);

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
