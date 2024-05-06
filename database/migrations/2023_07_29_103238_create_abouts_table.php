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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('telephone')->nullable();
            $table->string('annee_experience')->nullable();
            $table->string('title')->nullable();
            $table->text('short_description')->nullable();
            $table->string('text1')->nullable();
            $table->string('img1')->nullable();
            $table->string('text2')->nullable();
            $table->string('img2')->nullable();
            $table->text('full_description')->nullable();
            $table->string('about_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
