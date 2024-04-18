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
        Schema::create('ticket_service', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_number')->index();
            $table->string('service_name');
            $table->foreign('ticket_number')->references('ticket_number')->on('tickets')->onDelete('cascade');
            $table->foreign('service_name')->references('name')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_service');
    }
};
