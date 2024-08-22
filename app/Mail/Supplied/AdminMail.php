<?php

namespace App\Mail\Supplied;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Subscription Confirmation')
            ->view('musgravegroup.emails.suppliers.for-admin')->with('data', $this->data);
    }
}
