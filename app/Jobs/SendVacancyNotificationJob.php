<?php
namespace App\Jobs;

use App\Mail\NewVacancyNotificationMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class SendVacancyNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $vacancy;

    /**
     * Create a new job instance.
     *
     * @param string $email
     * @param \App\Models\Vacancy $vacancy
     * @return void
     */
    public function __construct($email, $vacancy)
    {
        $this->email = $email;
        $this->vacancy = $vacancy;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            Mail::to($this->email)->send(new NewVacancyNotificationMail($this->vacancy));
        } catch (\Exception $e) {
            Log::error('Error sending email notifications: ' . $e->getMessage());
        }
    }
}
