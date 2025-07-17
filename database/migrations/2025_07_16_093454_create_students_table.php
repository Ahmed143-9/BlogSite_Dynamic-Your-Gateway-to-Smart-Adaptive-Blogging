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
            $table->increments('student_id');
            $table->string('name', 30)->default('Your Name');
            $table->string('city', 30)->nullable();
            $table->string('class', 30);
            $table->string('email', 50)->unique();
            $table->date('date_of_birth')->nullable();
            $table->integer('checking')->reference('student_id')->nullable();
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
