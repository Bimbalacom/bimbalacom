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
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\ToolsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use Wave\Facades\Wave;

// Authentication routes
Auth::routes();

// Voyager Admin routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Bimbala included
Route::get('/team', static function () {
    return view('theme::team', ['seo' => ['seo_title' => 'Our Team', 'seo_description' => 'Check out our awesome team. You can easily connect with them.',
            ]]);
})->name('team');
Route::get('/about-us', static function () {
    return view('theme::about_us', ['seo' => ['seo_title' => 'About Us', 'seo_description' => 'Here you can read part of our internal / external culture and what we believe in.',
    ]]);
})->name('about-us');
// Route::get('/try-it', static function () {
//     return view('theme::try_it', ['seo' => ['seo_title' => 'Try it', 'seo_description' => 'Try our product and be part of our beta testers group. We promise - you will love it!',
//     ]]);
// })->name('try-it');
Route::get('/integrations', static function () {
    return view('theme::integrations', ['seo' => ['seo_title' => 'Integrations', 'seo_description' => 'Everyone loves to work as a team. Here are part of our officially supported friends.',
    ]]);
})->name('integrations');
Route::get('/use-case', static function () {
    return view('theme::use_case', ['seo' => ['seo_title' => 'Use Cases', 'seo_description' => 'Here we provide examples of the best ways to use our system. If you have more ideas please share them with us.',
    ]]);
})->name('use-case');
Route::get('/apps', static function () {
    return view('theme::apps', ['seo' => [
        'seo_title' => 'Apps', 'seo_description' => 'Our applications are fast and simple. Doing what you love, where you want it.',
    ]]);
})->name('apps');
Route::prefix('tools')->name('tools.')->group(function () {
    Route::get('/', [ToolsController::class, 'index'])->name('index');
    Route::get('responsive-images', [ToolsController::class, 'responsiveImages'])->name('responsive-images');
});
Route::redirect('/discord','https://discord.gg/tADx7aJusB');


/***** Features pages *****/
Route::prefix('features')->name('features.')->group(function (){
    Route::get('/', [FeaturesController::class, 'index'])->name('index');
    Route::get('upvote', [FeaturesController::class, 'upvote'])->name('upvote');
    Route::get('faq', [FeaturesController::class, 'faq'])->name('faq');
    Route::get('roadmap', [FeaturesController::class, 'roadmap'])->name('roadmap');
});

Route::get('/contact', [ContactController::class, 'serveThePage'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact-send');

// Wave routes
Wave::routes();
