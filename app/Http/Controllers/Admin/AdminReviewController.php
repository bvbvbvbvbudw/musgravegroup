<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VacancyCategory;
use App\Models\VacancyLocation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Brand;
use App\Traits\HandlesStatus;

class AdminReviewController extends Controller
{
    use HandlesStatus;

    /**
     * Вывод списка записей определенной модели.
     *
     * @param string $model
     * @return \Illuminate\View\View
     */
    public function list($model)
    {
        $modelClass = $this->getModelClass($model);

        // Подгружаем связанные данные и выбираем нужные поля в зависимости от модели
        $records = $this->getFields($modelClass)->get();

        return view('musgravegroup.admin.pages.review.list', compact('records', 'model'));
    }

    /**
     * Детальная информация о записи.
     *
     * @param string $model
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function index($model, $id)
    {
        $modelClass = $this->getModelClass($model);

        // Подгружаем запись с нужными полями и связями
        $record = $this->getFields($modelClass)->findOrFail($id);

        // Получаем поля для отображения
        $fields = $this->getFieldDefinitions($modelClass);

        return view('musgravegroup.admin.pages.review.review', compact('record', 'model', 'fields'));
    }

    /**
     * Определяет поля и связи для различных моделей.
     *
     * @param string $modelClass
     * @return \Illuminate\Database\Eloquent\Builder
     */
    private function getFields($modelClass)
    {
        return match ($modelClass) {
            'App\Models\News', 'App\Models\NewsSustainability' => $this->getFieldsNews($modelClass),
            'App\Models\Podcast' => $this->getFieldsPodcast($modelClass),
            'App\Models\Vacancy' => $this->getFieldsVacancy($modelClass),
            default => $modelClass::query(),
        };
    }

    /**
     * Получение полей и связей для модели News.
     *
     * @param string $modelClass
     * @return \Illuminate\Database\Eloquent\Builder
     */
    private function getFieldsNews($modelClass)
    {
        return $modelClass::with(['content', 'media']);
    }

    /**
     * Получение полей и связей для модели News.
     *
     * @param string $modelClass
     * @return \Illuminate\Database\Eloquent\Builder
     */
    private function getFieldsVacancy($modelClass)
    {
        return $modelClass::with(['category', 'location', 'content']);
    }

    /**
     * Получение полей и связей для модели Podcast.
     *
     * @param string $modelClass
     * @return \Illuminate\Database\Eloquent\Builder
     */
    private function getFieldsPodcast($modelClass)
    {
        return $modelClass::with(['media']);
    }

    /**
     * Получение класса модели.
     *
     * @param string $model
     * @return string
     */
    private function getModelClass($model)
    {
        return 'App\\Models\\' . Str::studly($model);
    }

    /**
     * Определение полей для модели.
     *
     * @param string $modelClass
     * @return array
     */
    private function getFieldDefinitions($modelClass)
    {
        return match ($modelClass) {
            'App\Models\News' => $this->getNewsFields(),
            'App\Models\Podcast' => $this->getPodcastFields(),
            'App\Models\NewsSustainability' => $this->getNewsSusFields(),
            'App\Models\Vacancy' => $this->getVacancyFields(),
            default => [],
        };
    }

    /**
     * Поля для модели News.
     *
     * @return array
     */
    protected function getNewsFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text'],
            ['name' => 'small_description', 'label' => 'Small description', 'type' => 'textarea'],
            ['name' => 'is_popular', 'label' => 'Is Popular?', 'type' => 'checkbox'],
            ['name' => 'is_convert', 'label' => 'Convert to .webp?', 'type' => 'checkbox'],
        ];
    }

    /**
     * Поля для модели News.
     *
     * @return array
     */
    protected function getVacancyFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
            ['name' => 'type', 'label' => 'Type', 'type' => 'text', 'required' => true],
            ['name' => 'contract_type', 'label' => 'Contract type', 'type' => 'text', 'required' => false],
        ];
    }

    /**
     * Поля для модели News.
     *
     * @return array
     */
    protected function getNewsSusFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text'],
            ['name' => 'small_description', 'label' => 'Small description', 'type' => 'textarea'],
            ['name' => 'is_convert', 'label' => 'Convert to .webp?', 'type' => 'checkbox'],
        ];
    }

    /**
     * Поля для модели Podcast.
     *
     * @return array
     */
    protected function getPodcastFields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Title', 'type' => 'text'],
            ['name' => 'url', 'label' => 'url', 'type' => 'text'],
            ['name' => 'spotify', 'label' => 'Spotify', 'type' => 'text'],
            ['name' => 'apple', 'label' => 'Apple url', 'type' => 'text'],
            ['name' => 'buzz', 'label' => 'Buzz url', 'type' => 'text'],
            ['name' => 'small_description', 'label' => 'Small description', 'type' => 'text']
        ];
    }

    /**
     * Одобрение записи.
     *
     * @param string $model
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function approve($model, $id)
    {
        $modelClass = $this->getModelClass($model);
        $record = $modelClass::findOrFail($id);

        $this->handleStatus($record, 'approved');

        return redirect()->route('admin.manage.index', [$model, $id]);
    }

    /**
     * Отклонение записи.
     *
     * @param string $model
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reject($model, $id)
    {
        $modelClass = $this->getModelClass($model);
        $record = $modelClass::findOrFail($id);

        $this->handleStatus($record, 'rejected');

        return redirect()->route('admin.manage.index', [$model, $id]);
    }
}
