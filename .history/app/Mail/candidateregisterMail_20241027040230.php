<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class candidateregisterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname,$candidateID,$pa $office;

    /**
     * Create a new message instance.
     *
     * @param string $candidateID
     * @param string $fullname
     */
    public function __construct( $candidateID,$fullname,$office)
    {
        $this->candidateID = $candidateID;
        $this->fullname = $fullname;
        $this->party = $party;
        $this->office = $office;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Candidate registration')
                    ->view('admin.emails.CandidateRegistration'); // Specify the view for the email
    }
}