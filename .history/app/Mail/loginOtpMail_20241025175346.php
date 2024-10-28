<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class loginOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp;
    public $fullname;

    /**
     * Create a new message instance.
     *
     * @param int $otp
     * @param string $fullname
     */
    public function __construct($otp, $fullname)
    {
        $this->otp = $otp;
        $this->fullname = $fullname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.emails.otp') // Specify the view for the email
                    ->subject('Your OTP Code')
                    ->with([
                        'otp' => $this->otp,
                        'fullname' => $this->fullname,
                    ]);
    }
}