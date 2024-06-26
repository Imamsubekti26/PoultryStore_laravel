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
        Schema::create('wages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee');
            $table->string('reason');
            $table->date('date');
            $table->bigInteger('amount');
            $table->timestamps();

            $table->foreign('employee')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wages');
    }
};
