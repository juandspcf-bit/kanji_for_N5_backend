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
        Schema::create('unfinished_deleting_task_firebase', function (Blueprint $table) {
            $table->id();
            $table->string("uuid");
            $table->enum('unfinished_task', ['user_data', 'favorites', 'quiz_score', 'avatar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unfinished_deleting_task_firebase');
    }
};
