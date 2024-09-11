<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminSubscriptionNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $categories;
    protected $locations;

    public function __construct($data, $categories, $locations)
    {
        $this->data = $data;
        $this->categories = $categories;
        $this->locations = $locations;
    }

    public function build()
    {
        return $this->subject('New Newsletter Subscriber')
            ->view('musgravegroup.emails.admin_subscription_notification')->with([
                'data' => $this->data,
                'categories' => $this->categories,
                'locations' => $this->locations,
            ]);
    }

}
