<?php

namespace App\Mail\Supplied;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Subscription Confirmation')
            ->view('musgravegroup.emails.suppliers.for-user')->with('data', $this->data);
    }
}
