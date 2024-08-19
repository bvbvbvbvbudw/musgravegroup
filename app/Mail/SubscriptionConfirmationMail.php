<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('Subscription Confirmation')
            ->view('musgravegroup.emails.subscription_confirmation');
    }
}
