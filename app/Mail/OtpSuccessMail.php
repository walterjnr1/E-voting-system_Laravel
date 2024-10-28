<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;
    public $voterid;

    public function __construct($fullname,$voterid)
    {
        $this->fullname = $fullname;
        $this->voterid = $voterid;

    }

    public function build()
    {
        return $this->subject('Voter Registration Successful')
                    ->view('admin/emails.otp_success') // Make sure to create this view
                    ->with(['fullname' => $this->fullname,'voterid' => $this->voterid]);
    }
}