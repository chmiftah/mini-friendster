<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\ListFollowingController;
use App\Http\Controllers\TimelineControler;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Account\{Edit,Show};
use App\Http\Livewire\Status\Delete;
use App\Http\Livewire\Status\Shows;
use App\Http\Livewire\Status\EditStatus;


Route::get('/', Login::class)->name('home');


Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');


});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

     Route::post('logout', LogoutController::class)
        ->name('logout');


        Route::get('setting', Edit::class)->name('setting.user');

        Route::get('timeline',[TimelineControler::class,'index'])->name('timeline');
         Route::get('status/{hash}/edit', EditStatus::class)->name('status.edit');
         Route::get('status/{hash}/delete', Delete::class)->name('status.delete');

});



Route::get('user/{identifier}', Show::class)->name('account.show');
Route::get('status/{hash}', Shows::class)->name('status.show');
Route::get('user/{identifier}/{follow}',[FollowingController::class,'index'])->name('account.following');
Route::get('userlist',[ListFollowingController::class,'index'])->name('m.following');