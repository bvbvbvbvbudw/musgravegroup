<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $categories;
    protected $locations;
    public function __construct($categories, $locations)
    {
        $this->categories = $categories;
        $this->locations = $locations;
    }

    public function build()
    {
        return $this->subject('Subscription Confirmation')
            ->view('musgravegroup.emails.subscription_confirmation')->with([
                'categories' => $this->categories,
                'locations' => $this->locations,
            ]);
    }
}
