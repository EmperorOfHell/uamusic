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
        Schema::create('educations', function (Blueprint $table) {
            $table->bigInteger('diploma_number')->primary();
            $table->string('institution_name')->index();
            $table->integer('graduation_year');
            $table->string('specialty_number');
            $table->string('degree');
            $table->foreign('specialty_number')->references('number')->on('specialties');
            $table->foreign('institution_name')->references('name')->on('educational_institutions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
