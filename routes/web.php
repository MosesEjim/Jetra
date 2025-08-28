<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view('welcome');
});

// Telegram routes
Route::prefix('telegram')->group(function () {
    Route::post('/webhook', [TelegramController::class, 'webhook']);
    Route::post('/send-message', [TelegramController::class, 'sendMessage']);
    Route::get('/set-webhook', [TelegramController::class, 'setWebhook']);
    Route::get('/remove-webhook', [TelegramController::class, 'removeWebhook']);
    Route::get('/get-messages', [TelegramController::class, 'getMessages']);
})->withoutMiddleware([VerifyCsrfToken::class]);
