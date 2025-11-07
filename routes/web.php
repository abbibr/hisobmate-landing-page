<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website');
});

Route::post('/store/waitlist', [UserController::class, 'store'])
    ->name('user.store.waitlist')
    ->middleware('api');
