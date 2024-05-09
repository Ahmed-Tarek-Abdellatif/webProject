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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('Student ID')->primary();
            $table->string('First name');
            $table->string('Last name');
            $table->string('Email');
            $table->integer('Mobile number');
            $table->string('Major');
            $table->decimal('GPA');
            $table->string('Faculty');
            $table->string('password');
            $table->foreignId('course_Course ID')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
