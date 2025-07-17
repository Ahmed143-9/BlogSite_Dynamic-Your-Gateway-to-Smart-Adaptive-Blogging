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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('stu_id');
            $table->foreign('stu_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->unsignedInteger('library_id');
            $table->foreign('library_id')->references('book_id')->on('libraries');
            
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
