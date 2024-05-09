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
        Schema::create('supervisors', function (Blueprint $table) {
            $table->integer('Supervisor ID')->primary();
            $table->string('First name');
            $table->string('Last name');
            $table->string('Email');
            $table->string('Faculty');
            $table->string('password');
            $table->string('office');
            $table->foreignId('student_Student ID')->constrained();
            $table->foreignId('`t_a`_TA ID')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supervisors');
    }
};
