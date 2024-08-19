<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Vacancy;

class NewVacancyNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $vacancy;

    public function __construct(Vacancy $vacancy)
    {
        $this->vacancy = $vacancy;
    }

    public function build()
    {
        return $this->subject('New Job Vacancy: ' . $this->vacancy->title)
            ->view('musgravegroup.emails.new_vacancy_notification');
    }
}
