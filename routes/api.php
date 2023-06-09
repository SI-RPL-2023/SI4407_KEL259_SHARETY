<?php

use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\TransactionController;
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


Route::resource('posts', PostController::class);
Route::post('/transaction-handling', [TransactionController::class, 'transactionHandling'])->name('transaction-handling');
Route::post('/transactions/check',[TransactionController::class,'check']);
