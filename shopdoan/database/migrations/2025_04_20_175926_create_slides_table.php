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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('sd_title')->nullable();
            $table->string('sd_link')->nullable();
            $table->string('sd_image')->nullable();
            $table->tinyInteger('sd_target')->default(1);
            $table->tinyInteger('sd_active')->default(1);
            $table->tinyInteger('sd_sort')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
