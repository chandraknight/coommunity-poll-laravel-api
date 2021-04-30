<?php

use App\Http\Controllers\Api\PollsController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('polls',[PollsController::class,'index'])->name('polls.all');
Route::get('poll/{id}',[PollsController::class,'show'])->name('poll.show');
Route::post('poll/store',[PollsController::class,'store'])->name('poll.store');
Route::put('poll/update/{poll}',[PollsController::class,'update'])->name('poll.update');
Route::delete('poll/delete/{poll}',[PollsController::class,'destory'])->name('poll.destory');
Route::any('errors',[PollsController::class,'errors'])->name('poll.errors');
