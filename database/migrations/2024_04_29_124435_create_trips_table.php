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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('area');
            $table->string('estimation');
            $table->unsignedBigInteger('employee1')->nullable();
            $table->unsignedBigInteger('employee2')->nullable();
            $table->unsignedBigInteger('car')->nullable();
            $table->enum('status', ['scheduled', 'delivered', 'canceled', 'done']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
