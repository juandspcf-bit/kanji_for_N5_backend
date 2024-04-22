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
        Schema::create('audio_examples', function (Blueprint $table) {
            $table->id();
            $table->string('opus');
            $table->string('aac');
            $table->string('ogg');
            $table->string('mp3');
            $table->unsignedBigInteger('exampleID');
            $table->foreign('exampleID')->references('id')->on('examples');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audio_examples');
    }
};
