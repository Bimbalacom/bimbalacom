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


// Authentication routes
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Bimbala included
Route::view('/team','theme::team')->name('team');
Route::view('/contact','theme::contact')->name('contact');
Route::view('/about-us','theme::about_us')->name('about-us');
Route::redirect('/discord','https://discord.gg/tADx7aJusB');

// Include Wave Routes
Wave::routes();

