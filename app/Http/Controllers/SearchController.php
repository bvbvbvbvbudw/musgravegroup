<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\News;
use App\Models\NewsSustainability;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class SearchController extends Controller
{
    public function index()
    {
        return view('musgravegroup.pages.search');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('_sf_search')[0] ?? '';
        $word = $searchTerm;
        $results = collect();

        foreach ([Vacancy::class, News::class, Brand::class, NewsSustainability::class] as $modelClass) {
            $instance = new $modelClass;
            $query = $this->filterByFields($instance->newQuery(), $searchTerm, $instance->getTable());
            $modelResults = $query->get();
            $results = $results->concat($modelResults->map(function ($result) use ($instance) {
                $result->route = $this->getRouteForModel($instance, $result);
                return $result;
            }));
        }
        return view('musgravegroup.pages.search', compact('results', 'word'));
    }

    private function getRouteForModel($modelInstance, $result)
    {
        $routes = [
            Vacancy::class => 'page.careers.vacancies.show',
            News::class => 'page.news.show',
            NewsSustainability::class => 'page.news.sus.show',
            Brand::class => 'page.brand'
        ];

        $modelClass = get_class($modelInstance);
        $routeName = $routes[$modelClass] ?? '#';
        if ($routeName !== '#') {
            return route($routeName, ['url' => $result->url]);
        }

        return '#';
    }

    private function filterByFields($query, $searchTerm, $table)
    {
        $columns = Schema::getColumnListing($table);
        foreach ($columns as $column) {
            if (Schema::hasColumn($table, $column)) {
                $query->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
            }
        }
        return $query;
    }
}
