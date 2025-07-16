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
        Schema::create('students_', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city', 30);
            $table->string('class');
            $table->string('phone')->nullable();
            $table->string('password');
            $table->string('confirm_password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_');
    }
};
