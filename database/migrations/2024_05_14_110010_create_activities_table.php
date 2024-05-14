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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('detail');
            $table->date('date');
            $table->enum('status', ['scheduled', 'delivered', 'canceled', 'done'])->default('scheduled');
            $table->unsignedBigInteger('partner');
            $table->unsignedBigInteger('trip')->nullable();
            $table->timestamps();

            $table->foreign('partner')->references('id')->on('partners');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
