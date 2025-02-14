<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('theme:frontend')->group(function() {
   
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

        Route::get('/funerario/assistencial',   [App\Http\Controllers\ContentController::class,'view_ma'])->name('view_ma')->middleware('auth:web');
        Route::get('/funerario/estoque',        [App\Http\Controllers\ContentController::class,'view_me'])->name('view_me')->middleware('auth:web');
        Route::get('/cemiterio',                [App\Http\Controllers\ContentController::class,'view_cem'])->name('view_cem')->middleware('auth:web');
        Route::get('/clinica',                  [App\Http\Controllers\ContentController::class,'view_cli'])->name('view_cli')->middleware('auth:web');
        Route::get('/contabil',                 [App\Http\Controllers\ContentController::class,'view_con'])->name('view_con')->middleware('auth:web');
        Route::get('/emissor',                  [App\Http\Controllers\ContentController::class,'view_emi'])->name('view_emi')->middleware('auth:web');
        Route::get('/mobile/mutare',            [App\Http\Controllers\ContentController::class,'view_mut'])->name('view_mut')->middleware('auth:web');
        Route::get('/veicular',                 [App\Http\Controllers\ContentController::class,'view_sav'])->name('view_sav')->middleware('auth:web');
        Route::get('/telemarketing',            [App\Http\Controllers\ContentController::class,'view_tel'])->name('view_tel')->middleware('auth:web');
        Route::get('/manual',                   [App\Http\Controllers\ContentController::class,'view_man'])->name('view_man')->middleware('auth:web');

        //Route::Contato
        Route::get('/contato',          [App\Http\Controllers\ContatoController::class, 'contato'])->name('contato.form')->middleware('auth:web');
        Route::post('/salvar_contato',  [App\Http\Controllers\ContatoController::class,'save_contato'])->name('contato_save')->middleware('auth:web');



        Route::get('/usuario/exclusao/{id}', [App\Http\Controllers\UserController::class, 'del_user'])->name('del_user')->middleware('auth:web');;

});
/*
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;


Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
*/