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
        $searchTerm = trim($request->input('_sf_search')[0] ?? '');
        if (empty($searchTerm)) {
            return view('musgravegroup.pages.search', ['results' => collect(), 'word' => '']);
        }
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
        return view('musgravegroup.pages.search', compact('results', 'searchTerm'));
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
        if (isset($routes[$modelClass]) && isset($result->url)) {
            return route($routes[$modelClass], ['url' => $result->url]);
        }

        return '#';
    }

    private function filterByFields($query, $searchTerm, $table)
    {
        if (Schema::hasColumn($table, 'status')) {
            $query->where('status', 'approved');
        }
        $searchableColumns = ['name', 'title', 'description', 'content'];
        $query->where(function ($query) use ($searchTerm, $table, $searchableColumns) {
            foreach ($searchableColumns as $column) {
                if (Schema::hasColumn($table, $column)) {
                    $query->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                }
            }
        });

        return $query;
    }
}
