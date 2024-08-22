<?php
namespace App\Jobs;

use App\Mail\Supplied\UserMail;
use App\Mail\Supplied\AdminMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class SendEmailsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            Mail::to($this->data['applicantEmail'])->send(new UserMail($this->data));
            Mail::to('info@musgraveofficial.com')->send(new AdminMail($this->data));

            $admins = User::where('role', 'admin')->get();
            foreach ($admins as $admin) {
                Mail::to($admin->email)->send(new AdminMail($this->data));
            }
        } catch (\Exception $e) {
            Log::error('Error sending email notifications: ' . $e->getMessage());
        }
    }
}
