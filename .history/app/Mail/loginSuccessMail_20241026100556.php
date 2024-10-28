<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoginSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;

    /**
     * Create a new message instance.
     *
     * @param string $fullname
     */
    public function __construct( $fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
return $this->subject(env('EMAIL_SUBJECT_PREFIX', 'E-'));
                    ->view('admin.emails.login_success'); // Specify the view for the email
    }
}