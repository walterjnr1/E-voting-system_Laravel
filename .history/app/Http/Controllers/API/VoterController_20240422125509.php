<?php


namespace App\Http\Controllers\API;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once 'vendor/autoload.php';

use App\Http\Controllers\Controller;
use App\Models\API\tblotp;
use App\Models\API\tblvoter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\API\UploadedFile;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class VoterController extends Controller
{
    public function registerVoter(Request $request)
{
    $request->validate([
        // ... other validation rules ...
        'photo' => 'required|image|max:5000', // Validate that the 'photo' field is an image file and has a maximum size of 5MB
    ]);

    // Check if a file was uploaded for the 'photo' field
    if ($request->hasFile('photo') && $request->file('photo') instanceof UploadedFile) {
        $image = $request->file('photo');

        // Generate a unique filename for the image
        $filename = time() . '-' . $image->getClientOriginalName();

        // Move the uploaded image to the public/images directory
        $image->storeAs('public/uploadImage/Profile/', $filename);

        // Save the voter record with the new image filename
        $voter = tblvoter::create([
            // ... other fields ...
            'photo' => $filename, // Save the image filename to the 'photo' field
        ]);

        // ... send OTP via SMS and email ...

        $token = $voter->createToken('register')->plainTextToken;
        return response()->json(['success' => true, 'message' => 'OTP sent to your Phone and Email', 'token' => $token], 201);
    } else {
        // Return an error response if no file was uploaded for the 'photo' field
        return response()->json(['success' => false, 'message' => 'No file was uploaded for the "photo" field'], 400);
    }
}
    public function validateVoterRegisterOTP(Request $request)
{
    $otp = $request->otp;
    $phone = $request->phone;

    $voterRecord = tblvoter::where('phone', $phone)->first();
    if (!$voterRecord) {
        // Return an error response if no voter record is found for the given phone number
        return response()->json(['success' => false, 'message' => 'No voter record found'], 404);
    }

    $voterID = $voterRecord->voterID;

    // Get the OTP record for the user from the database
    $otpRecord = tblotp::where('code', $otp)
        ->where('voterID', $voterID)
        ->where('created_at', '>=', now()->subMinutes(50)) // Only consider OTPs created in the last 15 minutes
        ->first();
    // Check if the OTP record exists and has not expired
    if ($otpRecord) {
        // Update the user status in the customer_mechanics table
        DB::update('update tblvoters set status =? where phone =?', ["1", $phone]);

       //send success email
        $appname = "Secured Mobile-based E-voting System using 2FA security";
        $email_server = "SMTP.GMAIL.COM";
        $email_username = "ADMISSION.MANSENSHS@GMAIL.COM";
        $app_password = "XMVLDREPYHGKJFKF";
        $port = 465;
        $email_website = "ADMISSION.MANSENSHS@GMAIL.COM";

        $mail = new PHPMailer(true);

        //Server settings
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = $email_server; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = $email_username; //SMTP username
        $mail->Password = $app_password; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = $port; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email_website, $appname);
        $mail->addAddress($voterRecord->email, $voterRecord->fullname); //Add a recipient

        $message = "
        <html>
        <head>
        <title>Registration Complete |$appname </title>
        </head>
        <body>
        <p>Hello $voterRecord->fullname,</p>

        <p>  Your your registration with our E-voting App is complete</p>
        <p>  Your voter ID is :$phone.</p>
        <p>  Always keep your Voter ID safe. Thanks</p>


        <p>Regards</p>
        <p>$appname</p>
        </body>
        </html>
        ";

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Registration Complete | '. $appname;
        $mail->Body = $message;
        $mail->send();

        // If the OTP is valid, delete the record from the database
        $otpRecord->delete();

        $token = $otpRecord->createToken('otp')->plainTextToken;
        // Return a success response
        return response()->json(['success' => true, 'message' => 'Your Registration is Now complete', 'token' => $token], 201);
    } else {
        // Return an error response
        return response()->json(['success' => false, 'message' => 'Invalid OTP or OTP has expired'], 401);
    }
}
    public function login(Request $request)
    {
        $user_auth = Auth::user();
        $voter = tblvoter::where('voterID', $request->voterID)
            ->where('status', 1)
            ->first();

        if (!$voter) {
            return response()->json([
                'message' => 'Invalid Voter ID',
            ], 401);
        }

$email= $voter->email;
$fullname= $voter->fullname;
$phone= $voter->phone;

 //send otp via SMS
 $username = 'info.autosyst@gmail.comx'; //Note: urlencodemust be added forusernameand
 $password = 'Integax.sms@2022x'; // passwordas encryption code for security purpose.
 $senderID = 'MechanicHub';
 $fullname =  $voter->fullname;

 $otp = rand(10200, 90002);

 $message = 'Hello, ' . $fullname . ' Your OTP to complete your registration is ' . $otp . '. Please Do not share with anybody';
 $api_url  = 'https://portal.nigeriabulksms.com/api/';
 $data = array('username' => $username, 'password' => $password, 'sender' => $senderID, 'message' => $message, 'mobiles' => $phone);
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

tblotp::create([
    'code' => $otp,
    'voterID' => $voter->voterID,
]);

    $token = $voter->createToken('Auth_login')->plainTextToken;
    return response()->json(['success' => true,'message' => 'Login Is successful','token'=> $token,'data'=>$voter], 201);
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
$voterID= $request->voterID;
$voterRecord = tblvoter::where('voterID', $voterID)->first();

$phone= $voterRecord->phone;
$email= $voterRecord->email;
$fullname= $voterRecord->fullname;

 //send otp via SMS
 $username = 'info.autosyst@gmail.comx'; //Note: urlencodemust be added forusernameand
 $password = 'Integax.sms@2022x'; // passwordas encryption code for security purpose.
 $senderID = 'MechanicHub';

$otp = rand(10200, 90002);

 $message = 'Hello, ' . $fullname . ' Your OTP to complete your registration is ' . $otp . '. Please Do not share with anybody';
 $api_url  = 'https://portal.nigeriabulksms.com/api/';
 $data = array('username' => $username, 'password' => $password, 'sender' => $senderID, 'message' => $message, 'mobiles' => $phone);
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

tblotp::create([
    'code' => $otp,
    'voterID' => $voterID,
]);


    $token = $voterRecord->createToken('resend')->plainTextToken;
    return response()->json(['success' => true,'message' => 'OTP sent to your Email and Phone','token'=> $token], 201);
    }

}