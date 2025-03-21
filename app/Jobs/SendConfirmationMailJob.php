<?php
namespace App\Jobs;

use App\Mail\AdminSubscriptionNotificationMail;
use App\Mail\SubscriptionConfirmationMail;
use App\Models\VacancyCategory;
use App\Models\VacancyLocation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class SendConfirmationMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $email;
    protected $should;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data, $email, $should)
    {
        $this->data = $data;
        $this->email = $email;
        $this->should = $should;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $categories = VacancyCategory::whereIn('id', $this->data['criteria1'])->pluck('category')->toArray();
            $locations = VacancyLocation::whereIn('id', $this->data['criteria2'])->pluck('location')->toArray();
            Mail::to($this->data['applicantEmail'])->send(new SubscriptionConfirmationMail($categories, $locations));
            if($this->should)
            {
                Mail::to($this->email)->send(new AdminSubscriptionNotificationMail($this->data, $categories, $locations));
            }
            $admins = User::where('role', 'admin')->get();
            foreach ($admins as $admin) {
                Mail::to($admin->email)->send(new AdminSubscriptionNotificationMail($this->data, $categories, $locations));
            }
        } catch (\Exception $e) {
            Log::error('Error sending email notifications: ' . $e->getMessage());
        }
    }
}
