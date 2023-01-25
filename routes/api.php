<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MPKController;

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

Route::get('mpk/cups', [MPKController::class,'getConsumoByCUPS']);
Route::get('mpk/constants', [MPKController::class,'getCalculationConstants']);
Route::post('mpk/plan', [MPKController::class,'getRecommendedPlan']);
Route::post('mpk/send-plan', [MPKController::class,'sendRecommendedPlan']);

Route::post('mpk/commercialization/validate-email', [MPKController::class,'validateEmailCommercialization']);
Route::post('mpk/commercialization/verification-code', [MPKController::class,'getVerificationCodeCommercialization']);
Route::post('mpk/commercialization/generate-contract', [MPKController::class,'generateContractCommercialization']);
Route::post('mpk/commercialization/status-contract', [MPKController::class,'getStatusContractCommercialization']);