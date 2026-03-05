<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Load routes trên domain API
$apiDomain = config('api-core.domain.api', 'api') . '.' . config('api-core.domain.root', 'cpc1hn.com.vn');
$versionPrefix = config('api-core.version_prefix', 'v4');

Route::middleware(['api', 'api.force_json', 'api.security_headers', 'api.locale'])
    ->domain($apiDomain)
    ->prefix($versionPrefix)
    ->group(function () {});
