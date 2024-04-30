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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('surename');
            $table->string('nik');
            $table->string('address');
            $table->string('area');
            $table->string('phone');
            $table->string('position');
            $table->integer('base_salary');
            $table->string('username');
            $table->string('nickname');
            $table->string('password');
            $table->enum('status', ['free', 'busy', 'off']);
            $table->unsignedBigInteger('trip')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
