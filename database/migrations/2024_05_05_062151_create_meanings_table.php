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
        Schema::create('meanings', function (Blueprint $table) {
            $table->id();
            $table->string('english');
            $table->string('spanish');
            $table->unsignedBigInteger('kanji_id');
            $table->foreign('kanji_id')->references('id')->on('kanji_data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meanings');
    }
};
