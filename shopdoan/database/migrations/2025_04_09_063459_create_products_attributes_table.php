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
        Schema::create('products_attributes', function (Blueprint $table) {
            $table->id();
            $table->integer('pa_product_id')->index()->default(0);
            $table->integer('pa_attribute_id')->index()->default(0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_attributes');
    }
};
