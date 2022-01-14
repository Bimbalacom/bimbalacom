<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ContactController;

// Authentication routes
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Bimbala included
Route::get('/team', static function () {
    return view('theme::team', ['seo' => ['seo_title' => 'Our Team', 'seo_description' => 'Check out our awesome team which consists of 2 crazy jacks-of-all-trades men. You can easily connect with them.',
            ]]);
})->name('team');
Route::get('/about-us', static function () {
    return view('theme::about_us', ['seo' => ['seo_title' => 'About Us', 'seo_description' => 'Read our amazing company history. It all became as a joke and now we grow strong.',
    ]]);
})->name('about-us');
Route::get('/try-it', static function () {
    return view('theme::try_it', ['seo' => ['seo_title' => 'Try it', 'seo_description' => 'Try our product and be part of our beta testers group. We promise - you will love it!',
    ]]);
})->name('try-it');
Route::redirect('/discord','https://discord.gg/tADx7aJusB');

Route::get('/contact', [ContactController::class, 'serveThePage'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact-send');

// Include Wave Routes
Wave::routes();

