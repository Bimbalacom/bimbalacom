<?php

use App\Http\Controllers\GetDomainSearchResultsController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return auth()->user();
});

Route::prefix('webhooks')->group(function (){
    Route::webhooks('tenants', 'configured-tenant');
});
Route::get('/search', GetDomainSearchResultsController::class);

Wave::api();
