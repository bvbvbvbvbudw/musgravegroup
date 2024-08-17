<?php

use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminNewsSustainability;
use App\Http\Controllers\Admin\AdminPodcastController;
use App\Http\Controllers\Admin\AdminReviewController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminVacancyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminNewsController::class, 'index'])->name('admin.news.index');
Route::get('/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
Route::get('/news', [AdminNewsController::class, 'index'])->name('admin.news.index');
Route::get('/news/edit/{id}', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
Route::put('/news/edit/{id}/update', [AdminNewsController::class, 'update'])->name('admin.news.update');
Route::delete('/news/destroy/{id}', [AdminNewsController::class, 'destroy'])->name('admin.news.destroy');
Route::post('/news/store', [AdminNewsController::class, 'store'])->name('admin.news.store');


Route::get('/news/sustainability', [AdminNewsSustainability::class, 'index'])->name('admin.news.sustainability.index');
Route::get('/news/sustainability/create', [AdminNewsSustainability::class, 'create'])->name('admin.news.sustainability.create');
Route::post('/news/sustainability/store', [AdminNewsSustainability::class, 'store'])->name('admin.news.sustainability.store');
Route::get('/news/sustainability/edit/{id}', [AdminNewsSustainability::class, 'edit'])->name('admin.news.sustainability.edit');
Route::put('/news/sustainability/edit/{id}/update', [AdminNewsSustainability::class, 'update'])->name('admin.news.sustainability.update');
Route::delete('/news/sustainability/destroy/{id}', [AdminNewsSustainability::class, 'destroy'])->name('admin.news.sustainability.destroy');

Route::get('/vacancy', [AdminVacancyController::class, 'index'])->name('admin.vacancy.index');
Route::get('/vacancy/create', [AdminVacancyController::class, 'create'])->name('admin.vacancy.create');
Route::post('/vacancy/store', [AdminVacancyController::class, 'store'])->name('admin.vacancy.store');
Route::get('/vacancy/edit/{id}', [AdminVacancyController::class, 'edit'])->name('admin.vacancy.edit');
Route::put('/vacancy/edit/{id}/update', [AdminVacancyController::class, 'update'])->name('admin.vacancy.update');
Route::delete('/vacancy/destroy/{id}', [AdminVacancyController::class, 'destroy'])->name('admin.vacancy.destroy');

Route::get('/podcasts', [AdminPodcastController::class, 'index'])->name('admin.podcasts.index');
Route::get('/podcasts/create', [AdminPodcastController::class, 'create'])->name('admin.podcasts.create');
Route::post('/podcasts/store', [AdminPodcastController::class, 'store'])->name('admin.podcasts.store');
Route::get('/podcasts/edit/{id}', [AdminPodcastController::class, 'edit'])->name('admin.podcasts.edit');
Route::put('/podcasts/edit/{id}/update', [AdminPodcastController::class, 'update'])->name('admin.podcasts.update');
Route::delete('/podcasts/destroy/{id}', [AdminPodcastController::class, 'destroy'])->name('admin.podcasts.destroy');

Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users.index');
Route::get('/users/{id}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
Route::post('/users/{id}/store', [AdminUserController::class, 'store'])->name('admin.users.store');
Route::delete('/users/{id}/destroy', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');

Route::get('/manage/{model}', [AdminReviewController::class, 'list'])->name('admin.manage.list');
Route::get('/manage/{model}/{id}', [AdminReviewController::class, 'index'])->name('admin.manage.index');
Route::post('/manage/{model}/{id}/approve', [AdminReviewController::class, 'approve'])->name('admin.manage.approve');
Route::post('/manage/{model}/{id}/reject', [AdminReviewController::class, 'reject'])->name('admin.manage.reject');
