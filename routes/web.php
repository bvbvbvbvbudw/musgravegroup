<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminNewsSustainability;
use App\Http\Controllers\Admin\AdminVacancyController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SustainabilityController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('page.index');

Route::get('/about-us', [AboutController::class, 'index'])->name('page.about');
Route::get('/about-us/out-retail-partners', [AboutController::class, 'partners'])->name('page.about.partners');
Route::get('/about-us/food-leadership', [AboutController::class, 'food'])->name('page.about.food');
Route::get('/about-us/board', [AboutController::class, 'board'])->name('page.about.board');
Route::get('/about-us/annual-report-2022', [AboutController::class, 'annual'])->name('page.about.annual');
Route::get('/podcasts', [AboutController::class, 'podcasts'])->name('page.about.podcasts');

Route::get('/brands', [BrandController::class, 'index'])->name('page.brand');

Route::get('/sustainability', [SustainabilityController::class, 'index'])->name('page.sustainability');
Route::get('/sustainability/carring-for-the-planet', [SustainabilityController::class, 'carring'])->name('page.sustainability.carring');
Route::get('/sustainability/creating-vibrant-communities', [SustainabilityController::class, 'vibrant'])->name('page.sustainability.vibrant');
Route::get('/sustainability/sourcing-for-good', [SustainabilityController::class, 'source'])->name('page.sustainability.source');

Route::get('/careers', [CareerController::class, 'index'])->name('page.careers');
Route::get('/careers/job-alerts', [CareerController::class, 'alerts'])->name('page.careers.alerts');
Route::post('/careers/job-alerts/send', [CareerController::class, 'send'])->name('page.careers.alerts.send');
Route::get('/careers/supply-chain', [CareerController::class, 'supply'])->name('page.careers.supply');
Route::get('/careers/technology', [CareerController::class, 'technology'])->name('page.careers.technology');
Route::get('/careers/sales-ops', [CareerController::class, 'sales'])->name('page.careers.sales');
Route::get('/careers/commercial', [CareerController::class, 'commercial'])->name('page.careers.commercial');
Route::get('/careers/finance', [CareerController::class, 'finance'])->name('page.careers.finance');
Route::get('/careers/graduates', [CareerController::class, 'graduates'])->name('page.careers.graduates');
Route::get('/careers/working-for-musgrave', [CareerController::class, 'working'])->name('page.careers.working');
Route::get('/careers/sectors', [CareerController::class, 'sectors'])->name('page.careers.sectors');
Route::get('/careers/current-vacancies', [CareerController::class, 'current'])->name('page.careers.current');
Route::get('/careers/vacancy/{url}', [CareerController::class, 'show'])->name('page.careers.vacancies.show');
Route::get('/careers/vacancy/{id}/apply', [CareerController::class, 'apply'])->name('page.careers.vacancies.apply');

Route::get('/news', [NewsController::class, 'index'])->name('page.news');
Route::get('/news/sustainability', [NewsController::class, 'sustainability'])->name('page.news.sus');
Route::get('/news/sustainability/{url}', [NewsController::class, 'sustainabilityShow'])->name('page.news.sus.show');
Route::get('/musgrave-news', [NewsController::class, 'musgrave'])->name('page.news.musgrave');
Route::get('/press-pack', [NewsController::class, 'press'])->name('page.news.press');
Route::get('/press-contacts', [NewsController::class, 'contacts'])->name('page.news.contacts');

Route::get('/contact', [ContactController::class, 'index'])->name('page.contact');


// Admin
Route::get('/admin', [AdminNewsController::class, 'index'])->name('admin.news.index');
Route::get('/admin/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
Route::get('/admin/news', [AdminNewsController::class, 'index'])->name('admin.news.index');
Route::get('/admin/news/edit/{id}', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
Route::put('/admin/news/edit/{id}/update', [AdminNewsController::class, 'update'])->name('admin.news.update');
Route::delete('/admin/news/destroy/{id}', [AdminNewsController::class, 'destroy'])->name('admin.news.destroy');
Route::post('/admin/news/store', [AdminNewsController::class, 'store'])->name('admin.news.store');


Route::get('/admin/news/sustainability', [AdminNewsSustainability::class, 'index'])->name('admin.news.sustainability.index');
Route::get('/admin/news/sustainability/create', [AdminNewsSustainability::class, 'create'])->name('admin.news.sustainability.create');
Route::post('/admin/news/sustainability/store', [AdminNewsSustainability::class, 'store'])->name('admin.news.sustainability.store');
Route::get('/admin/news/sustainability/edit/{id}', [AdminNewsSustainability::class, 'edit'])->name('admin.news.sustainability.edit');
Route::put('/admin/news/sustainability/edit/{id}/update', [AdminNewsSustainability::class, 'update'])->name('admin.news.sustainability.update');
Route::delete('/admin/news/sustainability/destroy/{id}', [AdminNewsSustainability::class, 'destroy'])->name('admin.news.sustainability.destroy');

Route::get('/admin/vacancy', [AdminVacancyController::class, 'index'])->name('admin.vacancy.index');
Route::get('/admin/vacancy/create', [AdminVacancyController::class, 'create'])->name('admin.vacancy.create');
Route::post('/admin/vacancy/store', [AdminVacancyController::class, 'store'])->name('admin.vacancy.store');
Route::get('/admin/vacancy/edit/{id}', [AdminVacancyController::class, 'edit'])->name('admin.vacancy.edit');
Route::put('/admin/vacancy/edit/{id}/update', [AdminVacancyController::class, 'update'])->name('admin.vacancy.update');
Route::delete('/admin/vacancy/destroy/{id}', [AdminVacancyController::class, 'destroy'])->name('admin.vacancy.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('news/{url}', [NewsController::class, 'show'])->name('page.news.show');
Route::get('podcasts/{url}', [AboutController::class, 'showPodcast'])->name('page.about.podcasts.show');
// TODO: make dynamic routes

require __DIR__.'/auth.php';
