<?php

use App\Http\Controllers\{AboutController,
    Admin\AdminNewsController,
    Admin\AdminNewsSustainability,
    Admin\AdminVacancyController,
    BrandController,
    CareerController,
    ContactController,
    IndexController,
    NewsController,
    ProfileController,
    SearchController,
    SustainabilityController};
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('page.index');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::post('/search', [SearchController::class, 'search'])->name('search.results');
Route::controller(IndexController::class)->group(function () {
    Route::get('/local-and-irish', 'local')->name('page.local');
    Route::get('/mood-ice-cream', 'mood')->name('page.mood');
    Route::get('/caramico-pizza', 'pizza')->name('page.pizza');
    Route::get('/the-green-kitchen', 'kitchen')->name('page.kitchen');
    Route::get('/cookie-policy', 'cookie')->name('page.cookie');
    Route::get('/privacy-statement', 'privacy')->name('page.privacy');
    Route::get('/terms-and-conditions', 'terms')->name('page.terms');
    Route::get('/anti-slavery-and-human-trafficking-statement', 'anti')->name('page.anti');
    Route::get('/food-academy', 'food')->name('page.food');
});

Route::controller(AboutController::class)->prefix('about-us')->name('page.about')->group(function () {
    Route::get('/', 'index');
    Route::get('/directors', 'directors')->name('.directors');
    Route::get('/out-retail-partners', 'partners')->name('.partners');
    Route::get('/food-leadership', 'food')->name('.food');
    Route::get('/board', 'board')->name('.board');
    Route::get('/annual-report-2022', 'annual')->name('.annual');
    Route::get('/podcasts', 'podcasts')->name('.podcasts');
});

Route::get('/brands', [BrandController::class, 'index'])->name('page.brand');

Route::controller(SustainabilityController::class)->prefix('sustainability')->name('page.sustainability')->group(function () {
    Route::get('/', 'index');
    Route::get('/caring-for-the-planet', 'carring')->name('.caring');
    Route::get('/creating-vibrant-communities', 'vibrant')->name('.vibrant');
    Route::get('/sourcing-for-good', 'source')->name('.source');
});

Route::controller(CareerController::class)->prefix('careers')->name('page.careers')->group(function () {
    Route::get('/', 'index');
    Route::get('/form', 'forCompany')->name('.form');
    Route::post('/form/send', 'forCompanySend')->name('.form.send');
    Route::get('/job-alerts', 'alerts')->name('.alerts');
    Route::post('/job-alerts/send', 'send')->name('.alerts.send');
    Route::get('/supply-chain', 'supply')->name('.supply');
    Route::get('/technology', 'technology')->name('.technology');
    Route::get('/sales-ops', 'sales')->name('.sales');
    Route::get('/commercial', 'commercial')->name('.commercial');
    Route::get('/finance', 'finance')->name('.finance');
    Route::get('/graduates', 'graduates')->name('.graduates');
    Route::get('/working-for-musgrave', 'working')->name('.working');
    Route::get('/sectors', 'sectors')->name('.sectors');
    Route::get('/current-vacancies', 'current')->name('.current');
    Route::get('/vacancy/{url}', 'show')->name('.vacancies.show');
    Route::get('/vacancy/{id}/apply', 'apply')->name('.vacancies.apply');
    Route::post('/vacancy/{id}/apply/send', 'applySend')->name('.vacancies.apply.send');
});

Route::controller(NewsController::class)->prefix('news')->name('page.news')->group(function () {
    Route::get('/', 'index');
    Route::get('/brand/{brand}', 'filterByBrand')->name('.filterByBrand');
    Route::get('/{year}/{month}', 'filterByDate')
        ->where(['year' => '[0-9]{4}', 'month' => '[0-9]{2}'])->name('.filterByDate');
    Route::get('/sustainability', 'sustainability')->name('.sus');
    Route::get('/sustainability/{url}', 'sustainabilityShow')->name('.sus.show');
    Route::get('/musgrave-news', 'index')->name('.musgrave');
    Route::get('/press-pack', 'press')->name('.press');
    Route::get('/press-contacts', 'contacts')->name('.contacts');
});

Route::get('/contact', [ContactController::class, 'index'])->name('page.contact');

Route::group([
    'prefix' => 'dashboard',
    'middleware' => ['auth', 'checkRole:admin,moderator'],
], function() {
    require base_path('routes/admin.php');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('news/{url}', [NewsController::class, 'show'])->name('page.news.show');
Route::get('podcasts/{url}', [AboutController::class, 'showPodcast'])->name('page.about.podcasts.show');

require __DIR__.'/auth.php';
