<?php
namespace App\Events;

use App\Models\Vacancy;
use Illuminate\Queue\SerializesModels;

class VacancyCreated
{
    use SerializesModels;

    public $vacancy;

    public function __construct(Vacancy $vacancy)
    {
        $this->vacancy = $vacancy;
    }
}
