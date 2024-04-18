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
        Schema::create('concerts', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('city_name')->index();
            $table->string('address')->index();
            $table->date('date');
            $table->string('tour_name');
            $table->foreign('tour_name')->references('name')->on('tours');
            $table->foreign('city_name')->references('name')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concerts');
    }
};
