<?php

return [
    'bot' => [
        'token' => env('TELEGRAM_BOT_TOKEN'),
        'username' => env('TELEGRAM_BOT_USERNAME'),
        'webhook_url' => env('TELEGRAM_WEBHOOK_URL'),
    ],
    
    'commands' => [
        'paths' => [
            app_path('Telegram/Commands'),
        ],
    ],
];
