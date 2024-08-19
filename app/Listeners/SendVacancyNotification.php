<?php
namespace App\Listeners;

use App\Events\VacancyCreated;
use App\Mail\NewVacancyNotificationMail;
use App\Mail\SubscriptionConfirmationMail;
use App\Models\UserSender;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendVacancyNotification
{
    public function handle(VacancyCreated $event)
    {
        $vacancy = $event->vacancy;
        $subscribers = UserSender::query()
            ->whereJsonContains('preferred_categories', (int) $vacancy->category_id)
            ->whereJsonContains('preferred_locations', (int) $vacancy->location_id)
            ->get();

        foreach ($subscribers as $subscriber) {
            Log::info('Send mail', [
                'email' => $subscriber->email,
                'vacancy' => $vacancy->title,
            ]);
            Mail::to($subscriber->email)->send(new NewVacancyNotificationMail($vacancy));
        }
    }
}
