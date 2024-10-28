<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class loginSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;

    /**
     * Create a new message instance.
     *
     * @param string $fullname
     */
    public function __construct($fullname)
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
        return $this->view('admin.emails.otp') // Specify the view for the email
                    ->subject('Login Suc')
                    ->with([
                        'fullname' => $this->fullname,
                    ]);
    }
}