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
        Schema::create('products_keywords', function (Blueprint $table) {
            $table->id();
            $table->integer('pk_product_id')->default(0)->index();
            $table->integer('pk_keyword_id')->default(0)->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_keywords');
    }
};
