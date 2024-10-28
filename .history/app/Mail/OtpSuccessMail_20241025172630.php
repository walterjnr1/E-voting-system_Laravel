<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;

    public function __construct($fullname)
    {
        $this->fullname = $fullname;
    }

    public function build()
    {
        return $this->subject('Registration Successful')
                    ->view('adminemails.otp_success') // Make sure to create this view
                    ->with(['fullname' => $this->fullname]);
    }
}