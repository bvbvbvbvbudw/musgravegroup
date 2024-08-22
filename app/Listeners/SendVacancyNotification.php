<?php
namespace App\Listeners;

use App\Events\VacancyCreated;
use App\Jobs\SendVacancyNotificationJob;
use App\Models\UserSender;
use Illuminate\Support\Facades\Log;

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
            Log::info('Dispatching email for vacancy', [
                'email' => $subscriber->email,
                'vacancy' => $vacancy->title,
            ]);
            SendVacancyNotificationJob::dispatch($subscriber->email, $vacancy);
        }
    }
}
