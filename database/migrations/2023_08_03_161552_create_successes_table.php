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
        Schema::create('successes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('text1')->nullable();
            $table->integer('count1')->nullable();
            $table->string('text2')->nullable();
            $table->integer('count2')->nullable();
            $table->string('text3')->nullable();
            $table->integer('count3')->nullable();
            $table->string('text4')->nullable();
            $table->integer('count4')->nullable();
            $table->string('img1');
            $table->string('img2');
            $table->boolean('active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('successes');
    }
};
