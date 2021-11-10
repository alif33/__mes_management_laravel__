<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





// Division

Route::group(
    [
        'prefix' => '/'
    ],
    function ($router) {
        Route::get('/divisions', [DivisionController::class, 'index']);
        Route::get('/division/{id}', [DivisionController::class, 'show']);
        Route::post('/division', [DivisionController::class, 'store']);
        Route::put('/division/{id}', [DivisionController::class, 'update']);
        Route::delete('/division/{id}', [DivisionController::class, 'destory']);
    }
);

// District

Route::group(
    [
        'prefix' => '/'
    ],
    function ($router) {
        Route::get('/districts', [DistrictController::class, 'index']);
        Route::get('/districts/{id}', [DistrictController::class, 'find']);
        Route::post('/district', [DistrictController::class, 'store']);
        Route::put('/district/{id}', [DistrictController::class, 'update']);
        Route::delete('/district/{id}', [DistrictController::class, 'destory']);
    }
);
