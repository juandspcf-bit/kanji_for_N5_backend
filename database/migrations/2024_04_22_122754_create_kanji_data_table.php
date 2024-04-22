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
        Schema::create('kanji_data', function (Blueprint $table) {
            $table->id();
            $table->string('kanjiCharacter');
            $table->string('englishMeaning');
            $table->string('kanjiImageLink');
            $table->string('katakanaMeaning');
            $table->string('hiraganaMeaning');
            $table->string('videoLink');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kanji_data');
    }
};
