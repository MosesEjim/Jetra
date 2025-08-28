<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->default(1); // 1 = text, 2 = photo, etc.
            $table->string('sender');
            $table->text('message');
            $table->string('chat_id')->nullable(); // Telegram chat ID
            $table->string('telegram_message_id')->nullable(); // Telegram message ID
            $table->boolean('is_from_telegram')->default(false); // Whether message came from Telegram
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
