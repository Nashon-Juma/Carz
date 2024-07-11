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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('make');
            $table->string('model');
            $table->string('milage');
            $table->string('transmission');
            $table->string('seats');
            $table->string('luggage');
            $table->string('fuel');
            $table->json('features')->nullable(); 
            $table->string('category');
            $table->string('description');
            $table->year('year');
            $table->string('color');
            $table->string('rated');
            $table->string('leasing');
            $table->decimal('price_per_hour', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
