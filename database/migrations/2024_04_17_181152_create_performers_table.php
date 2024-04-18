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
        Schema::create('performers', function (Blueprint $table) {
            $table->string('nickname')->primary();
            $table->string('group_name')->index();
            $table->string('role_in_group');
            $table->string('birth_country');
            $table->bigInteger('education')->nullable();
            $table->foreign('group_name')->references('name')->on('groups')->onDelete('cascade');
            $table->foreign('education')->references('diploma_number')->on('educations')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performers');
    }
};
