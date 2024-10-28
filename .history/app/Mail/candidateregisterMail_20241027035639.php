<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class candidateregisterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;

    /**
     * Create a new message instance.
     *
     * @param string $otp
     * @param string $fullname
     */
    public function __construct( $fullname)
    {
        //$this->otp = $otp;
        $this->fullname = $fullname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Login OTP')
                    ->view('admin.emails.login_otp'); // Specify the view for the email
    }
}