<?php

namespace App\Jobs;

use App\Models\CareerForm;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendCompanyFormEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $form;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(CareerForm $form)
    {
        $this->form = $form;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = $this->form->email;
        Mail::send('musgravegroup.emails.company.email', ['form' => $this->form], function ($message) use ($email) {
            $message->to($email)
                ->subject('Thank you for your submission');
        });
    }
}
