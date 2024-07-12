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
            $table->unsignedBigInteger('user_id'); // Foreign key to users table (client)
            $table->string('img');
            $table->string('make');
            $table->string('model');
            $table->string('milage');
            $table->string('transmission');
            $table->string('seats');
            $table->string('luggage');
            $table->string('fuel');
            $table->string('category');
            $table->string('description');
            $table->year('year');
            $table->string('color');
            $table->string('rated');
            $table->string('leasing');
            $table->decimal('price_per_hour', 8, 2);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
