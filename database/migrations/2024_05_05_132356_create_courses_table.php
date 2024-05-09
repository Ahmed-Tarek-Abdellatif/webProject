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
        Schema::create('courses', function (Blueprint $table) {
            $table->integer('Courses ID')->primary();
            $table->integer('Credit hours');
            $table->string('Pre-requisites');
            $table->string('Course name');
            $table->string('Major');
            $table->boolean('Avaliable');
            $table->string('Insturctors');
            $table->date('Time slots');
            $table->foreignId('supervisor_Supervisor ID')->constrained();
            $table->foreignId('`t_a`_TA ID')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
