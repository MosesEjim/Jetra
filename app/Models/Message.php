<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'type',
        'sender',
        'message',
        'chat_id',
        'telegram_message_id',
        'is_from_telegram'
    ];

    protected $casts = [
        'is_from_telegram' => 'boolean',
    ];
}
