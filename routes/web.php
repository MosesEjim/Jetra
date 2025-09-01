<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;
use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view('welcome');
});

// Contact form route
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

// Telegram routes
Route::prefix('telegram')->group(function () {
    Route::post('/webhook', [TelegramController::class, 'webhook']);
    Route::post('/send-message', [TelegramController::class, 'sendMessage']);
    Route::get('/set-webhook', [TelegramController::class, 'setWebhook']);
    Route::get('/remove-webhook', [TelegramController::class, 'removeWebhook']);
    Route::get('/get-messages', [TelegramController::class, 'getMessages']);
})->withoutMiddleware([VerifyCsrfToken::class]);
