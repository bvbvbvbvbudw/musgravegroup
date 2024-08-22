<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminSubscriptionNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;


    public function __construct($email, $categories, $locations)
    {
        $this->email = $email;
        $this->categoties = $categories;
        $this->locations = $locations;
    }

    public function build()
    {
        return $this->subject('New Newsletter Subscriber')
            ->view('musgravegroup.emails.admin_subscription_notification')->with([
                'email' => $this->email,
                'categories' => $this->categories,
                'locations' => $this->locations,
            ]);
    }
}
