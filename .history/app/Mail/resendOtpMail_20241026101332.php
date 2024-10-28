<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class resendOtpMail extends Mailable
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
        return $this->subject('LOGIN OTP Code')
                    ->view('admin.emails.resndLogin_otp'); // Create this view for the email content
    }
}