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
        Schema::create('petitions', function (Blueprint $table) {
            $table->integer('Pestition serial number')->primary();
            $table->string('First name');
            $table->string('Last name');
            $table->string('Email');
            $table->integer('Mobile number');
            $table->string('Major');
            $table->integer('GPA');
            $table->string('Faculty');
            $table->foreignId('supervisor_Supervisor ID')->constrained();
            $table->foreignId('student_Student ID')->constrained();
            $table->foreignId('course_Course ID')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petitions');
    }
};
