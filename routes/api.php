<?php

use App\Http\Controllers\CakesController;
use App\Http\Controllers\CupcakeController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
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
Route::post('/login', [SessionController::class, 'store']);
Route::post('/register', [RegistrationController::class, 'store']);

Route::middleware('auth:api')->group(function () {
    Route::controller(CupcakeController::class)->group(function() {
        Route::get('/cupcakes/user/{user:id}', 'index');
        Route::post('/cupcakes/create', 'store');
    });
    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('/ingredients', [IngredientController::class, 'index']);
});