<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'homePage')->name('home');
    Route::get('/about', 'aboutPage')->name('about');
    Route::get('/blog', 'blogPage')->name('blog');
    Route::get('/blog/{id}', 'singleBlogPage')->name('singleBlog');
});

Route::get('/optimize', function () {
    \Artisan::call('optimize');
    return 'Application optimized successfully!';
});

Route::get('/server/migrate', function () {
    \Artisan::call('migrate');
    return 'Database migrated successfully!';
});
