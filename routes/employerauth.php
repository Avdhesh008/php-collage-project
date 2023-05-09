<?php

use App\Http\Controllers\Employerauth\AuthenticatedSessionController;
use App\Http\Controllers\Employerauth\ConfirmablePasswordController;
use App\Http\Controllers\Employerauth\EmailVerificationNotificationController;
use App\Http\Controllers\Employerauth\EmailVerificationPromptController;
use App\Http\Controllers\Employerauth\NewPasswordController;
use App\Http\Controllers\Employerauth\PasswordResetLinkController;
use App\Http\Controllers\Employerauth\RegisteredUserController;
use App\Http\Controllers\Employerauth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['guest:employer'],'prefix'=>'employer','as'=>'employer.'],function(){
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::group(['middleware'=>['auth:employer'],'prefix'=>'employer','as'=>'employer.'],function(){
   
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::get('change-password',function(){
                    return view('employer.changePassword');
                })->name('view.changePassword');
                Route::post('change-password', [AuthenticatedSessionController::class, 'changePassword'])->name('changepassword');
});
