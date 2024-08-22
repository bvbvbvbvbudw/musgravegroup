<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Vacancy;
use Carbon\Carbon;

class CloseExpiredVacancies extends Command
{
    protected $signature = 'vacancies:close-expired';

    protected $description = 'Close vacancies where the end_date has passed or is today';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $today = Carbon::today();
        $vacancies = Vacancy::where('end_date', '<=', $today)
            ->where('is_closed', 0)
            ->get();
        foreach ($vacancies as $vacancy) {
            $vacancy->is_closed = 1;
            $vacancy->save();
        }
        $this->info('Closed ' . $vacancies->count() . ' expired vacancies.');
    }
}
