<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class resendRegisterOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $fullname;

    public function __construct($otp, $fullname)
    {
        $this->otp = $otp;
        $this->fullname = $fullname;
    }

    public function build()
    {
    return $this->subject('Registration OTP Code')->view('admin.emails.resendRegisterOtpMail'); // Create this view for the email content
    }
}