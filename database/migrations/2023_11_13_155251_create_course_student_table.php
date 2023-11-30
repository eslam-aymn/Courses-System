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
        Schema::create('course_student', function (Blueprint $table) {
            $table->id();
            $table->foreignId("course_id")->constrained("courses")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("student_id")->constrained("students")->onUpdate("cascade")->onDelete("cascade");
            $table->enum("status" , ["pending" , "approve" , "reject"])->default("pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_student');
    }
};
