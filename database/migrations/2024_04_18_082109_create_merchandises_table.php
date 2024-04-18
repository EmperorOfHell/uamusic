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
        Schema::create('merchandises', function (Blueprint $table) {
            $table->string('name')->primary();
            $table->string('tour_name')->index();
            $table->string('type');
            $table->float('cost');
            $table->foreign('tour_name')->references('name')->on('tours')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchandises');
    }
};
