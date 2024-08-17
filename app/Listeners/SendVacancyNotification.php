<?php
namespace App\Listeners;

use App\Events\VacancyCreated;
use App\Models\UserSender;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendVacancyNotification
{
    public function handle(VacancyCreated $event)
    {
        Log::info("Start!");
        Log::info($event->vacancy);
        $vacancy = $event->vacancy;
        $subscribers = UserSender::query()
            ->whereJsonContains('preferred_categories', (int) $vacancy->category_id)
            ->whereJsonContains('preferred_locations', (int) $vacancy->location_id)
            ->get();

        Log::info('Subscribers', $subscribers->toArray());

        foreach ($subscribers as $subscriber) {
            Log::info('Отправка письма', [
                'email' => $subscriber->email,
                'vacancy' => $vacancy->title,
            ]);
            Mail::raw("New vacancy: {$vacancy->title}", function ($message) use ($subscriber) {
                $message->to($subscriber->email)
                    ->subject('New Vacancy Notification');
            });
        }
    }
}
