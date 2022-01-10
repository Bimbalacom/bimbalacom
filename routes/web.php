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
Route::view('/team','theme::team')->name('team');
Route::view('/contact','theme::contact')->name('contact');
Route::view('/about-us','theme::about_us')->name('about-us');
Route::view('/integrations','theme::integrations')->name('integrations');
Route::redirect('/discord','https://discord.gg/tADx7aJusB');

Route::post('/contact', ContactController::class)->name('contact-send');

// Include Wave Routes
Wave::routes();

